
<?php include 'config.php';
$s=$conn->query("SELECT * FROM services");
?>
<!DOCTYPE html>
<html><head>
<link rel="stylesheet" href="assets/style.css">
<title>Shop</title></head>
<body>
<header><h1>🛒 Dịch vụ</h1></header>
<?php while($sv=$s->fetch_assoc()): ?>
<div class="card">
<h3><?= $sv['name'] ?></h3>
<p>Giá: <?= number_format($sv['price']) ?>đ</p>
<form action="buy.php" method="post">
<input type="hidden" name="id" value="<?= $sv['id'] ?>">
<button>Mua ngay</button>
</form>
</div>
<?php endwhile; ?>
</body></html>
