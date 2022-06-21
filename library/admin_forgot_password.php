<?php 
	require_once	"../config/config.php";
	//PHPMailer Class Name Space
	use PHPMailer\PHPMailer\PHPMailer;
    //vException Class Name Space
	use PHPMailer\PHPMailer\Exception;
    require_once	"../PHPMailer/src/PHPMailer.php";
    require_once	"../PHPMailer/src/Exception.php";

	if (isset($_POST['forgot_password_btn'])){
		$error_msg="";
		$complete=1;
		//the post_clean() function is found in the config.php page
		$email=post_clean("email",$db);
		//general form validation
		if (empty($email)) {
			$complete=0; $error_msg.="Form field shouldn't be left blank<br>";
		}

		if ($complete==1) {
			$select=$db->query("SELECT * FROM admin WHERE email='$email' ");
			if ($select->num_rows>0) {
				$str="bjdhjd8whujwhdjnd0-2u8ty7w2dbhbdm,kmxcsoiouwgyudw76tr276gvedhd0";
				$str=str_shuffle($str);
				$str=substr($str, 0,20);
				  //====Instatiating PHPMailer Object======
				$mail= new PHPMailer();
				$company_mail="	info@patortibipeters.online";
				$company_name="RENAISSANCE ASSEMBLY";
				$subject="Password Recovering";
				  //======Set From=======
				$mail->setFrom($company_mail);
				//=====Set From Name====
				$mail->FromName=$company_name;
				  //====Receiver of mail=======
				$mail->addAddress($email);
				  //=====HTML required=======
				$mail->isHTML(TRUE);
				  //====Subject of mail=====
				$mail->Subject=$subject;
				$mail->Body='Dear valid customer, your request for a retrieving of your password has been received. Click the link below to set a new password. <a href="https://www.pastortibipeters.online/reset_password.php?reset_password=$str&code=$email">Retrieve My Password</a>';
				//===Send mail===
				if (!$mail->send()) {
                  	echo "No way";
					$_SESSION["msg"]=$mail->ErrorInfo;
					$_SESSION["color"]="danger";
					header("location:../forgot_password.php?msg=$mail->ErrorInfo");
				}else{
				  $this->db->query("UPDATE admin SET reset_password='$str' WHERE email='$email' ");
				  $_SESSION["msg"]="An email address containing your new password has been sent to the email provided";
				  $_SESSION["color"]="success";
				  header("location:../forgot_password.php");
				}
			}
		}else{
			$_SESSION['msg']=$error_msg;
			$_SESSION['color']="danger";
			header("location:../forgot_password.php");
		}
	}else{
		$_SESSION['msg']="Invalid redirecting please make sure you are accessing this page for the official page.";
		$_SESSION['color']="danger";
		header("location:../forgot_password.php");
	}



?>