<?php

// header: 这行代码设置HTTP响应头，告诉客户端返回的数据格式是JSON。
header('Content-Type: application/json');

// $accessToken 和 $offer: 这两行定义了两个变量，用于存储访问令牌和优惠活动ID，这些将在后续的API请求中使用。
$accessToken = '6d8300890e21e3bc737b8374031625d2';
$offer = 150360;

// $_SERVER['REQUEST_METHOD']: 检查请求方法是否为POST；如果不是，则返回错误信息并终止脚本执行。
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'status' => 'success', 
        'message' => 'Verification code sent successfully',
        'tracker' => 'tracker'
    ]);
}
exit;