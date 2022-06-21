<?php require_once	"header/header_user.php"; ?>
<?php require_once	"header/user_dashboard_sidebar_menu.php"; ?>
<?php 
	if (isset($_GET['media_id'])) {
		$media_id=$_GET['media_id'];
		$sub_category=$_GET['sub_category'];
		$audio=$db->query("SELECT * FROM pdf_media WHERE media_id='$media_id' ");
	}else{
	 	//header("location:prayer_library_teaching.php");
	} 
?>
<main class="main_content">
	<div class="container">
		<!-- <div class="row">
			<div class="col-md-12 mt-5">
				<h4 align="center"class="fw-bold">WELCOME TO THE TEACHINGS ON <?php echo $sub_category; ?> BY PASTOR TIBI PETERS</h4>
			</div>
		</div> --> <br><br><br><br>
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<?php if ($pdf->num_rows>0): ?>
				<?php while($pdf_row=$pdf->fetch_object()): ?>
					<div class="card" style="width:100%; height:100%">
					  <img class="card-img-top" src="<?=$pdf->image ?>" alt="Card image cap">
					  <div class="card-body" align="center" style="position: absolute; bottom: 50px; left: 80px; color: #fff;">
                        <a href="<?=$pdf_row->file ?>" btn btn-success btn-lg>Read</a>
					    <h4 class="card-title fw-bold"><?=$video_row->filename ?></h4>
					  </div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>
		</div>
	</div>

</main>

<?php require_once	"footer/footer_user.php"; ?>