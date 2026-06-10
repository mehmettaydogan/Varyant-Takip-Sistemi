<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

require 'includes/db.php';

// Adresten gelen bir ID parametresi var mı kontrol ediyoruz
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $user_id = $_SESSION['user_id'];

    // Güvenlik Önlemi: Sadece kaydı ekleyen araştırmacı kendi kaydını silebilir
    $stmt = $pdo->prepare("DELETE FROM variants WHERE id = ? AND user_id = ?");
    if ($stmt->execute([$id, $user_id])) {
        // Silme başarılıysa ana sayfaya sarı uyarı mesajı tetikleyerek dön
        header("Location: index.php?status=deleted");
        exit;
    }
}

header("Location: index.php");
exit;
?>