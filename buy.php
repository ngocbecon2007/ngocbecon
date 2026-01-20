
<?php
include 'config.php';
if(!isset($_SESSION['user'])) die("Login first");
$id=$_POST['id'];
$uid=$_SESSION['user']['id'];
$conn->query("INSERT INTO orders(user_id,service_id,status) VALUES($uid,$id,'pending')");
echo "Đặt đơn thành công";
?>
