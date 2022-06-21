<?php require_once	"header/header_user.php"; ?>
<?php require_once	"header/user_dashboard_sidebar_menu.php"; ?>
<?php 
	if (isset($_GET['media_id']) && isset($_GET['code']) && $_GET['code'] !="") {
		$media_id=$_GET['media_id'];
		$pdf=$db->query("SELECT * FROM pdf_media WHERE media_id='$media_id' ");
	}else{
	 	//header("location:prayer_library_teaching");
	} 
?>
<main class="main_content">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<h4 align="center"class="fw-bold">WELCOME TO THE TEACHING ON PRAYERS WITH PASTOR TIBI PETERS</h4>
				<p class="lead">Please fill up the form below to complete your subscription requirement</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<?php if ($pdf->num_rows>0): ?>
				<?php while($pdf_row=$pdf->fetch_object()): ?>
					<div class="card" style="width:100%; height:100%">
					  <img class="card-img-top" src="<?=$pdf_row->image ?>" alt="Card image cap">
					  <div class="card-body">
					    <h4 class="card-title fw-bold"><?=$pdf_row->filename ?></h4>
					    <p class="card-text"><?=$pdf_row->description ?></p>
					  </div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>
			<div class="col-md-6 mt-5">
				<h4 class="fw-bold">Message Subscription User Form</h4>
				<?php require_once  "../error_msg.php"; ?>
				<form method="post" action="../library/pdf_subscription" class="mt-4">
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
							<option value="bronze">BRONZE - 90 Days</option>
							<option value="silver">SILVER - 180 Days</option>
							<option value="gold">GOLD - 365 Days</option>
						</select>
					</div>
					<div class="form-group">
						<input type="submit" name="subscription_btn" class="btn btn-success fw-bold" value="Complete Payment">
					</div>
				</form>
			</div>
		</div>
	</div>

</main>

<?php require_once	"footer/footer_user"; ?>