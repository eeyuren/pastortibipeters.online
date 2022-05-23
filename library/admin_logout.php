<?php require_once	"../config/config.php"; ?>
<?php  require_once "../config/admin_auth.php"; ?>
<?php  
	$db->query("UPDATE admin SET token='$token' WHERE username='$username' AND password='$password' ");
	session_destroy();
	header("location:../admin_login.php");

?>