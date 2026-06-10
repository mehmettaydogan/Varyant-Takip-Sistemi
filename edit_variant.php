<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

require 'includes/db.php';

$id = $_GET['id'] ?? null;
$user_id = $_SESSION['user_id'];

if (!$id) {
    header("Location: index.php");
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM variants WHERE id = ? AND user_id = ?");
$stmt->execute([$id, $user_id]);
$variant = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$variant) {
    header("Location: index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $gene_symbol = trim($_POST['gene_symbol']);
    $mutation_type = trim($_POST['mutation_type']);
    $pathogenicity = $_POST['pathogenicity'];
    $notes = trim($_POST['notes']);

    $sql = "UPDATE variants SET gene_symbol = ?, mutation_type = ?, pathogenicity = ?, notes = ? WHERE id = ? AND user_id = ?";
    $stmt = $pdo->prepare($sql);
    
    if ($stmt->execute([$gene_symbol, $mutation_type, $pathogenicity, $notes, $id, $user_id])) {
        header("Location: index.php?status=updated");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Varyant Düzenle</title>
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
            <h3 class="text-center mb-4">Kayıt Düzenle</h3>

            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">Gen Sembolü</label>
                    <input type="text" name="gene_symbol" class="form-control" value="<?php echo htmlspecialchars($variant['gene_symbol']); ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Mutasyon Tipi</label>
                    <input type="text" name="mutation_type" class="form-control" value="<?php echo htmlspecialchars($variant['mutation_type']); ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Patojenite Durumu</label>
                    <select name="pathogenicity" class="form-select" required>
                        <option value="Pathogenic" <?php if($variant['pathogenicity'] == 'Pathogenic') echo 'selected'; ?>>Pathogenic</option>
                        <option value="Likely Pathogenic" <?php if($variant['pathogenicity'] == 'Likely Pathogenic') echo 'selected'; ?>>Likely Pathogenic</option>
                        <option value="VUS" <?php if($variant['pathogenicity'] == 'VUS') echo 'selected'; ?>>VUS</option>
                        <option value="Benign" <?php if($variant['pathogenicity'] == 'Benign') echo 'selected'; ?>>Benign</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Notlar</label>
                    <textarea name="notes" class="form-control" rows="3"><?php echo htmlspecialchars($variant['notes']); ?></textarea>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="index.php" class="btn btn-secondary">İptal</a>
                    <button type="submit" class="btn btn-warning">Güncelle</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>