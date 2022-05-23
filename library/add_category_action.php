<?php  
	require_once	"../config/config.php";
	if (isset($_POST['btn_upload_files'])) {
		$msg="";
		$status=1;
		$category=post_clean("category",$db);
		$publication_date=post_clean("publication_date",$db);
		$classic_sub_cat=post_clean("classic_sub_category",$db);
		$faith_sub_cat=post_clean("faith_sub_category",$db);
		$believers_sub_cat=post_clean("believers_sub_category",$db);
		$admin_name=post_clean("admin_name",$db);
		
		if (empty($category)|| empty($admin_name)|| empty($publication_date)) {
			$status=0; $msg.="Form fields shouldn't be left blank";
		}
		//Classic Sub Category
		if ($classic_sub_cat=="") {
			$classic_sub_cat="None";
		}else{
			$check_classic_sub_cat=$db->query("SELECT * FROM category WHERE classic_sub_cat='$classic_sub_cat'");
			if ($check_classic_sub_cat->num_rows>0) {
				$status=0; $msg.="classic sub category name already exist";
			}
		}
		//Faith Sub Category
		if ($faith_sub_cat=="") {
			$faith_sub_cat="None";
		}else{
			$check_faith_sub_cat=$db->query("SELECT * FROM category WHERE faith_food_sub_cat='$faith_sub_cat'");
			if ($check_faith_sub_cat->num_rows>0) {
				$status=0; $msg.="faith food sub category name already exist";
			}
		}
		//Believers Core Sub Category
		if ($believers_sub_cat=="") {
			$believers_sub_cat="None";
		}else{
			$check_believer_sub_cat=$db->query("SELECT * FROM category WHERE believers_core_sub_cat=
				'$believers_sub_cat'");
			if ($check_believer_sub_cat->num_rows>0) {
				$status=0; $msg.="believers core sub category name already exist";
			}
		}
		/*$check_file=$db->query("SELECT * FROM category WHERE cat_name='$category'");
		if ($check_file->num_rows>0) {
			$status=0; $msg.="category name already exist";
		}*/
		if($status==1) {
			$db->query("INSERT INTO category(cat_name, classic_sub_cat, believers_core_sub_cat, faith_food_sub_cat, admin_name, date_created)VALUES('$category','$classic_sub_cat',
				'$believers_sub_cat','$faith_sub_cat','$admin_name','$publication_date')");
			$_SESSION['msg']="A new category has been addes successfully";
			$_SESSION['color']="success";
			header("location:../admin/add_categories.php");
		}else{
		$_SESSION['msg']=$msg;
		$_SESSION['color']="danger";
		header("location:../admin/add_categories.php");
		}
	}else{
		$_SESSION['msg']="Invalid Redirecting. Please try again later.";
		$_SESSION['color']="danger";
		header("location:../admin/add_categories.php");
	}


?>