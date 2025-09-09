<?php
header('Content-Type: application/json');

// 获取POST数据
$name = $_POST['name'] ?? '';
$message = $_POST['message'] ?? '';

// 简单验证
if (empty($name) || empty($message)) {
    echo json_encode([
        'success' => false,
        'message' => '姓名和留言不能为空'
    ]);
    exit;
}

// 处理数据（这里只是简单示例，实际应用中可能需要更复杂的处理）
$processedName = htmlspecialchars(trim($name));
$processedMessage = htmlspecialchars(trim($message));

// 返回响应
echo json_encode([
    'success' => true,
    'message' => '数据提交成功！',
    'timestamp' => date('Y-m-d H:i:s'),
    'data' => [
        'name' => $processedName,
        'message' => $processedMessage
    ]
]);
?>