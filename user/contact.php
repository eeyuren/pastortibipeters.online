<?php require_once	"header/header_user.php"; ?>
<?php require_once	"header/user_dashboard_sidebar_menu.php"; ?>
<main class="main_content">
	<div class="container-fluid mt-5">
		<div class="row">
			<div class="col-md-12">
				<h3 class="fw-bold" align="center">RENAISSANCE ASSEMBLY CONTACT US </h3>
				<div class="float-right">
					<a href="contact" class="btn btn-success btn-sm fw-bold">Contact Us For Support</a>
					<a href="contact_testimony" class="btn btn-success btn-sm fw-bold">Contact Us For Your Testimonies</a>
				</div>
				<?php require_once  "../error_msg.php"; ?>
				<form method="post" action="../library/contact_action" class="mt-5">
					<div class="form-group">
						<label class="fw-bold">Full Name</label>
						<input type="text" name="fullname" class="form-control" required placeholder="Input Full Name">
					</div>
					<div class="form-group">
						<label class="fw-bold">Email Address</label>
						<input type="email" name="email" class="form-control" required placeholder="Input Your Email Address">
					</div>
					<div class="form-group">
						<label class="fw-bold">Reason For Contacting Us</label>
						<input type="text" name="subject" class="form-control" required placeholder="Input in the reason for your contacting us">
					</div>
					<div class="form-group">
						<label class="fw-bold">Message Description</label>
						<textarea name="message" class="form-control" required placeholder="Input in your prayer request" rows="8"></textarea>
					</div>
					<div class="form-group mb-5">
						<input type="submit" name="contact_btn" class="btn btn-primary btn-block fw-bold" value="Contact Us Now">
					</div>
				</form>
			</div>
		</div>
	</div>
</main>



<?php require_once	"footer/footer_user"; ?>