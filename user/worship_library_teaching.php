<?php require_once	"header/header_user.php"; ?>
<?php require_once	"header/user_dashboard_sidebar_menu.php"; ?>
<?php  
	$audio=$db->query("SELECT * FROM audio_media");
	$video=$db->query("SELECT * FROM video_media");
	$pdf=$db->query("SELECT * FROM pdf_media");
?>
<main class="main_content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4 align="center"class="fw-bold">WELCOME TO THE TEACHING ON WORSHIP WITH PASTOR TIBI PETERS</h4>
				<p class="lead">
					Welcome to the teaching and preaching of Pastor Tibi Peters on worship as believers core. You could get unlimited daily devotional, teachings on worship that could help increasing your spiritual life and understanding on spiritual things and happenings as a believer in Christ Jesus when you worship. <br>
					<span class="ml-5"><b>Note:</b> Messages and Teaching on all Pastor Tibi Peters spam across video files, audio files and PDF files which you could access to grow your understanding on spiritual matters and it's occurences in our physical realm.</span>
				</p>
			</div>
		</div>
		<div class="row float-right">
			<div class="col-md-12">
				<button class="btn btn-success btn-sm fw-bold text-dark" onclick="audioUpload()">
					<i class="fas fa-file-audio mr-1"></i>AUDIO MESSAGES
				</button>
				<button class="btn btn-success btn-sm fw-bold text-dark" onclick="videoUpload()">
					<i class="fas fa-file-video mr-1"></i>VIDEO MESSAGES
				</button>
				<button class="btn btn-success btn-sm fw-bold text-dark" onclick="pdfUpload()">
					<i class="fas fa-file-pdf mr-1"></i>PDF MESSAGES
				</button>
			</div>
		</div>
	</div>
	<!--Audio display files-->
	<div class="container-fluid mt-5" id="audio_showcase">
		<div class="row">
			<?php if ($audio->num_rows>0): ?>
				<?php while($audio_row=$audio->fetch_object()): ?>
					<?php if ($audio_row->category=="believers core" && $audio_row->sub_category=="worship"): ?>
						
						<div class="col-md-4">
							<div class="card" style="width: 20rem; height:100%">
							  <img class="card-img-top" src="<?=$audio_row->image ?>" alt="Card image cap">
							  <div class="card-body">
							    <h4 class="card-title fw-bold"><?=$audio_row->filename ?></h4>
							    <p class="card-text"><?=$audio_row->description ?></p>
							    <?php if ($expiration_date=="Not Active"): ?>
							    	<a href="audio_subscription.php?media_id=<?=$audio_row->media_id ?>" class="btn btn-primary fw-bold mb-4">SUBSCRIBE</a>
							    <?php else: ?>
							    	<a href="audio_access.php?media_id=<?=$audio_row->media_id ?>" class="btn btn-primary fw-bold mb-4">ACCESS</a>
							    <?php endif ?>
							  </div>
							</div>
						</div>
					<?php else: ?>
					<?php endif ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>

	<!--video display files-->
	<div class="container-fluid mt-5" id="video_showcase">
		<div class="row">
			<?php if ($video->num_rows>0): ?>
				<?php while($video_row=$video->fetch_object()): ?>
					<?php if ($video_row->category=="believers core" && $video_row->sub_category=="worship"): ?>
						
						<div class="col-md-4">
							<div class="card" style="width: 20rem; height:100%">
							  <img class="card-img-top" src="<?=$video_row->image ?>" alt="Card image cap">
							  <div class="card-body">
							    <h4 class="card-title fw-bold"><?=$video_row->filename ?></h4>
							    <p class="card-text"><?=$video_row->description ?> Hello</p>
							    <?php if ($expiration_date=="Not Active"): ?>
							    	<a href="audio_subscription.php?media_id=<?=$audio_row->media_id ?>" class="btn btn-primary fw-bold mb-4">SUBSCRIBE</a>
							    <?php else: ?>
							    	<a href="video_access.php?media_id=<?=$video_row->media_id ?>" class="btn btn-primary fw-bold mb-4">ACCESS</a>
							    <?php endif ?>
							  </div>
							</div>
						</div>
					<?php else: ?>
					<?php endif ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
	<!--pdf display files-->
	<div class="container-fluid mt-5" id="pdf_showcase">
		<div class="row">
			<?php if ($pdf->num_rows>0): ?>
				<?php while($pdf_row=$pdf->fetch_object()): ?>
					<?php if ($pdf_row->category=="believers core" && $pdf_row->sub_category=="worship"): ?>	
						<div class="col-md-4">
							<div class="card" style="width: 20rem; height:100%">
							  <img class="card-img-top" src="<?=$pdf_row->image ?>" alt="Card image cap">
							  <div class="card-body">
							    <h4 class="card-title fw-bold"><?=$pdf_row->filename ?></h4>
							    <p class="card-text"><?=$pdf_row->description ?> Hello</p>
							    <?php if ($expiration_date=="Not Active"): ?>
							    	<a href="audio_subscription.php?media_id=<?=$audio_row->media_id ?>" class="btn btn-primary fw-bold mb-4">SUBSCRIBE</a>
							    <?php else: ?>
							    	<a href="pdf_access.php?media_id=<?=$pdf_row->media_id ?>" class="btn btn-primary fw-bold mb-4">ACCESS</a>
							    <?php endif ?>
							  </div>
							</div>
						</div>
					<?php else: ?>
					<?php endif ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</main>


<script>
	//audio click event to show messgaes that are only audio
	document.getElementById("video_showcase").style.display="none";
	document.getElementById("pdf_showcase").style.display="none";
	function audioUpload(){
		document.getElementById("audio_showcase").style.display="block";
		document.getElementById("video_showcase").style.display="none";
		document.getElementById("pdf_showcase").style.display="none";
	}

	//video click event to show messgaes that are only video
	function videoUpload(){
		document.getElementById("video_showcase").style.display="block";
		document.getElementById("audio_showcase").style.display="none";
		document.getElementById("pdf_showcase").style.display="none";
	}

	//pdf click event to show messgaes that are only pdf
	function pdfUpload(){
		document.getElementById("pdf_showcase").style.display="block";
		document.getElementById("video_showcase").style.display="none";
		document.getElementById("audio_showcase").style.display="none";
	}
</script>
<?php require_once	"footer/footer_user.php"; ?>
