<?php require_once	"header/header_user.php"; ?>
<?php require_once	"header/user_dashboard_sidebar_menu.php"; ?>
<?php  
	if ($user_query->num_rows>0) {
		$row=$user_query->fetch_object();
	}
?>
<main class="main_content">
	<div class="container">
		<div class="row">
			<div class="col-md-12 main_login">
			    <div>
			        <a><img class="navbar-brand logo" id="login_logo" src="asset/img/edit_profile.png" width="300" height="200"></a>
			    </div>

			    <div class="col-md-8 myform">
			        <?php require_once  "../error_msg.php"; ?>
			        <form action="../library/edit_profile.php" method="POST" enctype="multipart/form-data">
			            <div class="form-group">
			            	<label for="username">USERNAME</label>
			            	<input type="text" class="form-control" name="username" value="<?=$row->username ?>" >
			            </div><br>
			            <div class="form-group">
			            	<label for="email">EMAIL</label>
			            	<input type="email" class="form-control" name="email" value="<?=$row->email ?>">
			            </div><br>
			            <input type="submit" class="btn btn-success fw-bold" value="Update My Account" name="edit_profile"><br><br>
			            <div class="form-group form-check form-inline">
			                <p class="text-center">Kindly check your email address <br> for confirmation</p>
			            </div>
			            
			        </form>
			    </div>
			</div>
		</div>
	</div>
</main>



<?php require_once	"footer/footer_user.php"; ?>