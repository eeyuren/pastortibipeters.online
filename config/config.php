<?php 
	session_start();
	define("BURL", "http://localhost/pastortibi.online/");


	define('DBHOST', 'localhost');
	define('DBUSER', 'pastnllk_root');
	define('DBPASS', 'ProsperitY100#');
	define('DBNAME', 'pastnllk_ptdl');
	

	// define('DBHOST', 'localhost');
	// define('DBUSER', 'root');
	// define('DBPASS', '');
	// define('DBNAME', 'pastortibi');

	$db= new mysqli(DBHOST,DBUSER,DBPASS,DBNAME);
	if ($db->connect_error) {
		die("Opps!!! Database not found".$db->connect_error);
	}

	//post http request validation
	 function post_clean($input,$db){
		$input= strtolower(trim(strip_tags($_POST[$input])));
		$input=mysqli_real_escape_string($db,$input);
		return $input;
	}
	//get http request validation
	 function get_clean($input,$db){
		$input= strtolower(trim(strip_tags($_POST[$input])));
		$input=mysqli_real_escape_string($db,$input);
		return $input;
	}
?>