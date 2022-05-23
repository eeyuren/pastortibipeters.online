<?php require_once	"header/header_admin.php"; ?>
<?php require_once	"header/admin_dashboard_sidebar_menu.php"; ?>
<?php require_once	"header/sidebar.php"; ?>
<main class="main_content">
    <!-- <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="d-flex">
                    <a><img class="navbar-brand logo" id="login_logo" src="../assets/images/mobile/logo.png"></a>
                    <h3 class="mt-5 fw-bold">MEDIA UPLOAD</h3>
                </div>

                <div class="col-md-8 myform">
                    <?php require_once  "../error_msg.php"; ?>
                    <form action="../library/media_upload_action.php" method="POST" enctype="multipart/form-data">
                    	<div class="row">
                    		<div class="col-md-6">
                    			<div class="form-group">
                    				<label for="title" class="fw-bold">Title</label>
                    				<input type="text" class="form-control" id="title" name="title" required placeholder="Name of media file">
                    			</div>
                    		</div>
                    		<div class="col-md-6">
                    			<div class="form-group">
                    				<label for="filename" class="fw-bold">Media File Name</label>
                    				<input type="text" class="form-control" id="filename" name="filename" required placeholder="Name of media file">
                    			</div>
                    		</div>
                    	</div>
                        <div class="form-group">
	                        <label for="file-type" class="fw-bold">Media File Type</label>
	                        <select class="form-control" name="file_type" required>
	                        	<option value="" id="no_files">Select Media Type</option>
	                        	<option class="fw-bold"value="audio" id="audio">
	                        		Audio File
	                        	</option>
	                        	<option class="fw-bold"value="video" id="video">
	                        		Video File
	                        	</option>
	                        	<option class="fw-bold"value="pdf" id="pdf">
	                        		PDF Books
	                        	</option>
	                        </select>
                        </div>
                        <div class="form-group audio_show mt-3">
                        	<label class="fw-bold" for="audio">Upload Audio File</label>
                        	<input type="file" name="audio_file" accept="audio/*" class="form-control">
                        </div>
                        <div class="form-group video_show mt-3">
                        	<label class="fw-bold" for="video">Upload Video File</label>
                        	<input type="file" name="video_file" accept="video/*" class="form-control">
                        </div>
                        <div class="form-group pdf_show mt-3">
                        	<label class="fw-bold" for="pdf">Upload PDF File</label>
                        	<input type="file" name="pdf_file" accept="application/pdf" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                        	<label class="fw-bold" for="pdf">Upload Image Art</label>
                        	<input type="file" name="image" accept="image/*" class="form-control">
                        </div>
                        <div class="form-group mt-3">
	                        <label for="email" class="fw-bold">Media Category</label>
	                        <select class="form-control" name="category" required>
	                        	<option value="" id="none">Select Media Category</option>
	                        	<option id="classics"class="fw-bold" value="classics">
	                        		Classics
	                        	</option>
	                        	<option id="faith_food"class="fw-bold"value="faith_food">		Faith Food
	                        	</option>
	                        	<option id="believers_core"class="fw-bold" value="believers_core">		
	                        		Believers Core
	                        	</option>
	                        </select>
                        </div>
                        <div class="form-group classics_show mt-3">
                        	<label for="sub category" class="fw-bold">
                        		Media Sub Category <sub>(classics)</sub>
                        	</label>
                        	<select name="classic_sub_category"class="form-control mt-1">
                        		<option value="">Select Sub Category Option</option>
                        		<option value="salvation" class="fw-bold">
                        			Salvation
                        		</option>
                        		<option value="holy-spirit" class="fw-bold">
                        			Holy Spirit
                        		</option>
                        		<option value="healing" class="fw-bold">
                        			Healing
                        		</option>
                        		<option value="finances" class="fw-bold">
                        			Finances
                        		</option>
                        		<option value="living" class="fw-bold">
                        			Living
                        		</option>
                        	</select>
                        </div>
                        <div class="form-group believers_core_show mt-3">
                        	<label for="sub category" class="fw-bold">
                        		Media Sub Category <sub>(Believers Core)</sub>
                        	</label>
                        	<select name="believers_sub_category" class="form-control mt-1">
                        		<option value="">Select Sub Category Option</option>
                        		<option value="prayer" class="fw-bold">
                        			Prayer
                        		</option>
                        		<option value="worship" class="fw-bold">
                        			Worship
                        		</option>
                        		<option value="fellowship" class="fw-bold">
                        			Fellowship
                        		</option>
                        		<option value="discipleship" class="fw-bold">
                        			Discipleship
                        		</option>
                        		<option value="service" class="fw-bold">
                        			Service
                        		</option>
                        		<option value="giving" class="fw-bold">
                        			Giving
                        		</option>
                        		<option value="evangelism" class="fw-bold">
                        			Evangelism
                        		</option>
                        	</select>
                        </div>
                        <div class="form-group faith_food_show mt-3">
                        	<label for="sub category" class="fw-bold">
                        		Media Sub Category <sub>(Faith Food)</sub>
                        	</label>
                        	<select name="faith_sub_category" class="form-control mt-1">
                        		<option value="">Select Sub Category Option</option>
                        		<option value="salvation" class="fw-bold">
                        			Salvation
                        		</option>
                        		<option value="holy-spirit" class="fw-bold">
                        			Holy Spirit
                        		</option>
                        		<option value="healing" class="fw-bold">
                        			Healing
                        		</option>
                        		<option value="finances" class="fw-bold">
                        			Finances
                        		</option>
                        		<option value="living" class="fw-bold">
                        			Living
                        		</option>
                        	</select>
                        </div>
                        <div class="form-group mt-3">
                        	<label for="description" class="fw-bold">Description</label>
                        	<textarea class="form-control" maxlength="160" name="description" required></textarea>
                        </div>
                        <div class="row">
                        	<div class="col-md-6">
                        		<div class="form-group mt-3">
                        			<label for="tags" class="fw-bold">Tags</label>
                        			<input type="text" name="tags" class="form-control" required placeholder="Enter Tag">
                        		</div>
                        	</div>
                        	<div class="col-md-6">
                        		<div class="form-group mt-3">
                        			<label for="meta_data" class="fw-bold">
                        				Meta Data
                        			</label>
                        			<input type="text" name="meta_data" class="form-control" required placeholder="Enter meta data">
                        		</div>
                        	</div>
                        </div>
                        <div class="row">
                        	<div class="col-md-6">
                        		<div class="form-group">
                        			<label class="fw-bold">Publication Date</label>
                        			<input type="date" class="datepicker form-control" name="publication_date">
                        		</div>
                        	</div>
                        	<div class="col-md-6">
                        		<div class="form-group">
                        			<label class="fw-bold">Upload Date</label>
                        			<input type="date" class="form-control" name="upload_date">
                        		</div>
                        	</div>
                        </div>
                        <div class="form-group">
                        	<input type="submit" class="mt-2 btn fw-bold btn-warning" value="Upload File" name="btn_upload_files" id="upload_files"><br><br>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div> -->


    
</main>



<?php require_once	"footer/footer_admin.php"; ?>