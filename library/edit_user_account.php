]<?php 
	require_once	"../config/config.php";

	if (isset($_POST['edit_account'])){
		echo "string";
		$error_msg="";
		$complete=1;
		//the post_clean() function is found in the config.php page
		$username=post_clean("username",$db);
		$email=post_clean("email",$db);
		$id=post_clean("id",$db);
		//general form validation
		if (strlen($username)<2) {
			$complete=0; $error_msg.="Username shouldn't be less than 2 characters<br>";
		}
		
		if ($complete==1) {
			//check user
			$check_user_auth=$db->query("SELECT * FROM user WHERE username='$username' ");
			if ($check_user_auth->num_rows>0) {
				$id=$_SESSION['id'];
				$db->query("UPDATE user SET username='$username' WHERE uid='$id' ");
				$_SESSION['msg']="Dear $username, your account has been updated";
				$_SESSION['color']="success";
				header("location:../admin/edit_user.php");
			}else{
				$db->query("UPDATE user SET username='$username' WHERE uid='$id' ");
				$_SESSION['msg']="Dear $username, your account has been updated";
				$_SESSION['color']="success";
				header("location:../admin/edit_user.php");
			}
			//check email
			$check_email_auth=$db->query("SELECT * FROM user WHERE email='$email'");
			if ($check_email_auth->num_rows>0) {
				$id=$_SESSION['id'];
				$db->query("UPDATE user SET email='$email' WHERE uid='$id' ");
				$id=$_SESSION['id'];
				$db->query("UPDATE user SET email='$email' WHERE uid='$id' ");
				$_SESSION['msg']="Dear $username, your account has been updated";
				$_SESSION['color']="success";
				header("location:../admin/edit_user.php");
			}
		}else{
			$_SESSION['msg']=$error_msg;
			$_SESSION['color']="danger";
			header("location:../admin/edit_user.php");
		}
	}else{
		$_SESSION['msg']="Invalid redirecting please make sure you are accessing this page for the official page.";
		$_SESSION['color']="danger";
		header("location:../admin/edit_user.php");
	}



?>