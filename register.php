<?php

require 'includes/db.php'; 

$message = '';
$messageClass = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = trim($_POST['username']);
    $pass = $_POST['password'];

    if (!empty($user) && !empty($pass)) {
        try {
            $hashed_password = password_hash($pass, PASSWORD_BCRYPT);

            $stmt = $pdo->prepare("INSERT INTO users (username, password_hash) VALUES (?, ?)");
            
            if ($stmt->execute([$user, $hashed_password])) {
                $message = "Kayıt başarıyla tamamlandı! Giriş yapabilirsiniz.";
                $messageClass = "alert-success";
            }
        } catch (PDOException $e) {
            $message = "Bu kullanıcı adı zaten alınmış!";
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
    <title>Yeni Kayıt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center" style="min-height: 100vh;">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-lg border-0 rounded-3">
                    <div class="card-body p-5">
                        <h3 class="text-center mb-4 text-primary font-weight-bold">Yeni Araştırmacı Kaydı</h3>
                        
                        <?php if (!empty($message)): ?>
                            <div class="alert <?php echo $messageClass; ?> text-center" role="alert">
                                <?php echo $message; ?>
                            </div>
                        <?php endif; ?>

                        <form method="POST" action="register.php">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Kullanıcı Adı</label>
                                <input type="text" name="username" class="form-control" placeholder="lab_araştırmacısı" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Şifre</label>
                                <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 py-2 rounded-2 fw-bold">Kayıt Ol</button>
                        </form>
                        
                        <div class="text-center mt-4">
                            <p class="mb-0 text-muted">Zaten hesabınız var mı? <a href="login.php" class="text-decoration-none fw-semibold">Giriş Yap</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>