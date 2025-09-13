<?php

// 这行代码检查 $_POST 数组是否非空，意味着如果表单被提交了（即包含数据），则执行接下来的代码块。
if (!empty($_POST)) {

    // 这是一个异常处理块的开始。如果在 try 块中发生任何异常（错误），控制将转移到 catch 块中。
    try {
        // 从 $_POST 数组中获取用户提交的 pin 和 tracker 值，并分别赋值给 $pin 和 $tracker 变量。
        $pin = $_POST['pin'];
        $tracker = $_POST['tracker'];
        
        // 构建一个 URL，使用 http_build_query 函数将查询参数（pin 和 tracker）编码并添加到基础 URL 中。
        $url = 'https://api.tc-clicks.com/api/v1/verify?'
            . http_build_query(['pin' => $pin, 'tracker' => $tracker]);
        // 初始化一个 cURL 会话，准备进行 HTTP 请求，以指定的 URL 开始。
        $ch = curl_init($url);
        // 设置 cURL 选项，使得返回结果以字符串形式返回，而不是直接输出。
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // 执行 cURL 会话，发送请求并获取响应，结果保存在 $response 变量中。
        $response = curl_exec($ch);
        // 关闭 cURL 会话，以释放系统资源。
        curl_close($ch);

        // 初始化一个空字符串用于存储可能出现的错误信息。
        $errorMessage = '';

        // 解析 JSON 格式的响应，将其转换为 PHP 数组。此处使用了类型注释，指定 $result 将具有 status 和 message 字段。
        /** @var array{status:string,message:string} $result */
        $result = json_decode($response, true, 512, JSON_THROW_ON_ERROR);

        // 检查 $result 数组中的 status 是否为 'ok'，表示请求成功。
        // 如果状态为 'ok'，则重定向到 $result['redirectUrl']（如果存在），否则返回json。然后使用 exit; 停止脚本执行。
        if ($result['status'] === 'ok') {
            if (!empty($result['redirectUrl'])) {
                header('Location: ' . $result['redirectUrl']);
                exit;
            } else {
                // 返回JSON响应
                echo json_encode([
                    'status' => 'success',
                    'message' => $result['message']
                ]);
                exit;
            }
        }
        

        // Not OK. Set error message
        // 如果状态不是 'ok'，则将返回的错误消息保存到 $errorMessage 变量中。
        $errorMessage = $result['message'];

        // 如果有任何错误信息，则抛出异常，终止当前操作并将错误信息传递给捕获块。
        throw new Exception($errorMessage);
      
    } 
    
    // 如果在 try 块中抛出任何异常，程序将跳转到这里，并将 $errorMessage 设置为 'Server error'
    catch (Exception $exception) {
        echo json_encode([
            'status' => 'error',
            'message' => $exception->getMessage()
        ]);
    }
}

// 停止脚本执行，确保不会继续执行后续代码。
exit;