<?php  
	require_once	"../config/config.php";
	if (isset($_POST['btn_upload_audio_files'])) {
		$msg="";
		$status=1;
		$title=post_clean("title",$db);
		$filename=post_clean("filename",$db);
		$category=post_clean("category",$db);
		$audio=post_clean("audio",$db);
		$description=post_clean("description",$db);
		$tags=post_clean("tags",$db);
		$meta_data=post_clean("meta_data",$db);
		$publication_date=post_clean("publication_date",$db);
		$upload_date=post_clean("upload_date",$db);
		if ($category=="classics") {
			$sub_category=post_clean("classic_sub_category",$db);
		}
		if ($category=="faith food") {
			$sub_category=post_clean("faith_food_sub_category",$db);
		}if($category=="believers core"){
			$sub_category=post_clean("believers_sub_category",$db);
		}
		
		if (empty($title)|| empty($filename)|| empty($category)|| empty($description)|| empty($tags)|| empty($meta_data)||empty($publication_date)||empty($upload_date)) {
			$status=0; $msg.="Form fields shouldn't be left blank";
		}
		$check_file=$db->query("SELECT * FROM audio_media WHERE filename='$filename' ");
		if ($check_file->num_rows>0) {
			$status=0; $msg.="media filename already exist";
		}
		if ($status==1) {
			//uploading image file
			$image_upload="../art/audio/".$_FILES['image']['name'];
			//uploading audio file
			$audio_upload="../media/audio/".$_FILES['audio_file']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'], $image_upload);
			move_uploaded_file($_FILES['audio_file']['tmp_name'], $audio_upload);
			$db->query("INSERT INTO audio_media(title,filename,metadata,description,tags,publication_date,upload_date,file_type,category,sub_category,file,image)VALUES('$title','$filename','$meta_data','$description','$tags','$publication_date','$upload_date','$audio','$category','$sub_category','$audio_upload','$image_upload')");
			$_SESSION['msg']="".ucwords($file_type)."The $audio media file $filename uploaded successfully";
			$_SESSION['color']="success";
			header("location:../admin/media_upload.php");
		}else{
		$_SESSION['msg']=$msg;
		$_SESSION['color']="danger";
		header("location:../admin/media_upload.php");
		}
	}else{
		$_SESSION['msg']="Invalid Redirecting. Please try again later.";
		$_SESSION['color']="danger";
		header("location:../admin/media_upload.php");
	}


?>