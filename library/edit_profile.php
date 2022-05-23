<?php 
	require_once	"../config/config.php";

	if (isset($_POST['edit_profile'])){
		$error_msg="";
		$complete=1;
		//the post_clean() function is found in the config.php page
		$username=post_clean("username",$db);
		$email=post_clean("email",$db);
		//general form validation
		if (empty($username)||empty($email)) {
			$complete=0; $error_msg.="Form fields shouldn't be left blank<br>";
		}
		if (strlen($username)<2) {
			$complete=0; $error_msg.="Username shouldn't be less than 2 characters<br>";
		}
		
		if ($complete==1) {
			//check user
			$check_user_auth=$db->query("SELECT * FROM users WHERE username='$username' ");
			if ($check_user_auth->num_rows>0) {
				$id=$_SESSION['id'];
				$db->query("UPDATE users SET username='$username' WHERE uid='$id' ");
				$_SESSION['msg']="Dear $username, your account has been updated";
				$_SESSION['color']="success";
				header("location:../user/profile.php");
			}else{
				$id=$_SESSION['id'];
				$db->query("UPDATE users SET username='$username' WHERE uid='$id' ");
				$_SESSION['msg']="Dear $username, your account has been updated";
				$_SESSION['color']="success";
				header("location:../user/profile.php");
			}
			//check email
			$check_email_auth=$db->query("SELECT * FROM users WHERE email='$email'");
			if ($check_email_auth->num_rows>0) {
				$id=$_SESSION['id'];
				$db->query("UPDATE users SET email='$email' WHERE uid='$id' ");
				$id=$_SESSION['id'];
				$db->query("UPDATE users SET email='$email' WHERE uid='$id' ");
				$_SESSION['msg']="Dear $username, your account has been updated";
				$_SESSION['color']="success";
				header("location:../user/profile.php");
			}
		}else{
			$_SESSION['msg']=$error_msg;
			$_SESSION['color']="danger";
			//header("location:../user/profile.php");
			echo "$error_msg";
		}
	}else{
		$_SESSION['msg']="Invalid redirecting please make sure you are accessing this page for the official page.";
		$_SESSION['color']="danger";
		//header("location:../user/profile.php");
	}



?>