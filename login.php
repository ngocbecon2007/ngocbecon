
<?php include 'config.php';
if($_POST){
$u=$_POST['user']; $p=md5($_POST['pass']);
$q=$conn->query("SELECT * FROM users WHERE username='$u' AND password='$p'");
if($q->num_rows){
$_SESSION['user']=$q->fetch_assoc();
header("Location:index.php");
}
}
?>
<form method="post" class="box">
<input name="user" placeholder="User"><br><br>
<input name="pass" type="password" placeholder="Pass"><br><br>
<button>Login</button>
</form>
