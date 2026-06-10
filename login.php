<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


session_start(); 
require 'includes/db.php';

$message = '';
$messageClass = '';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = trim($_POST['username']);
    $pass = $_POST['password'];

    if (!empty($user) && !empty($pass)) {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$user]);
        $account = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($account && password_verify($pass, $account['password_hash'])) {
            $_SESSION['user_id'] = $account['id'];
            $_SESSION['username'] = $account['username'];

            header("Location: index.php");
            exit;
        } else {
            $message = "Hatalı kullanıcı adı veya şifre!";
            $messageClass = "alert-danger";
        }
    } else {
        $message = "Lütfen tüm alanları doldurun.";
        $messageClass = "alert-warning";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center" style="min-height: 100vh;">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-lg border-0 rounded-3">
                    <div class="card-body p-5">
                        <h3 class="text-center mb-4 text-success fw-bold">Sisteme Giriş</h3>
                        
                        <?php if (!empty($message)): ?>
                            <div class="alert <?php echo $messageClass; ?> text-center" role="alert">
                                <?php echo $message; ?>
                            </div>
                        <?php endif; ?>

                        <form method="POST" action="login.php">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Kullanıcı Adı</label>
                                <input type="text" name="username" class="form-control" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Şifre</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100 py-2 rounded-2 fw-bold">Giriş Yap</button>
                        </form>
                        
                        <div class="text-center mt-4">
                            <p class="mb-0 text-muted">Henüz hesabınız yok mu? <a href="register.php" class="text-decoration-none fw-semibold">Kayıt Ol</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>