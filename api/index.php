<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>简单前后端交互示例</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
        }
        .container {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        #response {
            margin-top: 20px;
            padding: 10px;
            border: 1px dashed #ccc;
            border-radius: 4px;
        }
        .success {
            color: #4CAF50;
        }
        .error {
            color: #f44336;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>简单前后端交互示例</h2>
        <form id="dataForm">
            <div class="form-group">
                <label for="name">姓名:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="message">留言:</label>
                <input type="text" id="message" name="message" required>
            </div>
            <button type="submit">提交</button>
        </form>
        
        <div id="response"></div>
    </div>

    <script>
        document.getElementById('dataForm').addEventListener('submit', function(e) {
            e.preventDefault(); // 阻止表单默认提交行为
            
            // 获取表单数据
            const formData = new FormData(this);
            
            // 发送AJAX请求
            fetch('process.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                const responseDiv = document.getElementById('response');
                if (data.success) {
                    responseDiv.innerHTML = `<p class="success">${data.message}</p>`;
                    responseDiv.innerHTML += `<p>提交时间: ${data.timestamp}</p>`;
                    responseDiv.innerHTML += `<p>您提交的数据: 姓名 - ${data.data.name}, 留言 - ${data.data.message}</p>`;
                } else {
                    responseDiv.innerHTML = `<p class="error">${data.message}</p>`;
                }
            })
            .catch(error => {
                document.getElementById('response').innerHTML = 
                    `<p class="error">请求失败: ${error}</p>`;
            });
        });
    </script>
</body>
</html>