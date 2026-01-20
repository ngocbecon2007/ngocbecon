
<?php include '../config.php';
$d=$conn->query("SELECT * FROM deposits WHERE status='pending'");
?>
<table>
<?php while($r=$d->fetch_assoc()): ?>
<tr>
<td><?= $r['amount'] ?></td>
<td><a href="done.php?id=<?= $r['id'] ?>">Duyệt</a></td>
</tr>
<?php endwhile; ?>
</table>
