<?php

// header: 这行代码设置HTTP响应头，告诉客户端返回的数据格式是JSON。
header('Content-Type: application/json');

// $accessToken 和 $offer: 这两行定义了两个变量，用于存储访问令牌和优惠活动ID，这些将在后续的API请求中使用。
$accessToken = '6d8300890e21e3bc737b8374031625d2';
$offer = 146278;

// $_SERVER['REQUEST_METHOD']: 检查请求方法是否为POST；如果不是，则返回错误信息并终止脚本执行。
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
    exit;
}

// try ... catch: 开始一个异常处理块。
try {
    // 验证和清理输入，isset 和 empty: 检查 $_POST 中是否包含 msisdn 字段，并且该字段不为空。如果不满足条件，则抛出异常。
    if (!isset($_POST['msisdn']) || empty(trim($_POST['msisdn']))) {
        throw new Exception('Phone number is required');
    }

    // preg_replace: 清除 msisdn 中的非数字字符。
    $msisdn = preg_replace('/\D/', '', $_POST['msisdn']);

    // strlen: 检查 msisdn 的长度是否为11，如果不是，则抛出异常。
    if (strlen($msisdn) !== 11) {
        throw new Exception('Please enter a valid phone number');
    }
    
    // 获取客户端IP: 从服务器变量中获取用户的IP地址。如果存在 HTTP_X_FORWARDED_FOR，则说明请求来自代理服务器，提取第一个IP地址。
    $ip = $_SERVER['REMOTE_ADDR'];
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ips = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        $ip = trim(reset($ips));
    }
    
    // 构建API请求URL，http_build_query: 将数组转换为URL查询字符串，以便构造完整的API请求URL。
    $url = 'https://api.tc-clicks.com/api/v1/sendpin?' . http_build_query([
        'access-token' => $accessToken,
        'offer' => $offer,
        'ip' => $ip,
        'msisdn' => $msisdn,
    ]);
    
    // 发起API请求
    // curl_init: 初始化一个cURL会话。
    // curl_setopt: 设置cURL选项，其中 CURLOPT_RETURNTRANSFER 表示将返回结果作为字符串，而不是直接输出。
    // curl_exec: 执行cURL会话并获取服务器响应。
    // curl_getinfo: 获取关于上一个cURL传输的信息，比如HTTP状态码。
    // curl_error: 获取最后一次cURL操作的错误信息。
    // curl_close: 关闭cURL会话。
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $error = curl_error($ch);
    
    curl_close($ch);
    
    // 检查API请求是否成功，如果失败则抛出异常，带上网络错误信息。
    if ($response === false) {
        throw new Exception('Network error: ' . $error);
    }
    
    // 解析API响应
    // json_decode: 将JSON格式的响应解析为PHP数组。
    // json_last_error: 检查解析过程中是否发生错误。
    $result = json_decode($response, true);
    
    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new Exception('Invalid API response');
    }
    
    // 检查API响应的状态。如果状态为ok，则返回一个JSON响应，表示验证码发送成功，并包含跟踪信息。
    // 如果状态不是 ok，则从 $result 中提取错误信息，如果没有找到，则默认使用“未知错误”。
    if ($result['status'] === 'ok') {
        echo json_encode([
            'status' => 'success', 
            'message' => 'Verification code sent successfully',
            'tracker' => $result['tracker']
        ]);
    } else {
        $errorMessage = $result['message'] ?? 'Unknown error occurred';
        
        // 如果有详细错误信息，提取它们
        // 这段代码检查是否存在更详细的错误信息。如果 errors 是一个数组，逐一提取每个字段的错误信息并合并。
        // 如果有详细错误信息，将其添加到 $errorMessage 中，以便于调试和显示。
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

        // 如果有任何错误信息，则抛出异常，终止当前操作并将错误信息传递给捕获块。
        throw new Exception($errorMessage);
    }
    
} 
// catch (Exception $e): 捕获之前 try 块中抛出的异常。
// 返回JSON格式的错误响应，包含状态和相应的错误消息。然后通过 exit 结束脚本执行。
catch (Exception $exception) {
    echo json_encode([
        'status' => 'error',
        'message' => $exception->getMessage()
    ]);
    exit;
}