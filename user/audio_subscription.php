<?php require_once	"header/header_user.php"; ?>
<?php require_once	"header/user_dashboard_sidebar_menu.php"; ?>
<?php 
	if (isset($_GET['media_id'])) {
		$media_id=$_GET['media_id'];
		$audio=$db->query("SELECT * FROM audio_media WHERE media_id='$media_id' ");
	}else{
	 	//header("location:prayer_library_teaching");
	} 
?>
<main class="main_content">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<h4 align="center"class="fw-bold">WELCOME TO THE TEACHING ON PRAYERS WITH PASTOR TIBI PETERS</h4>
				<p class="lead text-center">Subscriptions are made available to all users all across the globe which all you need do is to indicate if you are subscribing as a resident in <b>Nigeria</b> or a resident outside <b>outside Nigeria.</b></p>
			</div>
			<div align="center">
				<div class="col-md-6 mb-4 mt-2">
					<a class="btn btn-success fw-bold text-white" id="nigeria_users">
						For Resident in Nigeria, Click Here
					</a>
				</div>
				<div class="col-md-6 mb-4 mt-2">
					<a class="btn btn-primary fw-bold text-white" id="foreign_users">
						For Resident outside Nigeria, Click Here
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<?php if ($audio->num_rows>0): ?>
				<?php while($audio_row=$audio->fetch_object()): ?>
					<div class="card" style="width:100%; height:100%">
					  <img class="card-img-top" src="<?=$audio_row->image ?>" alt="Card image cap">
					  <div class="card-body">
					    <h4 class="card-title fw-bold"><?=$audio_row->filename ?></h4>
					    <p class="card-text"><?=$audio_row->description ?></p>
					  </div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>
			<!--Resident Of Nigeria-->
			<div class="resident_of_nigeria col-md-6 mt-5" id="nigeria_users_form">
				<h4 class="fw-bold">Subscription Form For Resident In Nigeria</h4>
				<?php require_once  "../error_msg.php"; ?>
				<form method="post" action="../library/audio_subscription" class="mt-4">
					<div class="form-group">
						<label for="username" class="fw-bold text-success">Username</label>
						<input type="text" name="username" class="form-control" value="<?=$_SESSION['username'] ?>" readonly>
					</div>
					<div class="form-group">
						<label for="email" class="fw-bold text-success">Email Address</label>
						<input type="email" name="email" class="form-control" value="<?=$_SESSION['email'] ?>" readonly>
					</div>
					<div class="form-group">
						<input type="hidden"name="uid" value="<?=$_SESSION['uid'] ?>" >
					</div>
					<div class="form-group">
						<input type="hidden"name="media_id" value="<?=$media_id ?>" >
					</div>
					<div class="form-group">
						<label class="fw-bold text-success">Subscription Duration</label>
						<select name="subscription_duration" class="custom-select" required>
							<option value="">Select Subscription Duration</option>
							<option value="90">BRONZE - 90 Days</option>
							<option value="180">SILVER - 180 Days</option>
							<option value="365">GOLD - 365 Days</option>
						</select>
					</div>
					<div class="form-group">
						<input type="submit" name="subscription_btn" class="btn btn-success fw-bold" value="Complete Payment">
					</div>
				</form>
			</div>

			<!--Resident Outside Nigeria-->
			<div class="resident_outside_nigeria col-md-6 mt-5" id="foreign_users_form">
				<h4 class="fw-bold text-center">Subscription Form For Resident Outside Nigeria</h4>
				<?php require_once  "../error_msg"; ?>
				<form method="post" action="../library/audio_subscription" class="mt-4">
					<div class="form-group">
						<label for="username" class="fw-bold text-success">Username</label>
						<input type="text" name="username" class="form-control" value="<?=$_SESSION['username'] ?>" readonly>
					</div>
					<div class="form-group">
						<label for="email" class="fw-bold text-success">Email Address</label>
						<input type="email" name="email" class="form-control" value="<?=$_SESSION['email'] ?>" readonly>
					</div>
					<div class="form-group">
						<input type="hidden"name="uid" value="<?=$_SESSION['uid'] ?>" >
					</div>
					<div class="form-group">
						<input type="hidden"name="media_id" value="<?=$media_id ?>" >
					</div>
					<div class="form-group">
						<label class="fw-bold text-success">Subscription Duration</label>
						<select name="subscription_duration" class="custom-select" required>
							<option value="">Select Subscription Duration</option>
							<option value="90">BRONZE - 90 Days</option>
							<option value="180">SILVER - 180 Days</option>
							<option value="365">GOLD - 365 Days</option>
						</select>
					</div>
					<div class="form-group">
						<input type="submit" name="subscription_btn" class="btn btn-primary fw-bold" value="Complete Payment">
					</div>
				</form>
			</div>
		</div>
	</div>

</main>
<script>
	document.getElementById("foreign_users_form").style.display="none";
	//Resident Outside Nigeria click function
	document.getElementById("foreign_users").addEventListener("click",Foreign_Users);
	function Foreign_Users(){
		document.getElementById("foreign_users_form").style.display="block";
		document.getElementById("nigeria_users_form").style.display="none";
	}
	//Resident In Nigeria click function
	document.getElementById("nigeria_users").addEventListener("click",Nigeria_Users);
	function Nigeria_Users(){
		document.getElementById("foreign_users_form").style.display="none";
		document.getElementById("nigeria_users_form").style.display="block";
	}
</script>
<?php require_once	"footer/footer_user"; ?>