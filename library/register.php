<?php 
	require_once	"../config/config.php";
	    //<!--====PHPMailer Class Name Space====-->
	use PHPMailer\PHPMailer\PHPMailer;
	    //<!--====Exception Class Name Space====-->
	 use PHPMailer\PHPMailer\Exception; 
	require_once	"../PHPMailer/src/PHPMailer.php";
	require_once	"../PHPMailer/src/Exception.php";

	if (isset($_POST['create_account'])){
		$error_msg="";
		$complete=1;
		//the post_clean() function is found in the config.php page
		$username=post_clean("username",$db);
		$email=post_clean("email",$db);
		$password=post_clean("password",$db);
		$confirm_password=post_clean("confirm_password",$db);
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
		$check_email_exist=$db->query("SELECT * FROM users WHERE email='$email' OR username='$username' ");
		if ($check_email_exist->num_rows>0) {
			$complete=0; $error_msg.="Email address or Username already exist<br>";
		}
		if ($complete==1) {
			$message_sender="info@pastortibipeters.online";
			$smsAuthToken="abcdefghtijdbjjiksj93688283";
			$smsAuthToken=str_shuffle($smsAuthToken);
			$smsAuthToken= substr($smsAuthToken, 0,10);
			$_SESSION['smsAuthToken']=$smsAuthToken;
			$church_name="Renaissance Assembly Church";
			  //====Instatiating PHPMailer Object======
			$mail= new PHPMailer();
			  //======Set From=======
			$mail->setFrom($message_sender, $church_name);
			  //====Receiver of mail=======
			$mail->addAddress($email);
			  //=====HTML required=======
			$mail->isHTML(TRUE);
			  //====Subject of mail=====
			$mail->Subject="Registration Confirmation";
			//=====Body of mail======
			$mail->Body=
			"<body>
				<p>Your Registration confirmation code is $smsAuthToken. To login your account, or<a href='https://pastortibipeters.online/login.php?email=$email&token=$smsAuthToken'>Click Here</a>
				</p>
			 </body>";
			 if (!$mail->send()) {
			 	$_SESSION['msg']="An error occured trying to confirm your registration by sending you a mail";
			 	$_SESSION['color']="danger";
			 	header("location:../create-account.php");
			 }else{
			 	$access="user";
			 	$password=sha1(md5($password));
			 	$token=microtime().rand(0,2000).$username;
			 	$db->query("INSERT INTO users(username, email, password,access,token)VALUES('$username','$email','$password','$access','$token')");

			 	$_SESSION['msg']="Your account has been successfully created.Please check your email to complete the registration process.";
			 	$_SESSION['color']="success";
			 	header("location:../create-account.php");
			 }
		}else{
			$_SESSION['msg']=$error_msg;
			$_SESSION['color']="danger";
			header("location:../create-account.php");
		}
	}else{
		$_SESSION['msg']="Invalid redirecting please make sure you are accessing this page for the official page.";
		$_SESSION['color']="danger";
		header("location:../create-account.php");
	}



?>