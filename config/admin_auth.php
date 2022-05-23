
<?php 
	if (isset($_SESSION['token_auth'])) {
		$auth=$_SESSION['token_auth'];
		$select=$db->query("SELECT * FROM admin WHERE token='$auth' ");
		if ($select->num_rows>0) {
			$row=$select->fetch_object();
			$id=$row->admin_id;
			$username=$row->username;
			$email=$row->email;
			$access_level=$row->access_level;
			$status=$row->status;
			$_SESSION['username']=$username;
			$_SESSION['email']=$email;
			$_SESSION['access_level']=$access_level;
			$_SESSION['status']=$status;
		}else{
			//$_SESSION['msg']="user session not set, please try again later";
			//$_SESSION["color"]="danger";
			// header("location:../login.php");
		}
	}



?>