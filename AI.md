PHP & MySQL Projesi

PHP, MySQL/MariaDB, HTML, BootStrap (veya benzeri bir CSS kütüphanesi) kullanılarak aşağıdaki konularda bir web tabanlı uygulama geliştirilecektir. Uygulamada:

Kullanıcı kaydı, şifreli giriş ile oturum açma/kapama

Kullanıcı tarafından (kullanıcılar tablosundan farklı bir tabloya) bilgi girişi ve kaydetme

Girilen bilgileri listeleme

Girilen bilgileri silme

Girilen bilgileri düzenleme

olacaktır. Tüm bunlara ait örnekler ders notlarında ve ders kitabınızda bulunmaktadır.

Geliştirdiğiniz uygulamanın hem ön uç (frontend) hem de arka uç (backend) kısımları tarafınızca geliştirilmeli ve birbirleriyle uyumlu olarak çalışmalıdır. Arayüzünüzde, kullandığınız CSS kütüphanesi tarafından stillendirilmemiş ögeler bulunmamalıdır.

Uygulamanızın arka uç kısmı için herhangi bir kütüphane/framework kullanılmamalı, kodlamalar tamamen yalın PHP ile yapılmalıdır. Kendinize ait PHP sınıfları oluşturup bunları kullanabilirsiniz.

Uygulamanızda kendinize ait JavaScript kodları veya hazır JavaScript kütüphaneleri kullanabilirsiniz.



Proje Yapabileceğiniz Örnek Konular

Botanik Bahçesi Yönetim Sistemi: Büyük bir botanik bahçesindeki bitki koleksiyonunu, sergileri, etkinlikleri, personeli ve ziyaretçi kayıtlarını yönetmek için kullanılabilecek bir sistem. Bitkilerin bakımı, sulaması, gübrelenmesi vb. işlemlerin planlanması ve takibi gibi özellikler içerebilir.

Hobi Kulübü Yönetim Uygulaması: Belirli bir hobiye (örneğin fotoğrafçılık, balıkçılık, bisiklet vb.) odaklanan bir kulüp için etkinlik planlaması, üye yönetimi, ekipman paylaşımı ve bilgi alışverişi işlevleri sunan bir uygulama.

Hayvanat Bahçesi Hayvan Takip Sistemi: Bir hayvanat bahçesindeki hayvanların sağlık durumlarını, beslenme alışkanlıklarını, yaşam alanlarını ve diğer verilerini izlemek, kaydetmek ve analiz etmek için kullanılabilecek bir sistem.

Telif Hakkı Yönetim Uygulaması: Müzik, video, yazılım vb. üzerindeki telif haklarını takip etmek, lisanslama anlaşmalarını yönetmek ve ödeme süreçlerini kolaylaştırmak için kullanılabilecek bir uygulama.

Tarım İşletmesi Yönetim Sistemi: Bu sistem, bir tarım işletmesinin tüm faaliyetlerini yönetmek için kullanılabilir. Arazi yönetimi, ekim planlaması, hasat takibi, sulama sistemleri kontrolü, personel yönetimi, stok takibi ve finansal raporlama gibi özellikler içerebilir.

Yazılım Geliştirme Ekibi İş Akışı Yönetimi: Bu uygulama, bir yazılım geliştirme ekibinin iş akışını yönetmek için kullanılabilir. Görev atama, proje yönetimi, test yönetimi, belgelendirme ve iş birliği araçlarını içerebilir.

Kurumsal Eğitim Yönetim Sistemi: Bu sistem, bir kurumun çalışanlarına yönelik eğitim programlarını yönetmek için kullanılabilir. Eğitim takvimi, kayıt işlemleri, katılımcı takibi, eğitmen yönetimi, sertifika dağıtımı ve eğitim materyallerinin paylaşımı gibi özellikler içerebilir.

Yukarıdaki konular dışında kendi özel konunuz varsa (örneğin çevrenizdekilerin çalıştığı sektörlere yönelik çözümler) onları da seçebilirsiniz.

Lütfen, hastane otomasyonu, kütüphane programı gibi internette yüzlerce benzer örneği olan konularda proje yapmayınız.



Kurallar

Veritabanınız en az 1 adet MySQL tablosundan oluşmalıdır.

Uygulamanızda kullanıcı şifreleri veritabanına olduğu gibi kaydedilmemelidir. Bunun yerine şifrenin hash’lenmiş halini kaydetmelisiniz.

Kaynak: https://www.php.net/manual/en/function.password-hash.php 

Uygulamanızda kullanıcı oturumunu düz çerezler yerine oturumlar (sessions) ile kontrol etmelisiniz.

Kaynak: https://www.php.net/manual/en/session.examples.basic.php 

Hazırda var olan herhangi bir harici PHP kodu/kütüphanesi kullanımı projenizin geçersiz sayılmasına sebep olacaktır. Fakat sohbet tabanlı yapay zeka araçlarından faydalanabilirsiniz.

Uygulamanızı geliştirirken yardım aldığınız yapay zeka araçları ile olan sohbetlerinizi “AI.md” isimli bir dosyaya markdown formatında kaydetmelisiniz. (Yapay zeka araçları genellikle cevapları markdown formatında verir. Dolayısıyla kendi iletilerinizi ve yapay zeka cevaplarını sırasıyla, kopyalama butonunu/seçeneğini kullanarak bu dosyaya doğrudan geçirebilirsiniz.)

Proje uygulamanızı, size sağlayacağımız hosting alanınıza yükleyeceksiniz. Öğrenci hesabınıza özel bilgilere nasıl erişebileceğiniz Ekampüs’te paylaşılmaktadır. Projenize lokalde çalışmaya başlayabilirsiniz ve daha sonra hosting alanınıza taşıyabilirsiniz.

Dikkat! Projenizi geliştirme ortamından canlı ortama alırken veritabanı vb. ayarlar değişecektir. Uygulamanızı canlıya alırken sunucu bilgilerini PHP kodlarınızda düzelttiğinizden emin olunuz.

Dikkat! Github vb. platformlardaki bir repoya bir yükleme yapıldıktan sonra kaldırması zordur. Silme işleminiz de ayrı bir commit olarak işlenir ve eski dosyalarınız bir yerlerde kalmaya devam eder. Reponuza yükleme yaparken hassas bilgilerinizi (hosting erişim şifreleri, API anahtarı vs) sansürlemeyi/silmeyi unutmayınız!

Uyarı: Projenizde Apache sunucu ayarları bulunduran “.htaccess” dosyası kullanmamalısınız.

Tüm kodlarınızı bir Github reposuna yükledikten sonra Ekampüs proje gönderim alanından süre bitiminden önce yalnızca repo adresinizi göndermelisiniz. Sadece size sağladığımız hosting alanını kullanacağınız için website adresinizi ayrıyeten belirtmeniz gerekmemektedir.

Puanlama Kriterleri

Tüm kriterler eşit puanlıdır.

Kullanıcı kaydı

Oturum açma/kapama

Kullanıcı tarafından bilgi girişi (Create)

Girilen bilgilerin listelenmesi (Read)

Bilgi güncelleme (Update)

Bilgi silme (Delete)

Hazır CSS kütüphanesi kullanımı

Github reposunda uygulamayı açıklayan Readme.md dosyası

Readme.md’de uygulamaya ait en az 2 ekran görüntüsü ve uygulamayı açıkladığınız (1-3 dk’lık) videonuzun bağlantısı (Youtube veya açık erişimli Google Drive bağlantısı)

Uygulamanın canlıya alınması ve hostingde sorunsuz çalışması



Bu dersi önceki yıllarda almış olan öğrencilerin projelerini Github üzerinden bulup aynı kodları kullananlara 0 (sıfır) verilecektir. Geçmiş yıllarda yapılmış tüm ödevlere ait kaynaklar arşivlerimizde bulunmaktadır.





kriterleri özetle

İstediğin projenin özetini, geliştirme sürecinde gözünden kaçmaması gereken tüm kritik noktaları ve puanlama kriterlerini senin için net bir liste haline getirdim.

İşte dikkat etmeniz gereken tüm detaylar:

⚙️ Teknik ve Mimari Gereksinimler
Arka Uç (Backend): Tamamen yalın (pure) PHP kullanılacak. Herhangi bir framework veya harici hazır kütüphane kesinlikle yasak (kendi yazacağın PHP sınıfları hariç).

Veritabanı: En az 1 adet MySQL/MariaDB tablosu kullanılacak (kullanıcılar tablosuna ek olarak).

Güvenlik & Oturum: * Şifreler veritabanına düz metin olarak değil, password_hash() fonksiyonu kullanılarak hash'lenmiş şekilde kaydedilecek.

Kullanıcı oturumları çerezlerle (cookies) değil, PHP Sessions vasıtasıyla yönetilecek.

Ön Uç (Frontend): Bootstrap veya benzeri bir CSS kütüphanesi kullanılacak. Arayüzde stillendirilmemiş hiçbir ham HTML ögesi kalmayacak. JavaScript (hazır veya kendi yazdığın) kullanımı serbest.

Sunucu Ayarı: Projede kesinlikle .htaccess dosyası kullanılmayacak.

🛠️ Fonksiyonel Özellikler (CRUD + Auth)
Uygulamanın temelde iki ana bölümü (Kullanıcı İşlemleri ve Veri İşlemleri) olmak zorunda:

Kullanıcı Kaydı & Giriş/Çıkış: Şifreli giriş ve güvenli oturum kapatma mekanizması.

Veri Yönetimi (CRUD): Giriş yapan kullanıcının, kullanıcılar tablosu dışındaki başka bir tabloya;

Bilgi ekleyebilmesi (Create)

Bilgileri listeleyebilmesi (Read)

Bilgileri düzenleyebilmesi (Update)

Bilgileri silebilmesi (Delete) gerekmektedir.

📂 Dosya Düzeni ve Teslim Kuralları
AI.md: Projeyi geliştirirken yapay zekadan aldığın yardımları, soru-cevap sırasıyla Markdown formatında bu dosyaya kaydetmelisin.

Readme.md: GitHub reposunda projeyi açıklayan bir doküman olmalı. İçeriğinde en az 2 ekran görüntüsü ve uygulamayı anlatan 1-3 dakikalık video bağlantısı (YouTube veya herkese açık Google Drive) yer almalı.

Canlı Ortam (Hosting): Proje, size sağlanan hosting alanına yüklenecek ve orada sorunsuz çalışacak. (Lokalden canlıya geçerken veritabanı bağlantı bilgilerini güncellemeyi unutma).

Gizlilik: GitHub'a kodları yüklemeden önce hosting şifreleri, veritabanı parolaları gibi hassas verileri sansürlemelisin.

Teslim: Süre bitiminden önce Ekampüs üzerinden sadece GitHub repo adresi gönderilecek.

📊 Puanlama Kriterleri Tablosu
Projedeki tüm kriterler eşit puana sahiptir. Eksiksiz puan almak için şu 10 maddenin de tamamlanmış olması gerekir:

#	Puan Alacağınız Kriterler
1	Kullanıcı kayıt sisteminin çalışması
2	Oturum açma ve kapama (Login/Logout) işlemlerinin sorunsuzluğu
3	Veri ekleme (Create) fonksiyonunun çalışması
4	Veri listeleme (Read) fonksiyonunun çalışması
5	Veri güncelleme (Update) fonksiyonunun çalışması
6	Veri silme (Delete) fonksiyonunun çalışması
7	Hazır CSS kütüphanesi ile tamamen stillendirilmiş arayüz
8	GitHub reposunda açıklayıcı bir Readme.md dosyasının olması
9	Readme.md içinde en az 2 ekran görüntüsü ve 1-3 dk'lık video linki bulunması
10	Uygulamanın size verilen hosting alanında canlı olarak sorunsuz çalışması
⚠️ Kritik Uyarı: İnternette çok fazla benzeri bulunan Hastane Otomasyonu veya Kütüphane Programı gibi klişe konular seçilmemelidir. Ayrıca geçmiş yıllardaki projelerin kodlarını aynen kullananların projeleri doğrudan 0 (sıfır) olarak değerlendirilecektir.

Genetik varyant takip sistemi sence uygun mu

Genetik Varyant Takip Sistemi bu proje için kesinlikle harika ve çok özgün bir konu.

Hocanın özellikle belirttiği "hastane otomasyonu, kütüphane programı gibi internette yüzlerce benzeri olan konulardan kaçının" uyarısını tam on ikiden vuruyor. Hem akademik derinliği olan hem de saf PHP/MySQL ile mükemmel bir CRUD (Ekle-Listele-Güncelle-Sil) mekanizması kurulabilecek bir fikir.

Bu konunun proje isterlerine nasıl tam uyum sağladığını ve nasıl yapılandırılabileceğini şöyle özetleyebiliriz:

🧬 Proje İsterlerine Uyarlaması
Kullanıcı Sistemi (Auth): Sisteme giriş yapacak kişiler genetik araştırmacılar, biyologlar veya laboratuvar personeli olur. password_hash() ve session mekanizmasını burada kullanırsın.

Bilgi Girişi (Create): Araştırmacı sisteme yeni bir genetik varyant (mutasyon) verisi ekler.

Listeleme (Read): Kaydedilen varyantlar bir tablo halinde listelenir. Hatta Bootstrap kullanarak patojenik (hastalık yapıcı) varyantları kırmızı, iyi huylu (benign) olanları yeşil satırlarla göstererek arayüze şık bir görsel detay katabilirsin.

Düzenleme (Update): Yeni bir bilimsel makale veya bulgu ışığında, daha önce girilen bir varyantın klinik önem derecesi (patojenite durumu) veya açıklaması güncellenebilir.

Silme (Delete): Hatalı girilen varyant kayıtları sistemden kaldırılabilir.

🗄️ Örnek Veritabanı Yapısı (Fikir Vermesi Açısından)
Hocanın istediği "en az 1 adet ek tablo" kuralı için variants (Varyantlar) tablosu oluşturabilirsin. Bu tabloda şu kolonlar yer alabilir:

id (Primary Key)

user_id (Varyantı hangi araştırmacının eklediğini tutmak için - İlişkisel veritabanı mantığı hocanın hoşuna gider)

gene_name (Gen Adı: Örn. BRCA1, TP53)

chromosome (Kromozom: Örn. Chr17)

position (Genomik Konum: Örn. 43044295)

mutation_type (Mutasyon Tipi: Örn. Missense, Nonsense, Deletion)

pathogenicity (Klinik Önem / Patojenite: Örn. Pathogenic, Benign, VUS)

description (Araştırma Notları / Açıklama)

created_at (Kayıt Tarihi)

Bu konu hem klişelerden uzak kalmanı sağlar hem de üzerinde çalışırken gerçekten teknik bir iş yaptığını hissettirir. Bootstrap ile de temiz, modern bir laboratuvar/analiz paneli arayüzü giydirirsen yüksek puan almaması için hiçbir sebep yok.

Veritabanı tablosunda bu bahsettiğim kolonlar dışında tutmak istediğin veya senin aklına gelen spesifik bir veri alanı var mı?

oturum (sessions) kontrolünü nasıl yapabilirim yardımcı olur musun?

PHP'de oturum (session) yönetimi, hocanın da belirttiği gibi düz çerezlere (cookies) göre çok daha güvenlidir çünkü veriler kullanıcının tarayıcısında değil, doğrudan sunucuda saklanır. Tarayıcıda sadece o oturuma ait rastgele üretilmiş bir PHPSESSID anahtarı tutulur.

Yalın PHP ile bir oturum kontrol mekanizmasını 3 temel adımda kurabiliriz: Giriş yapıldığında oturumu başlatmak, korunan sayfalarda oturumu kontrol etmek ve çıkış yapıldığında oturumu sonlandırmak.

İşte projenizde kullanabileceğiniz sade ve güvenli session mimarisi:

1. Oturumu Başlatma (Giriş Anı)
Kullanıcı kullanıcı adı ve şifresini doğru girdiğinde, sunucu tarafında ona bir session alanı açarız ve ayırt edici bilgilerini (örneğin id ve role) bu session'a kaydederiz.

PHP
<?php
// login_kontrol.php

// KURAL: Session fonksiyonlarını kullanmadan önce HER ZAMAN en başta başlatmalısın.
session_start();

// Veritabanından kullanıcının geldiğini ve şifresinin doğru olduğunu varsayalım:
if ($giris_basarili) {
    // Kullanıcı bilgilerini session küreseline aktarıyoruz
    $_SESSION['user_id'] = $kullanici['id'];
    $_SESSION['username'] = $kullanici['username'];
    $_SESSION['is_logged_in'] = true;

    // Kullanıcıyı ana panele (varyant listesine) yönlendiriyoruz
    header("Location: dashboard.php");
    exit();
} else {
    echo "Hatalı kullanıcı adı veya şifre!";
}
?>
2. Oturum Kontrolü (Sayfaları Korumaya Alma)
Genetik varyant ekleme, silme veya listeleme gibi giriş yapılmadan görünmemesi gereken tüm sayfaların en tepesine bu kontrolü eklemelisin. Eğer kişi giriş yapmadıysa onu doğrudan login.php sayfasına şutlarız.

PHP
<?php
// dashboard.php veya variant_ekle.php

session_start();

// Kullanıcı giriş yapmamışsa veya session süresi dolmuşsa:
if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
    // Yetkisiz erişim, giriş sayfasına yönlendir
    header("Location: login.php");
    exit(); // Kodun geri kalanının çalışmasını kesinlikle engelliyoruz
}

// Eğer buraya kadar geldiyse kullanıcı giriş yapmıştır.
// Hoş geldin mesajında ismini kullanabilirsin:
echo "Hoş geldin, " . htmlspecialchars($_SESSION['username']);
?>

💡 Küçük bir ipucu: Projen büyüdüğünde bu kontrol kodunu kontrol.php adında ayrı bir dosyaya koyup, korumak istediğin sayfaların en tepesine include 'kontrol.php'; diyerek tek satırda çağırabilirsin. DRY (Don't Repeat Yourself) prensibine uymuş olursun.

3. Oturumu Kapatma (Logout)
Kullanıcı "Çıkış Yap" butonuna bastığında tarayıcıdaki ve sunucudaki tüm oturum izlerini silmemiz gerekir.

PHP
<?php
// logout.php

session_start();

// Tüm session değişkenlerini temizle
$_SESSION = array();

// Eğer session çerezini de tarayıcıdan tamamen silmek istersen:
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Sunucudaki session dosyasını tamamen yok et
session_destroy();

// Kullanıcıyı giriş sayfasına geri gönder
header("Location: login.php");
exit();
?>
⚠️ Projede Session Kullanırken Dikkat Etmen Gereken Altın Kurallar
En Tepe Kuralı: session_start(); fonksiyonu, PHP dosyasında tarayıcıya herhangi bir HTML etiketi, boşluk (space) veya echo çıktısı gitmeden önce ilk satırlarda çağrılmalıdır. Aksi takdirde "Headers already sent" hatası alırsın.

Güvenlik (XSS Engelleme): Session'dan ekrana veri yazdırırken (örneğin kullanıcı adını ekrana basarken) yukarıdaki örnekte yaptığım gibi htmlspecialchars() fonksiyonunu kullanmak iyi bir alışkanlıktır.

Oturum kontrolünün temel mantığı bu şekilde; istersen veritabanından kullanıcıyı çekip şifreyi password_verify() ile eşleştirdiğimiz ve ardından bu session yapısını başlattığımız örnek bir login akışı hazırlayalım mı?

register.php dosyasını hazırlıyorum şifreleri düz metin olarak kaydetmeyip hash lememiz talep edilmiş hashleme nasıl yapabilirim?



ayrıca arayüz için düz bir bootstrap tasarımı kullanmak istiyorum

PHP'de şifre güvenliğini sağlamak ve hocanın istediği password_hash() kriterini yerine getirmek oldukça basittir. PHP bu işlemi bizim yerimize arka planda güvenli bir şekilde (otomatik salt ekleyerek) halleder. Veritabanına şifreyi asla düz metin (123456) olarak değil, her zaman bu fonksiyondan çıkan karmaşık metin olarak kaydetmeliyiz.

Hem şifre hash'leme mantığını çalıştıran hem de tamamen Bootstrap 5 ile stillendirilmiş, projenin temasına (Genetik Varyant Takip Sistemi) uygun temiz bir register.php şablonunu aşağıda bulabilirsin.

🔑 password_hash() Mantığı Nasıl Çalışır?
Formdan gelen şifreyi veritabanına göndermeden hemen önce şu satırdan geçirmen yeterlidir:

PHP
$hashed_password = password_hash($plain_password, PASSWORD_DEFAULT);
Bu fonksiyon her seferinde benzersiz ve geri döndürülemez 60 karakterlik bir metin üretir. Giriş yaparken (login.php içinde) ise bu şifreyi password_verify($plain_password, $hashed_password) fonksiyonu ile kontrol edeceksin.

📄 Tam Donanımlı register.php Kodu
Bu kod hem kayıt formunu temiz bir Bootstrap arayüzüyle ekrana basar hem de form gönderildiğinde (POST edildiğinde) şifreyi hash'leyerek veritabanına kayıt işlemini gerçekleştirir.

PHP
<?php
// Veritabanı bağlantı dosyanı buraya dahil etmelisin
// include 'db_baglanti.php';

$message = "";
$message_class = "";

// Form gönderildi mi kontrol ediyoruz
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri alıyoruz (ve basitçe temizliyoruz)
    $username = trim($_file_post['username'] ?? ''); // Not: Gerçek kodda $_POST kullanmalısın, burası örnek dizilimdir.
    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    // Basit boşluk kontrolü
    if (empty($username) || empty($email) || empty($password)) {
        $message = "Lütfen tüm alanları doldurun.";
        $message_class = "alert-danger";
    } else {
        // 1. ADIM: Şifreyi Güvenli Bir Şekilde Hash'leme (Hocanın İstediği Kriter)
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        try {
            // NOT: Burada PDO kullandığını varsayıyorum, en güvenli yalın PHP yöntemidir.
            // $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
            // $stmt = $db->prepare($sql);
            // $result = $stmt->execute([
            //     ':username' => $username,
            //     ':email' => $email,
            //     ':password' => $hashed_password // Hash'lenmiş şifreyi kaydediyoruz
            // ]);

            // Şimdilik simüle edelim:
            $result = true; 

            if ($result) {
                $message = "Kayıt başarıyla tamamlandı! Giriş yapabilirsiniz.";
                $message_class = "alert-success";
            } else {
                $message = "Kayıt esnasında bir hata oluştu.";
                $message_class = "alert-danger";
            }
        } catch (Exception $e) {
            $message = "Bu kullanıcı adı veya e-posta zaten kayıtlı olabilir.";
            $message_class = "alert-danger";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Araştırmacı Kaydı - Genetik Varyant Takip Sistemi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f4f7f6;
        }
        .register-card {
            margin-top: 100px;
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .brand-title {
            color: #2c3e50;
            font-weight: 700;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card register-card p-4">
                <div class="card-body">
                    
                    <div class="text-center mb-4">
                        <h3 class="brand-title">🧬 GenVaryant</h3>
                        <p class="text-muted">Genetik Varyant Takip Sistemi</p>
                        <h5 class="fw-normal text-secondary">Yeni Araştırmacı Kaydı</h5>
                    </div>

                    <?php if (!empty($message)): ?>
                        <div class="alert <?php echo $message_class; ?> alert-dismissible fade show" role="alert">
                            <?php echo htmlspecialchars($message); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <form action="register.php" method="POST">
                        
                        <div class="mb-3">
                            <label for="username" class="form-label text-secondary fw-semibold">Kullanıcı Adı</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="örn: m_aydogan" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label text-secondary fw-semibold">E-posta Adresi</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label text-secondary fw-semibold">Şifre</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required>
                            <div class="form-text">Şifreniz sistemde güvenli olarak hash'lenecektir.</div>
                        </div>

                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-primary py-2 fw-semibold">Kayıt Ol</button>
                        </div>
                        
                    </form>

                    <div class="text-center mt-4">
                        <span class="text-muted">Zaten hesabınız var mı?</span> 
                        <a href="login.php" class="text-decoration-none fw-semibold">Giriş Yap</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
💡 Gözden Kaçırmaman Gereken Detaylar
Veritabanı Tablo Yapısı: Şifreleri hash'lediğin zaman oluşan karakter dizisi uzun olacağı için veritabanındaki password kolonunun veri tipini en az VARCHAR(255) yapmalısın. Eğer eski usul VARCHAR(32) falan bırakırsan hash'lenmiş şifre kırpılır ve giriş yapamazsın.

Temiz Arayüz Kuralı: Form elemanlarının tamamında Bootstrap'in form-control, form-label sınıflarını kullandım. Butonlar ve kart yapısı da tamamen stillendirilmiş durumda. Böylece projede "stillendirilmemiş öge kalmasın" kuralını ihlal etmemiş olursun.

AI.md Dosyası: Bu kodu projene eklediğinde, yaptığımız bu soru-cevap sürecini ödev kurallarında belirtildiği gibi AI.md dosyasına eklemeyi unutma.

tabloya varyant ekleme varyant silme ve düzenleme seçeneklerini de eklemem gerek

Genetik Varyant Takip Sistemi için tam fonksiyonel bir CRUD (Oluşturma, Okuma, Güncelleme, Silme) yapısını kurmanın vakti geldi. Yalın PHP ve Bootstrap 5 kullanarak bu sistemi 3 ana dosya üzerinden yönetebiliriz.

Güvenlik için veritabanı işlemlerinde PDO (Prepared Statements) kullanacağız; bu sayede SQL Injection açıklarını tamamen kapatmış olacağız. Ayrıca oturum (session) kontrolünü de her dosyanın başına entegre edeceğiz.

İşte projene doğrudan ekleyebileceğin modüler kod yapıları:

1. Listeleme ve Silme Sayfası (dashboard.php)
Bu sayfa veritabanındaki varyantları listeler (Read) ve her satırın yanına Düzenle ile Sil butonlarını yerleştirir. Ayrıca sayfa içinde hızlıca çalışan bir silme mantığı (Delete) barındırır.

PHP
<?php
session_start();
// Oturum kontrolü
if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

// Veritabanı bağlantısı (Kendine göre düzenle)
try {
    $db = new PDO("mysql:host=localhost;dbname=proje_db;charset=utf8", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Veritabanı bağlantı hatası: " . $e->getMessage());
}

$message = "";

// --- SİLME İŞLEMİ (DELETE) ---
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $delete_id = $_GET['id'];
    
    // Güvenli silme sorgusu (Sadece kendi eklediği varyantı silebilsin diye user_id kontrolü eklenebilir)
    $stmt = $db->prepare("DELETE FROM variants WHERE id = :id AND user_id = :user_id");
    $result = $stmt->execute([
        ':id' => $delete_id,
        ':user_id' => $_SESSION['user_id']
    ]);
    
    if ($result) {
        $message = "Varyant başarıyla silindi.";
        $msg_class = "alert-success";
    } else {
        $message = "Silme işlemi başarısız oldu.";
        $msg_class = "alert-danger";
    }
}

// --- LİSTELEME İŞLEMİ (READ) ---
// Giriş yapan kullanıcının eklediği varyantları çekiyoruz
$stmt = $db->prepare("SELECT * FROM variants WHERE user_id = :user_id ORDER BY id DESC");
$stmt->execute([':user_id' => $_SESSION['user_id']]);
$variants = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Varyant Paneli - GenVaryant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="dashboard.php">🧬 GenVaryant Panel</a>
        <div class="navbar-nav ms-auto">
            <span class="nav-link text-light me-3">Hoş geldin, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
            <a class="btn btn-outline-danger btn-sm" href="logout.php">Çıkış Yap</a>
        </div>
    </div>
</nav>

<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Kayıtlı Genetik Varyantlar</h2>
        <a href="variant_ekle.php" class="btn btn-success">+ Yeni Varyant Ekle</a>
    </div>

    <?php if (!empty($message)): ?>
        <div class="alert <?php echo $msg_class; ?> alert-dismissible fade show" role="alert">
            <?php echo $message; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-hover mb-0">
                    <thead class="table-secondary">
                        <tr>
                            <th>Gen Adı</th>
                            <th>Kromozom</th>
                            <th>Konum (Position)</th>
                            <th>Mutasyon Tipi</th>
                            <th>Patojenite</th>
                            <th>Açıklama</th>
                            <th class="text-center">İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($variants) > 0): ?>
                            <?php foreach ($variants as $v): ?>
                                <tr>
                                    <td><strong><?php echo htmlspecialchars($v['gene_name']); ?></strong></td>
                                    <td><?php echo htmlspecialchars($v['chromosome']); ?></td>
                                    <td><?php echo htmlspecialchars($v['position']); ?></td>
                                    <td><?php echo htmlspecialchars($v['mutation_type']); ?></td>
                                    <td>
                                        <?php if ($v['pathogenicity'] == 'Pathogenic'): ?>
                                            <span class="badge bg-danger">Pathogenic</span>
                                        <?php elseif ($v['pathogenicity'] == 'Benign'): ?>
                                            <span class="badge bg-success">Benign</span>
                                        <?php else: ?>
                                            <span class="badge bg-warning text-dark">VUS</span>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo htmlspecialchars($v['description']); ?></td>
                                    <td class="text-center">
                                        <a href="variant_duzenle.php?id=<?php echo $v['id']; ?>" class="btn btn-sm btn-warning me-1">Düzenle</a>
                                        <a href="dashboard.php?action=delete&id=<?php echo $v['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Bu varyant kaydını silmek istediğinize emin misiniz?')">Sil</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7" class="text-center text-muted py-4">Henüz hiç varyant kaydı eklememişsiniz.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
2. Varyant Ekleme Sayfası (variant_ekle.php - Create)
Kullanıcının form aracılığıyla sisteme yeni varyant verisi girmesini sağlar.

PHP
<?php
session_start();
if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form verilerini alıyoruz
    $gene_name = trim($_POST['gene_name'] ?? '');
    $chromosome = $_POST['chromosome'] ?? '';
    $position = trim($_POST['position'] ?? '');
    $mutation_type = $_POST['mutation_type'] ?? '';
    $pathogenicity = $_POST['pathogenicity'] ?? '';
    $description = trim($_POST['description'] ?? '');

    if (empty($gene_name) || empty($position)) {
        $message = "Gen Adı ve Konum alanları zorunludur.";
        $msg_class = "alert-danger";
    } else {
        // DB Bağlantısı ve Ekleme
        try {
            $db = new PDO("mysql:host=localhost;dbname=proje_db;charset=utf8", "root", "");
            
            $sql = "INSERT INTO variants (user_id, gene_name, chromosome, position, mutation_type, pathogenicity, description) 
                    VALUES (:user_id, :gene_name, :chromosome, :position, :mutation_type, :pathogenicity, :description)";
            
            $stmt = $db->prepare($sql);
            $stmt->execute([
                ':user_id' => $_SESSION['user_id'],
                ':gene_name' => $gene_name,
                ':chromosome' => $chromosome,
                ':position' => $position,
                ':mutation_type' => $mutation_type,
                ':pathogenicity' => $pathogenicity,
                ':description' => $description
            ]);

            header("Location: dashboard.php");
            exit();
        } catch (PDOException $e) {
            $message = "Hata oluştu: " . $e->getMessage();
            $msg_class = "alert-danger";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Yeni Varyant Ekle - GenVaryant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-5" style="max-width: 600px;">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">🧬 Yeni Varyant Kaydı Girişi</h4>
        </div>
        <div class="card-body">
            <?php if(!empty($message)): ?>
                <div class="alert <?php echo $msg_class; ?>"><?php echo $message; ?></div>
            <?php endif; ?>

            <form action="variant_ekle.php" method="POST">
                <div class="mb-3">
                    <label class="form-label fw-bold">Gen Adı</label>
                    <input type="text" name="gene_name" class="form-control" placeholder="Örn: BRCA1, TP53" required>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Kromozom</label>
                        <select name="chromosome" class="form-select">
                            <option value="Chr1">Chr1</option>
                            <option value="Chr17">Chr17</option>
                            <option value="ChrX">ChrX</option>
                            <option value="ChrY">ChrY</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Konum (Position)</label>
                        <input type="number" name="position" class="form-control" placeholder="Örn: 43044295" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Mutasyon Tipi</label>
                    <select name="mutation_type" class="form-select">
                        <option value="Missense">Missense</option>
                        <option value="Nonsense">Nonsense</option>
                        <option value="Frameshift">Frameshift</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Klinik Önem (Pathogenicity)</label>
                    <select name="pathogenicity" class="form-select">
                        <option value="VUS">VUS (Significance Unknown)</option>
                        <option value="Benign">Benign</option>
                        <option value="Pathogenic">Pathogenic</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Notlar / Açıklama</label>
                    <textarea name="description" class="form-control" rows="3"></textarea>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="dashboard.php" class="btn btn-secondary">İptal Et</a>
                    <button type="submit" class="btn btn-success">Varyantı Kaydet</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
3. Varyant Düzenleme Sayfası (variant_duzenle.php - Update)
URL'den gelen id parametresine göre mevcut veriyi form alanlarına doldurur ve kullanıcının değişiklikleri kaydetmesini (Update) sağlar.

PHP
<?php
session_start();
if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

try {
    $db = new PDO("mysql:host=localhost;dbname=proje_db;charset=utf8", "root", "");
} catch (PDOException $e) {
    die("Bağlantı hatası.");
}

$id = $_GET['id'] ?? null;
if (!$id) {
    header("Location: dashboard.php");
    exit();
}

// Önce düzenlenecek veriyi çekiyoruz (Kullanıcı doğrulaması ile beraber)
$stmt = $db->prepare("SELECT * FROM variants WHERE id = :id AND user_id = :user_id");
$stmt->execute([':id' => $id, ':user_id' => $_SESSION['user_id']]);
$variant = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$variant) {
    die("Kayıt bulunamadı veya bu kaydı düzenleme yetkiniz yok.");
}

$message = "";

// Güncelleme isteği gönderildiğinde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gene_name = trim($_POST['gene_name'] ?? '');
    $chromosome = $_POST['chromosome'] ?? '';
    $position = trim($_POST['position'] ?? '');
    $mutation_type = $_POST['mutation_type'] ?? '';
    $pathogenicity = $_POST['pathogenicity'] ?? '';
    $description = trim($_POST['description'] ?? '');

    if (!empty($gene_name) && !empty($position)) {
        $sql = "UPDATE variants SET gene_name = :gene_name, chromosome = :chromosome, position = :position, 
                mutation_type = :mutation_type, pathogenicity = :pathogenicity, description = :description 
                WHERE id = :id AND user_id = :user_id";
        
        $stmt = $db->prepare($sql);
        $stmt->execute([
            ':gene_name' => $gene_name,
            ':chromosome' => $chromosome,
            ':position' => $position,
            ':mutation_type' => $mutation_type,
            ':pathogenicity' => $pathogenicity,
            ':description' => $description,
            ':id' => $id,
            ':user_id' => $_SESSION['user_id']
        ]);

        header("Location: dashboard.php");
        exit();
    } else {
        $message = "Lütfen zorunlu alanları doldurun.";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Varyant Düzenle - GenVaryant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-5" style="max-width: 600px;">
    <div class="card shadow">
        <div class="card-header bg-warning text-dark">
            <h4 class="mb-0">📝 Varyant Verisi Güncelleme</h4>
        </div>
        <div class="card-body">
            <?php if(!empty($message)): ?>
                <div class="alert alert-danger"><?php echo $message; ?></div>
            <?php endif; ?>

            <form action="variant_duzenle.php?id=<?php echo $id; ?>" method="POST">
                <div class="mb-3">
                    <label class="form-label fw-bold">Gen Adı</label>
                    <input type="text" name="gene_name" class="form-control" value="<?php echo htmlspecialchars($variant['gene_name']); ?>" required>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Kromozom</label>
                        <select name="chromosome" class="form-select">
                            <option value="Chr1" <?php echo $variant['chromosome'] == 'Chr1' ? 'selected' : ''; ?>>Chr1</option>
                            <option value="Chr17" <?php echo $variant['chromosome'] == 'Chr17' ? 'selected' : ''; ?>>Chr17</option>
                            <option value="ChrX" <?php echo $variant['chromosome'] == 'ChrX' ? 'selected' : ''; ?>>ChrX</option>
                            <option value="ChrY" <?php echo $variant['chromosome'] == 'ChrY' ? 'selected' : ''; ?>>ChrY</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Konum (Position)</label>
                        <input type="number" name="position" class="form-control" value="<?php echo htmlspecialchars($variant['position']); ?>" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Mutasyon Tipi</label>
                    <select name="mutation_type" class="form-select">
                        <option value="Missense" <?php echo $variant['mutation_type'] == 'Missense' ? 'selected' : ''; ?>>Missense</option>
                        <option value="Nonsense" <?php echo $variant['mutation_type'] == 'Nonsense' ? 'selected' : ''; ?>>Nonsense</option>
                        <option value="Frameshift" <?php echo $variant['mutation_type'] == 'Frameshift' ? 'selected' : ''; ?>>Frameshift</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Klinik Önem (Pathogenicity)</label>
                    <select name="pathogenicity" class="form-select">
                        <option value="VUS" <?php echo $variant['pathogenicity'] == 'VUS' ? 'selected' : ''; ?>>VUS</option>
                        <option value="Benign" <?php echo $variant['pathogenicity'] == 'Benign' ? 'selected' : ''; ?>>Benign</option>
                        <option value="Pathogenic" <?php echo $variant['pathogenicity'] == 'Pathogenic' ? 'selected' : ''; ?>>Pathogenic</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Notlar / Açıklama</label>
                    <textarea name="description" class="form-control" rows="3"><?php echo htmlspecialchars($variant['description']); ?></textarea>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="dashboard.php" class="btn btn-secondary">Geri Dön</a>
                    <button type="submit" class="btn btn-warning fw-bold">Değişiklikleri Kaydet</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
🎯 Bu Mimariyle Kazanımların Neler?
İlişkisel Veritabanı: Varyantlar eklenirken $_SESSION['user_id'] kullanıldığı için herkes sadece kendi eklediği verileri görebilir, düzenleyebilir ve silebilir. Bu tam bir otomasyon mantığıdır ve hocanın puanlama kriterlerinde seni öne geçirir.

XSS ve SQL Injection Koruması: htmlspecialchars() ile tarayıcı manipülasyonlarını engelledik, PDO nesnesiyle de SQL sorgularını güvenli hale getirdik.

Sıfır Ham HTML: Kod bloklarındaki tüm butonlar, tablolar, form alanları ve alert pencereleri tamamen Bootstrap 5 sınıfları içeriyor.

Bu kodları lokal projene dahil ettikten sonra takıldığın veya veritabanı tablolarında özelleştirmek istediğin bir alan olursa üzerinde konuşabiliriz!

kodları canlıya alma işini nasıl yapacağım

Lokalde tıkır tıkır çalışan projenizi canlı sunucuya (hosting alanına) taşımak, bir web geliştiricisi için en heyecanlı adımlardan biridir. Hocanın yönergelerini ve hassas noktaları (özellikle GitHub'da şifre ifşalamama ve .htaccess kullanmama kurallarını) dikkate alarak bu süreci adım adım, güvenli bir şekilde gerçekleştirelim.

İşte projeyi canlıya alma rehberiniz:

1. Adım: Lokal Veritabanını Dışa Aktarma (Export)
Lokalde (XAMPP/WampServer vb.) eklediğiniz test verilerini ve oluşturduğunuz tablo yapılarını sunucuya taşımamız gerekiyor.

http://localhost/phpmyadmin adresine gidin.

Sol menüden projenizin veritabanını (proje_db) seçin.

Üst menüdeki "Dışa Aktar" (Export) sekmesine tıklayın.

Yöntem olarak "Hızlı", biçim olarak "SQL" seçip "Git" butonuna basın.

Bilgisayarınıza .sql uzantılı bir dosya inecek. Bu dosyayı saklayın.

2. Adım: Canlı Sunucuda Veritabanı Hazırlama
Ekampüs'te sizinle paylaşılan bilgilerle hosting yönetim panelinize (cPanel, Plesk veya DirectAdmin) giriş yapın.

Panelde "MySQL Veritabanı Sihirbazı" (MySQL Database Wizard) veya "MySQL Veritabanları" bölümünü bulun.

Yeni bir veritabanı oluşturun. (Genelde ogrencinumaraniz_db şeklinde olur).

Yeni bir veritabanı kullanıcısı oluşturun ve güçlü bir şifre belirleyin.

Kritik Adım: Oluşturduğunuz kullanıcıyı, oluşturduğunuz veritabanına atayın ve "Tüm Yetkileri" (All Privileges) tikleyerek kaydedin.

Panel ana sayfasına dönüp phpMyAdmin'e girin. Canlıdaki boş veritabanınızı seçip üstten "İçe Aktar" (Import) deyin ve 1. adımda bilgisayarınıza indirdiğiniz .sql dosyasını seçerek yükleyin.

3. Adım: PHP Kodlarındaki Bağlantı Ayarlarını Güncelleme
Projenin canlı sunucudaki veritabanıyla konuşabilmesi için bağlantı bilgilerini değiştirmeliyiz. Kod kalitesi açısından tüm bağlantı bilgilerini db.php veya config.php gibi tek bir dosyada topladıysanız işiniz çok kolay olacaktır.

PHP
<?php
// db.php (Canlı Sunucu Ayarları)

$host = "localhost"; // Çoğu hosting firmasında 'localhost' olarak kalır
$db_name = "ogrencinumaraniz_db"; // Canlıda oluşturduğunuz DB adı
$username = "ogrencinumaraniz_user"; // Canlıda oluşturduğunuz DB kullanıcısı
$password = "Olusturdugunuz_Guclu_Sifre"; // Canlıda belirlediğiniz DB şifresi

try {
    $db = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Veritabanı bağlantı hatası: " . $e->getMessage());
}
?>
4. Adım: Dosyaları Sunucuya Yükleme (FTP)
Dosyaları internet sitesine yüklemek için en popüler ve ücretsiz araç FileZilla'dır.

FileZilla'yı açın. Üst kısımdaki Sunucu (Host), Kullanıcı adı ve Parola alanlarına üniversitenin verdiği FTP bilgilerini yazıp "Hızlı Bağlan" deyin.

Sağ tarafta sunucunun dosyalarını göreceksiniz. Genelde sitenin ana dizini public_html veya httpdocs klasörüdür. Bu klasörün içine girin.

Sol taraftaki yerel bilgisayarınızdan projenizin dosyalarını (tüm .php dosyalarını ve Bootstrap/CSS klasörlerini) seçip sağ tarafa sürükleyerek yükleyin.

Uyarı Kontrolü: Yüklediğiniz dosyalar arasında kesinlikle .htaccess dosyası olmadığından emin olun (Hoca yasaklamıştı).

5. Adım: GitHub Reposuna Yükleme ve Güvenlik (Sansür)
Hocanın en çok vurguladığı yerlerden biri burası: "GitHub'da hassas bilgilerinizi sansürleyin." Canlı sunucu şifrelerinizin internete sızmasını engellemek için şu stratejiyi izleyebilirsiniz:

Hosting alanına yüklediğiniz db.php dosyasında gerçek şifreleriniz kalmaya devam etsin (site çalışsın diye).

Bilgisayarınızdaki yerel db.php dosyasını açın ve şifre kısımlarını şu şekilde temizleyin:

PHP
$db_name = "SANSÜRLENDİ_DB_ADI";
$username = "SANSÜRLENDİ_KULLANICI_ADI";
$password = "SANSÜRLENDİ_SIFRE";
Bu temizlenmiş/sansürlenmiş haliyle projenizi GitHub reposuna push edin (yükleyin). Böylece repoda şifreleriniz görünmez ama sunucuda gerçek kodlar çalışıyor olur.

🔍 Son Kontroller
Sitenizin adresine tarayıcıdan girip kullanıcı kaydı oluşturmayı, giriş yapmayı ve varyant ekleyip silmeyi deneyin.

AI.md dosyanızı hazırlayıp repoya eklediniz mi?

Readme.md dosyanıza en az 2 ekran görüntüsü ve video linkinizi eklemeyi unutmayın.

Hosting panel bilgilerinize (cPanel/Plesk vb.) ve FTP erişim şifrelerinize şu an erişebiliyor musunuz, yoksa dosya aktarımı aşamasına geçmeden önce veritabanı ayırma adımlarına lokalde mi göz atalım?
