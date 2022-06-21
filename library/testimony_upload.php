<?php 
	require_once	"../config/config.php";
	    //<!--====PHPMailer Class Name Space====-->
	use PHPMailer\PHPMailer\PHPMailer;
	    //<!--====Exception Class Name Space====-->
	 use PHPMailer\PHPMailer\Exception; 
	require_once	"../PHPMailer/src/PHPMailer.php";
	require_once	"../PHPMailer/src/Exception.php";
	if (isset($_POST['testimony_btn'])){
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
		if (strlen($fullname)<2) {
			$complete=0; $error_msg.="fullname shouldn't be less than 2 characters<br>";
		}
		if ($complete==1) {
			  //====Instatiating PHPMailer Object======
			$mail= new PHPMailer();
			  //======Set From=======
			$mail->setFrom($email, $fullname);
			  //====Receiver of mail=======
			$mail->addAddress("info@pastortibipeters.online");
			  //=====HTML required=======
			$mail->isHTML(TRUE);
			  //====Subject of mail=====
			$mail->Subject="TESTIMONY SHARING";
			//=====Body of mail======
			$mail->Body=$message;
			 if (!$mail->send()) {
			 	$_SESSION['msg']="We are unable to process your request right now. Please try again later";
			 	$_SESSION['color']="danger";
			 	header("location:../user/contact.php");
			 }else{
			 	$db->query("INSERT INTO testimony_sharing(fullname, email, city, state, country, message)VALUES('$fullname','$email','$subject','$message')");
			 	$_SESSION['msg']="Your contact request has been received and is been proceed. We would reply your message as soon as possible.";
			 	$_SESSION['color']="success";
			 header("location:../user/contact_testimony.php");

			 }
		}else{
			$_SESSION['msg']=$error_msg;
			$_SESSION['color']="danger";
			header("location:../user/contact_testimony.php");
		}
	}else{
		$_SESSION['msg']="Invalid redirecting please make sure you are accessing this page for the official page.";
		$_SESSION['color']="danger";
		header("location:../user/contact_testimony.php");
	}



?>