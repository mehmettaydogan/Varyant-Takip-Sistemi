<?php
$host = 'localhost';
$dbname = 'dbstorage24360859939';
$username = 'dbusr24360859939';
$password = '2a2aTbHNDy7I';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Veritabanı bağlantı hatası: " . $e->getMessage());
}
?>