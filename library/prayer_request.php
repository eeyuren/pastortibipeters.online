<?php 
	require_once	"../config/config.php";

	if (isset($_POST['request_btn'])){
		$error_msg="";
		$complete=1;
		//the post_clean() function is found in the config.php page
		$fullname=post_clean("fullname",$db);
		$email=post_clean("email",$db);
		$city=post_clean("city",$db);
		$state=post_clean("state",$db);
		$country=post_clean("country",$db);
		$message=post_clean("message",$db);
		//general form validation
		if (empty($fullname)||empty($email)||empty($city)||empty($state)||empty($country)||empty($message)) {
			$complete=0; $error_msg.="Form fields shouldn't be left blank<br>";
		}
		if (!preg_match("/^[0-9+]*$/", $phone)) {
			$status=0; $msg.="Invalid phone number<br><hr>";
		}
		if (strlen($fullname)<2) {
			$complete=0; $error_msg.="fullname shouldn't be less than 2 characters<br>";
		}
		if ($complete==1) {
			$db->query("INSERT INTO prayer_request(fullname, email, city, state, country, message)VALUES('$fullname','$email','$city','$state','$country','$message')");
			$_SESSION['msg']="Your request for a prayer has been received and we would join you in prayers. Please do come back to share your testimony once God does it for you.";
			$_SESSION['color']="success";
			header("location:../user/prayer_request.php");
		}else{
			$_SESSION['msg']=$error_msg;
			$_SESSION['color']="danger";
			header("location:../user/prayer_request.php");
		}
	}else{
		$_SESSION['msg']="Invalid redirecting please make sure you are accessing this page for the official page.";
		$_SESSION['color']="danger";
		header("location:../user/prayer_request.php");
	}



?>