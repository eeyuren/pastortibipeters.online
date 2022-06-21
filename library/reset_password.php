<?php 
	require_once	"../config/config.php";

	if (isset($_POST['retrieve_password'])){
		$error_msg="";
		$complete=1;
		//the post_clean() function is found in the config.php page
		$password=post_clean("password",$db);
		$cpassword=post_clean("cpassword",$db);
		$str=post_clean("str",$db);
		$code=post_clean("code",$db);
		//general form validation
		if (empty($cpassword)||empty($password)) {
			$complete=0; $error_msg.="Form fields shouldn't be left blank<br>";
		}
		if ($password != $cpassword) {
			$complete=0; $error_msg.="Password Mismatched<br>"
		}
		//password form validation
		if (strlen($password)<8) {
			$complete=0; $error_msg.="Password shouldn't be less than 8 characters<br>";
		}
		if ($complete==1) {
			$password=sha1(md5($password));
			$db->query("UPDATE users SET password='$password', reset_password='' WHERE email='$code' ");
			$_SESSION['msg']="Your password  has been successfully updated.Please login with your new password";
			$_SESSION['color']="success";
			header("location:../login.php");
		}else{
			$_SESSION['msg']=$error_msg;
			$_SESSION['color']="danger";
			header("location:../login.php");
		}
	}else{
		$_SESSION['msg']="Invalid redirecting please make sure you are accessing this page for the official page.";
		$_SESSION['color']="danger";
		header("location:../reset_password.php");
	}



?>