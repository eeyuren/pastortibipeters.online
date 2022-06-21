
<?php 
	if (isset($_SESSION['token_auth'])) {
		$auth=$_SESSION['token_auth'];
		$select=$db->query("SELECT * FROM users WHERE token='$auth' ");
		if ($select->num_rows>0) {
			$row=$select->fetch_object();
			$id=$row->uid;
			$username=$row->username;
			$email=$row->email;
			$access=$row->access;
			$expiration_date=$row->expiration_date;
			$_SESSION['username']=$username;
			$_SESSION['email']=$email;
			$_SESSION['access']=$access;
			$_SESSION['uid']=$id;
			$_SESSION['expiration_date']=$expiration_date;
		}else{

		}
	}



?>