<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

require 'includes/db.php';
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $gene_symbol = trim($_POST['gene_symbol']);
    $mutation_type = trim($_POST['mutation_type']);
    $pathogenicity = $_POST['pathogenicity'];
    $notes = trim($_POST['notes']);

    if (!empty($gene_symbol) && !empty($mutation_type) && !empty($pathogenicity)) {
        $sql = "INSERT INTO variants (user_id, gene_symbol, mutation_type, pathogenicity, notes) VALUES (?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        
        if ($stmt->execute([$user_id, $gene_symbol, $mutation_type, $pathogenicity, $notes])) {
            header("Location: index.php?status=added");
            exit;
        } else {
            $error = "Kayıt esnasında bir hata oluştu.";
        }
    } else {
        $error = "Lütfen gerekli alanları doldurun.";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Yeni Varyant Ekle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="index.php">VARYANT TAKİP SİSTEMİ</a>
        </div>
    </nav>

    <div class="container">
        <div class="card mx-auto p-4" style="max-width: 500px;">
            <h3 class="text-center mb-4">Yeni Varyant Kaydı</h3>
            
            <?php if (!empty($error)): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>

            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">Gen Sembolü</label>
                    <input type="text" name="gene_symbol" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Mutasyon Tipi</label>
                    <input type="text" name="mutation_type" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Patojenite Durumu</label>
                    <select name="pathogenicity" class="form-select" required>
                        <option value="">Seçiniz...</option>
                        <option value="Pathogenic">Pathogenic</option>
                        <option value="Likely Pathogenic">Likely Pathogenic</option>
                        <option value="VUS">VUS</option>
                        <option value="Benign">Benign</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Notlar</label>
                    <textarea name="notes" class="form-control" rows="3"></textarea>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="index.php" class="btn btn-secondary">Geri Dön</a>
                    <button type="submit" class="btn btn-success">Kaydet</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>