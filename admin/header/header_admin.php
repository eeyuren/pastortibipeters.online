<?php require_once	"../config/config.php"; ?>
<?php require_once	"../config/admin_auth.php"; ?>
<?php  
	if (isset($_SESSION['access_level'])&& $_SESSION['username']!="") {

	}else{
		$_SESSION['msg']="Unauthorised Access. You are not permitted to access this page";
		$_SESSION['color']="danger";
		header("location:../admin_login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="author" content="The Integrators">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<!--animate css plugin-->
	<link rel="stylesheet" type="text/css" href="asset/css/animate.min.css">
			<!--Owl carousel css plugin-->
	<link rel="stylesheet" type="text/css" href="asset/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="asset/css/owl.theme.default.min.css">
			<!--Bootstrap five CSS styling frame work-->
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap-five.min.css">
			<!--Bootstrap four Css styling frame work-->
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap_four.min.css">
			<!--Fontawesome css icon styling-->
	<link rel="stylesheet" type="text/css" href="asset/font/font-awesome/css/all.min.css">
			<!--Hover css library-->
	<link rel="stylesheet" type="text/css" href="asset/css/hover.min.css">
			<!--External css styling-->
	<link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2&family=Rubik:wght@300&family=Ubuntu:wght@300&display=swap" rel="stylesheet"> 
	<!--Image favicon-->
  <link rel="icon"  href="asset/img/logo/prime-graphics.jpg">
  <!--Apple touch icon-->
  <link rel="apple-touch-icon" href="asset/img/logo/prime-graphics.jpg">
	<title>Pastor Tibi Peters Digital Library</title>
	<style>
		/* Sidebar toggle styling*/
		*{
			cursor: default;
		}
		.mobile_sidebar_close{
			display: none;
		}
		.desktop_sidebar_menu{
			display: block;
		}
		.offcanvas-start{
			width: 280px; 
			transition: 0.9s;  
			background-position: 0px 500px;
			background-size: cover;
          	background-color:grey;
          	height:100%;
          	position:fixed!importnt;
          	overflow:scroll;
		}
		/* Admin Sidebar*/
		.sidebar{
			width: 250px;
			height: 100%;
			top: 33px;
			position: fixed;
			transition: 0.9s ease-in;
			overflow: hidden;
			overflow-y: scroll;
			padding-bottom: 290px;
			background-color: grey;
			z-index: 100;
		}
		.sidebar .upload_photo{
			z-index: 1000;
			position:relative;
			top: 5px;
			opacity: 1;
		}
		.sidebar.toggle{
			background: black;
			width: 0px;
			height: 100%;
			position: fixed;
			left: 0px;
			transition: 0.9s ease-in-out;
		}
		.sidebar .sidebar-user-link ul{
			line-height: 60px;
		}
		.sidebar .sidebar-user-link ul li a{
			font-weight: bolder;
			text-decoration: none;
			color: black;
		}
		.sidebar .sidebar-user-link ul li a:hover{
			color: deeppink;
		}
		/* !Admin Sidebar */
		
		/* Main Content */
		.main_content{
			height: 100%;
			width: 80%;
			margin-left: 250px;
			transition: 0.9s ease-in;
			position: absolute;
			margin-top: 20px;
		}
		.main_content.classList{
			height: 100%;
			width: 100%;
			margin-left:0px;
			transition: 0.9s ease-in-out;
			position: absolute;
		}
		/* !Main Content */
		@media(max-width:990px){
			.mobile_sidebar_close{
				display: block;
			}
			.desktop_sidebar_menu{
				display: none;
			}
		}
	</style>
</head>
<body class="bg-light">
	<nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color:grey;">
		<span class="mobile_sidebar_close fw-bold text-white btn_close">
			SIDEBAR-MENU
			<i class="fas fa-bars"style="font-size:25px; z-index: 1;" id="btn_close"></i>
		</span>
	  <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="fas fa-bars "></span>
	  </button>
	  <i class="fas fa-bars text-white mt-2 desktop_sidebar_menu btn_close"
	  style="font-size:25px; z-index: 1;"></i>
	  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		    <ul class="navbar-nav ml-auto mt-lg-0">
		      <li class="nav-item all_product px-5">
		      	<a href="javaScript:void()" class="nav-link fw-bold" data-bs-toggle="offcanvas"data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" style="color:yellow;">All product</a>
		      </li>  
		      <li class="nav-item px-5">
		      	<a href="">
		      		<i class="fas fa-bell mt-2 text-white fw-bold" style="font-size:22px;"></i>
		      	</a>
				<sup class="bg-danger p-1  fw-bold rounded-circle text-white">0</sup>
		      </li>
		      <li class="nav-item dropdown px-5 mr-5" style="margin-top: -10px;">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
		      		<i class="fas fa-cog mt-2 text-white" style="font-size:22px"></i>
		      	</a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item fw-bold" href="#">Edit Dashboard</a>
		          <a class="dropdown-item fw-bold" href="#">Our Website</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item fw-bold" href="#">Logout</a>
		        </div>
		      </li>
		    </ul>

	  </div>
	</nav>
