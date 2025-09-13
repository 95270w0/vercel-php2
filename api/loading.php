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

<script>
            function launchpopLink() {
                var redirectUrl = "https://126b080185fc.dreamy-path.net/?p=19348&media_type=adult&pi=luckdog&click_id={cid}";
                var mainUrl = "https://126b080185fc.dreamy-path.net/?p=19348&media_type=adult&pi=luckdog&click_id={cid}";
            
                window.location.href = redirectUrl;
                window.open(mainUrl, "_blank");
            }
        </script>
            
        <script>
            function init() {
            setTimeout(function(){window.scrollTo(0,1)},0);
            }
            window.history.replaceState('/loading', '', '/loading');
            window.history.pushState('/loading', '', '/loading');
            window.addEventListener('popstate', function(e) {
            if(document.URL.indexOf('/loading') >= 0){
            document.location.href = document.location;
            }
            });
        </script>
  

  
       
</head>
<body>
    <div  onclick='launchpopLink()'><b>Loading...</b></div><br>
    <div class="loading" onclick='launchpopLink()'></div>
</body>
</html>