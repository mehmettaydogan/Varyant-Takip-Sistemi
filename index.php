<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

require 'includes/db.php';

$user_id = $_SESSION['user_id'];
$stmt = $pdo->prepare("SELECT * FROM variants WHERE user_id = ? ORDER BY id DESC");
$stmt->execute([$user_id]);
$variants = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Varyant Takip Sistemi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="index.php">VARYANT TAKİP SİSTEMİ</a>
            <span class="navbar-text text-white">
                Hoş geldin, <?php echo htmlspecialchars($_SESSION['username']); ?> | 
                <a href="logout.php" class="text-danger text-decoration-none fw-bold">Çıkış Yap</a>
            </span>
        </div>
    </nav>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Genetik Varyant Kayıtları</h2>
            <a href="add_variant.php" class="btn btn-primary">Yeni Varyant Ekle</a>
        </div>

        <?php if (isset($_GET['status'])): ?>
            <div class="alert alert-info text-center">
                <?php
                    if ($_GET['status'] == 'added') echo "Kayıt başarıyla eklendi.";
                    if ($_GET['status'] == 'updated') echo "Kayıt başarıyla güncellendi.";
                    if ($_GET['status'] == 'deleted') echo "Kayıt başarıyla silindi.";
                ?>
            </div>
        <?php endif; ?>

        <div class="card p-3">
            <?php if (count($variants) > 0): ?>
                <table class="table table-bordered table-striped text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Gen Sembolü</th>
                            <th>Mutasyon Tipi</th>
                            <th>Patojenite</th>
                            <th>Notlar</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($variants as $variant): ?>
                            <tr>
                                <td><?php echo $variant['id']; ?></td>
                                <td><strong><?php echo htmlspecialchars($variant['gene_symbol']); ?></strong></td>
                                <td><?php echo htmlspecialchars($variant['mutation_type']); ?></td>
                                <td><?php echo htmlspecialchars($variant['pathogenicity']); ?></td>
                                <td><?php echo htmlspecialchars($variant['notes']); ?></td>
                                <td>
                                    <a href="edit_variant.php?id=<?php echo $variant['id']; ?>" class="btn btn-sm btn-warning">Düzenle</a>
                                    <a href="delete_variant.php?id=<?php echo $variant['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Silmek istediğinize emin misiniz?');">Sil</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p class="text-center my-4">Sistemde henüz kayıtlı veri bulunmamaktadır.</p>
            <?php endif; ?>
        </div>
    </div>

</body>
</html>