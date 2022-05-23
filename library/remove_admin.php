<?php 
	require_once	"../config/config.php";

	if (isset($_GET['id']) && isset($_GET['username'])){
		$error_msg="";
		$complete=1;
		$username=$_GET['username'];
		$id=$_GET['id'];
		$db->query("DELETE FROM admin WHERE admin_id='$id' AND username='$username' ");
		$_SESSION['msg']="Admin account with ID $id has been deleted successfully.";
		$_SESSION['color']="success";
		header("location:../admin/view_admin.php");

	}else{
		$_SESSION['msg']="Invalid redirecting please make sure you are accessing this page for the official page.";
		$_SESSION['color']="danger";
		header("location:../admin/view_admin.php");
	}



?>