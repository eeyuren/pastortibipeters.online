<?php require_once	"header/header_user.php"; ?>
<?php require_once	"header/user_dashboard_sidebar_menu.php"; ?>
<?php 
	if (isset($_GET['media_id'])) {
		$media_id=$_GET['media_id'];
		$video=$db->query("SELECT * FROM video_media WHERE media_id='$media_id' ");
	}else{
	 	//header("location:prayer_library_teaching.php");
	} 
?>
<style>
	@media(max-width: 990px){
		.margin-top{
			position: absolute; 
			top: 300px!important;
		}
	}
</style>
<main class="main_content">
	<div class="container margin-top" style="position: absolute; top: 550px;">
		<!-- <div class="row">
			<div class="col-md-12 mt-5">
				<h4 align="center"class="fw-bold">WELCOME TO THE TEACHINGS ON <?php echo $sub_category; ?> BY PASTOR TIBI PETERS</h4>
			</div>
		</div> --> <br><br><br><br>
		<div class="row">
			<div class="col-md-12">
				<?php if ($video->num_rows>0): ?>
				<?php while($video_row=$video->fetch_object()): ?>
					<div class="card" style="width:100%; height:100%">
					  <div class="card-body" align="center" style="position: absolute; bottom: 50px; left: 80px; color: #fff;">
					  	<video width="100%" height="100%" controls controlsList="nodownload" poster="<?=$video_row->image ?>">
					  		<source src="<?=$video_row->file ?>" type="video/mp4">
                		</video>
					    <h4 class="card-title fw-bold text-dark"><?=$video_row->filename ?></h4>
					  </div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>
		</div>
	</div>

</main>

<?php require_once	"footer/footer_user.php"; ?>