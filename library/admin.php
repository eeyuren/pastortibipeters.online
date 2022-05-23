<?php 
	require_once	"../config/config.php";
	if (isset($_POST['create_admin'])){
		$error_msg="";
		$complete=1;
		//the post_clean() function is found in the config.php page
		$username=post_clean("username",$db);
		$email=post_clean("email",$db);
		$password=post_clean("password",$db);
		$confirm_password=post_clean("confirm_password",$db);
		$access_level=post_clean("status",$db);
		//general form validation
		if (empty($username)||empty($email)||empty($password)|| empty($confirm_password)) {
			$complete=0; $error_msg.="Form fields shouldn't be left blank<br>";
		}
		if (strlen($username)<2) {
			$complete=0; $error_msg.="Username shouldn't be less than 2 characters<br>";
		}
		//password form validation
		if ($password != $confirm_password) {
			$complete=0; $error_msg.="Password Mismatched<br>";
		}
		if (strlen($password)<8) {
			$complete=0; $error_msg.="Password shouldn't be less than 8 characters<br>";
		}
		//email form validation
		if (!preg_match("/^[a-zA-Z0-9_+]*@[a-zA-Z0-9]*.[a-zA-Z]*$/", $email)) {
			$complete=0; $error_msg.="Invalid email format<br>";
		}
		$check_email_exist=$db->query("SELECT * FROM admin WHERE email='$email' OR username='$username' ");
		if ($check_email_exist->num_rows>0) {
			$complete=0; $error_msg.="Email address or Username already exist<br>";
		}
		if ($complete==1) {
			$password=sha1(md5($password));
			$token=microtime().rand(0,2000).$username;
			$status="admin";
			$db->query("INSERT INTO admin(username, email, password,access_level,status,token)VALUES('$username','$email','$password','$access_level','$status','$token')");

			$_SESSION['msg']="Your account has been successfully created.Please check your email to complete the registration process.";
			$_SESSION['color']="success";
			header("location:../admin/add_admin.php");
		}else{
			$_SESSION['msg']=$error_msg;
			$_SESSION['color']="danger";
			header("location:../admin/add_admin.php");
		}
	}else{
		$_SESSION['msg']="Invalid redirecting please make sure you are accessing this page for the official page.";
		$_SESSION['color']="danger";
		header("location:../admin/add_admin.php");
	}



?>