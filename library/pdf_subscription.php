<?php 
	require_once	"../config/config.php";

	if (isset($_POST['subscription_btn'])){
		$error_msg="";
		$complete=1;
		//the post_clean() function is found in the config.php page
		$uid=post_clean("uid",$db);
		$media_id=post_clean("media_id",$db);
		$subscription_duration=post_clean("subscription_duration",$db);
		$_SESSION['subscription_duration']=$subscription_duration;
		//general form validation
		if (empty($subscription_duration)) {
			$complete=0; $error_msg.="Form field shouldn't be left blank<br>";
		}
		if ($complete==1) {
			$subscription_date= date("d/M/Y");
			$subscription_access="Not Paid";
			$user_date_subscribed=date("d");
			$db->query("UPDATE users SET duration_subscription='$subscription_duration',date_subscribed='$user_date_subscribed' ");

			$db->query("INSERT INTO pdf_subscription(user_id, media_id, subscription_duration, subscription_access, subscription_date)VALUES('$uid','$media_id','$subscription_duration','$subscription_access','$subscription_date')");
			header("location:../user/accesstoken.php");
		}else{
			$_SESSION['msg']=$error_msg;
			$_SESSION['color']="danger";
			header("location:../believers_core_audio_subscription.php");
		}
	}else{
		$_SESSION['msg']="Invalid redirecting please make sure you are accessing this page for the official page.";
		$_SESSION['color']="danger";
		header("location:../believers_core_audio_subscription.php");
	}



?>