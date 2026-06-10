**Varyant Takip Sistemi**

Bu proje, laboratuvar ortamında incelenen genetik varyant ve mutasyon verilerini düzenli bir şekilde kaydetmek, listelemek, güncellemek ve silmek amacıyla geliştirilmiş web tabanlı bir yönetim panelidir. 

## 🎓 Öğrenci Bilgileri
* **Adı Soyadı:** Mehmet Aydoğan
* **Öğrenci Numarası:** 24360859939
* **Bölüm:** Bilgisayar Mühendisliği

---

## 📺 Proje Tanıtım Videosu
Sistemin çalışan halinin, veri ekleme, düzenleme ve silme adımlarının gösterildiği kısa tanıtım videosuna aşağıdaki linkten ulaşabilirsiniz:

👉 **[Varyant Takip Sistemi Tanıtım Videosu (YouTube)](https://youtu.be/HIXo1fK8LA8))**

---

## 🛠️ Kullanılan Teknolojiler
Proje, harici bir framework veya ağır kütüphaneler kullanılmadan, ders notlarındaki standartlara uygun olarak tamamen yalın yapıda kurgulanmıştır:
* **Backend:** PHP
* **Veritabanı Sürücüsü:** PDO
* **Veritabanı:** MySQL / MariaDB
* **Frontend / Tasarım:** Bootstrap

---

## 🚀 Projenin Özellikleri (CRUD ve Güvenlik)
1. **Oturum Yönetimi (Authentication):** `session_start()` kontrolü ile sisteme giriş yapmayan kullanıcıların ana panele erişimi engellenmiştir.
2. **Güvenli Kayıt & Giriş:** Kullanıcı şifreleri veritabanına düz metin olarak değil, `password_hash()` fonksiyonu ile şifrelenerek kaydedilir. Giriş esnasında `password_verify()` ile kontrol edilir.
3. **Veri Ekleme (Create):** Araştırmacılar Gen Sembolü, Mutasyon Tipi, Patojenite Durumu ve Notlar alanlarını doldurarak yeni varyant ekleyebilir.
4. **Veri Listeleme (Read):** Her kullanıcı veritabanında sadece kendi eklediği varyant kayıtlarını çizgili ve düzenli bir tabloda listeler.
5. **Veri Güncelleme (Update):** Yanlış girilen veriler form üzerinden eski halleri çekilerek güncellenebilir.
6. **Veri Silme (Delete):** İhtiyaç duyulmayan veriler kullanıcıdan JavaScript onay uyarısı (`confirm`) alınarak sistemden tamamen kaldırılır.

---

## 🗄️ Veritabanı Tablo Yapısı
Projede kullanılan `variants` tablosu şu sütunlardan oluşmaktadır:
* `id` (INT, Primary Key, Auto Increment)
* `user_id` (INT - Kaydı ekleyen kullanıcının ID'si)
* `gene_symbol` (VARCHAR)
* `mutation_type` (VARCHAR)
* `pathogenicity` (VARCHAR)
* `notes` (TEXT)
* `created_at` (TIMESTAMP)

