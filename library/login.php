<?php 
	require_once	"../config/config.php";

	if (isset($_POST['login'])){
		$error_msg="";
		$complete=1;
		//the post_clean() function is found in the config.php page
		$username=post_clean("username",$db);
		$password=post_clean("password",$db);
		$password=sha1(md5($password));
		//general form validation
		if (empty($username)||empty($password)) {
			$complete=0; $error_msg.="Form fields shouldn't be left blank<br>";
		}
		if (strlen($username)<2) {
			$complete=0; $error_msg.="Username shouldn't be less than 2 characters<br>";
		}
		//password form validation
		if (strlen($password)<8) {
			$complete=0; $error_msg.="Password shouldn't be less than 8 characters<br>";
		}
		//check user authentication
		$check_user_auth=$db->query("SELECT * FROM users WHERE username='$username' AND password='$password' ");
		if ($check_user_auth->num_rows<1) {
			$complete=0; $error_msg.="Invalid login details<br>";
		}
		if ($complete==1) {
			$token=microtime().rand(0,2000).$username;
			$_SESSION['token_auth']=$token;
			$db->query("UPDATE users SET token='$token' WHERE username='$username' AND password='$password' ");
			header("location:../index.php");
		}else{
			$_SESSION['msg']=$error_msg;
			$_SESSION['color']="danger";
			header("location:../login.php");
		}
	}else{
		$_SESSION['msg']="Invalid redirecting please make sure you are accessing this page for the official page.";
		$_SESSION['color']="danger";
		header("location:../create-account.php");
	}



?>