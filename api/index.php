<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Verification</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
            padding: 30px;
            position: relative;
        }
        
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
            font-weight: 600;
        }
        
        .instruction {
            text-align: center;
            color: #666;
            margin-bottom: 25px;
            line-height: 1.5;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #444;
        }
        
        .phone-input {
            display: flex;
            align-items: center;
        }
        
        .country-code {
            background-color: #f1f3f6;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-right: none;
            border-radius: 5px 0 0 5px;
            font-weight: 500;
        }
        
        input[type="text"] {
            flex: 1;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 0 5px 5px 0;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        
        input[type="text"]:focus {
            outline: none;
            border-color: #4a90e2;
            box-shadow: 0 0 0 2px rgba(74, 144, 226, 0.2);
        }
        
        .example {
            font-size: 13px;
            color: #888;
            margin-top: 5px;
        }
        
        .btn {
            background-color: #4a90e2;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            width: 100%;
            transition: background-color 0.3s;
        }
        
        .btn:hover {
            background-color: #3a80d2;
        }
        
        .error-message {
            background-color: #ffebee;
            color: #d32f2f;
            padding: 12px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .success-message {
            background-color: #e8f5e9;
            color: #2e7d32;
            padding: 12px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .loading {
            display: none;
            text-align: center;
            margin: 20px 0;
        }
        
        .loading-spinner {
            border: 4px solid #f3f3f3;
            border-top: 4px solid #4a90e2;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            animation: spin 1s linear infinite;
            margin: 0 auto;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        @media (max-width: 480px) {
            .container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Phone Verification</h1>
        
        <p class="instruction">Please enter your phone number to receive a verification PIN code.</p>
        
        <div class="error-message" id="errorMessage" style="display: none;">
            There was an error connecting to the verification service. Please try again later.
        </div>
        
        <div class="success-message" id="successMessage" style="display: none;">
            Verification code sent successfully!
        </div>
        
        <div class="loading" id="loading">
            <div class="loading-spinner"></div>
            <p>Processing your request...</p>
        </div>
        
        <form id="phoneForm">
            <div class="form-group">
                <label for="msisdn">Phone Number</label>
                <div class="phone-input">
                    <span class="country-code">+52</span>
                    <input type="text" name="msisdn" id="msisdn" placeholder="xx xxxx xxxx" required 
                           pattern="[0-9]{2} [0-9]{4} [0-9]{4}" title="Please enter 10 digits in the format: xx xxxx xxxx">
                </div>
                <p class="example">Example:33 xxxx xxxx</p>
            </div>
            
            <button type="submit" class="btn">Send Verification Code</button>
        </form>
    </div>

    <script>
        document.getElementById('phoneForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const input = document.getElementById('msisdn');
            const errorDiv = document.getElementById('errorMessage');
            const successDiv = document.getElementById('successMessage');
            const loadingDiv = document.getElementById('loading');
            
            // 隐藏 previous messages
            errorDiv.style.display = 'none';
            successDiv.style.display = 'none';
            
            // 简单的客户端验证
            if (!input.value.match(/^\d{2} \d{4} \d{4}$/)) {
                errorDiv.textContent = 'Please enter a valid phone number in the format: xxxx xxxx';
                errorDiv.style.display = 'block';
                return;
            }
            
            // 显示加载指示器
            loadingDiv.style.display = 'block';
            
            try {
                // 发送数据到服务器端处理
                const formData = new FormData();
                formData.append('msisdn', input.value);
                
                const response = await fetch('api_handler.php', {
                    method: 'POST',
                    body: formData
                });
                
                const result = await response.json();
                
                if (result.status === 'success') {
                    successDiv.textContent = result.message || 'Verification code sent successfully!';
                    successDiv.style.display = 'block';
                    
                    // 如果有tracker，重定向到验证页面
                    if (result.tracker) {
                        setTimeout(() => {
                            window.location.href = `verify.phtml?tracker=${result.tracker}`;
                        }, 2000);
                    }
                } else {
                    errorDiv.textContent = result.message || 'An error occurred. Please try again.';
                    errorDiv.style.display = 'block';
                }
            } catch (error) {
                errorDiv.textContent = 'Network error. Please check your connection and try again.';
                errorDiv.style.display = 'block';
                console.error('Error:', error);
            } finally {
                loadingDiv.style.display = 'none';
            }
        });
        
        // 格式化电话号码输入
        document.getElementById('msisdn').addEventListener('input', function(e) {
            // 移除所有非数字字符
            let value = e.target.value.replace(/\D/g, '');
            
            // 如果超过10位，截取前10位
            if (value.length > 10) {
                value = value.substring(0, 10);
            }
            
            // 根据数字长度进行格式化
            let formattedValue = value;
            if (value.length > 6) {
                formattedValue = value.substring(0, 2) + ' ' + value.substring(2, 6) + ' ' + value.substring(6, 10);
            } else if (value.length > 2) {
                formattedValue = value.substring(0, 2) + ' ' + value.substring(2, 6);
            }
            
            // 更新输入框的值
            e.target.value = formattedValue;
            
        });
    </script>
</body>
</html>