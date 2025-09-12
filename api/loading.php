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
    function GetQueryString(name) {
      var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
      var r = window.location.search.substr(1).match(reg);
      if(r!=null)return decodeURI(r[2]); return null;
    }
  </script>
  
  <script>
    const key = GetQueryString("key");
    const c1 = GetQueryString("c1");
    const c2 = GetQueryString("c2");
    // const redirectUrl = "http://ig2kv.bemobtrcks.com/go/" + key + "?c1=" + c1 + "&c2=" + c2;
  </script>

  <!-- <script>
    var s = document.createElement('script');
    s.src='//shaumtol.com/pfe/current/micro.tag.min.js?z=6089687'+'&sw=/sw-check-permissions-b3d69.js';
    s.onload = function(result) {
        switch (result) {
            case 'onPermissionDefault':
            window.location.replace(redirectUrl);break;
            case 'onPermissionAllowed':
            window.location.replace(redirectUrl);break;
            case 'onPermissionDenied':
            window.location.replace(redirectUrl);break;
            case 'onAlreadySubscribed':
            window.location.replace(redirectUrl);break;
            case 'onNotificationUnsupported':
            window.location.replace(redirectUrl);break;
        }
    }
    document.head.appendChild(s);
</script> -->
       
</head>
<body>
    <div><b>Loading...</b></div><br>
    <div class="loading"></div>
</body>
</html>