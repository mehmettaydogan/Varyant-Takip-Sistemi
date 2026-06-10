<?php
// 1. HATA AYIKLAMA MODU (Her ihtimale karşı aktif)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 2. OTURUMU BAŞLAT
session_start();

// 3. TÜM OTURUM VERİLERİNİ TEMİZLE
session_unset();     // Bellekteki session değişkenlerini boşaltır
session_destroy();   // Sunucudaki oturum dosyasını tamamen yok eder

// 4. GİRİŞ SAYFASINA YÖNLENDİR
header("Location: login.php");
exit;
?>