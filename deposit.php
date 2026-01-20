
<?php include 'config.php';
if($_POST){
$amount=$_POST['amount'];
$bill=time().$_FILES['bill']['name'];
move_uploaded_file($_FILES['bill']['tmp_name'],'upload/bill/'.$bill);
$conn->query("INSERT INTO deposits(user_id,amount,bill) VALUES({$_SESSION['user']['id']},$amount,'$bill')");
}
?>
<form method="post" enctype="multipart/form-data" class="box">
<input name="amount" placeholder="Số tiền"><br><br>
<input type="file" name="bill"><br><br>
<button>Nạp</button>
</form>
