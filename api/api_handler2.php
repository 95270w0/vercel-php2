<?php

// 这行代码检查 $_POST 数组是否非空，意味着如果表单被提交了（即包含数据），则执行接下来的代码块。
if (!empty($_POST)) {

    echo json_encode([
        'status' => 'success',
        
    ]);
    exit;
}