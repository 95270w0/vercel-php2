<?php
// 设置响应头为JSON
header('Content-Type: application/json');

// 配置参数
$accessToken = '6d8300890e21e3bc737b8374031625d2';
$offer = 152217;
$ip = '189.203.181.34';
// 仅处理POST请求
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
    exit;
}

try {
    // 验证和清理输入
    if (!isset($_POST['msisdn']) || empty(trim($_POST['msisdn']))) {
        throw new Exception('Phone number is required');
    }
    
    $msisdn = preg_replace('/\D/', '', $_POST['msisdn']);
    
    if (strlen($msisdn) !== 10) {
        throw new Exception('Please enter a valid phone number');
    }
    
    // 获取客户端IP
    // $ip = $_SERVER['REMOTE_ADDR'];
    // if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    //     $ips = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
    //     $ip = trim(reset($ips));
    // }
    
    // 构建API请求URL
    $url = 'https://api.tc-clicks.com/api/v1/sendpin?' . http_build_query([
        'access-token' => $accessToken,
        'offer' => $offer,
        'ip' => $ip,
        'msisdn' => $msisdn,
    ]);
    
    // 发起API请求 - 解决SSL证书问题
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    
    // SSL证书验证解决方案
    // 方案1: 使用系统的CA证书包（如果可用）
    if (is_file('/etc/ssl/certs/ca-certificates.crt')) {
        curl_setopt($ch, CURLOPT_CAINFO, '/etc/ssl/certs/ca-certificates.crt');
    } 
    // 方案2: 使用PHP包含的证书包（如果可用）
    elseif (is_file(__DIR__ . '/cacert.pem')) {
        curl_setopt($ch, CURLOPT_CAINFO, __DIR__ . '/cacert.pem');
    }
    // 方案3: 禁用SSL验证（仅用于测试环境）
    else {
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    }
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $error = curl_error($ch);
    
    curl_close($ch);
    
    if ($response === false) {
        throw new Exception('Network error: ' . $error);
    }
    
    // 解析API响应
    $result = json_decode($response, true);
    
    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new Exception('Invalid API response');
    }
    
    if ($result['status'] === 'ok') {
        echo json_encode([
            'status' => 'success', 
            'message' => 'Verification code sent successfully',
            'tracker' => $result['tracker']
        ]);
    } else {
        $errorMessage = $result['message'] ?? 'Unknown error occurred';
        
        // 如果有详细错误信息，提取它们
        if (isset($result['errors']) && is_array($result['errors'])) {
            $detailedErrors = [];
            foreach ($result['errors'] as $fieldErrors) {
                if (is_array($fieldErrors)) {
                    $detailedErrors = array_merge($detailedErrors, $fieldErrors);
                }
            }
            if (!empty($detailedErrors)) {
                $errorMessage .= ': ' . implode(', ', $detailedErrors);
            }
        }
        
        throw new Exception($errorMessage);
    }
    
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
    exit;
}