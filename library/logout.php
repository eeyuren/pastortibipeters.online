<?php require_once	"../config/config.php"; ?>
<?php  require_once "../config/auth.php"; ?>
<?php  
	$db->query("UPDATE users SET token='$token' WHERE username='$username' AND password='$password' ");
	session_destroy();
	header("location:../login.php");

?>