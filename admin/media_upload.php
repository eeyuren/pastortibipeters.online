<?php require_once	"header/header_admin.php"; ?>
<?php require_once	"header/admin_dashboard_sidebar_menu.php"; ?>
<?php require_once	"header/sidebar.php"; ?>
<?php  
    $category=$db->query("SELECT DISTINCT cat_name FROM category");
    $classic_cat=$db->query("SELECT DISTINCT classic_sub_cat FROM category");
    $believers_cat=$db->query("SELECT DISTINCT believers_core_sub_cat FROM category");
    $faith_food=$db->query("SELECT DISTINCT faith_food_sub_cat FROM category");
?>
<main class="main_content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="float-right">
                    <a href="media_upload.php" class="btn btn-success fw-bold btn-sm mt-2">
                        <i class="fas fa-file-audio"></i> Upload Audio File
                    </a>
                    <a href="media_video_upload.php" class="btn btn-success fw-bold btn-sm mt-2">
                        <i class="fas fa-file-video"></i> Upload Video File
                    </a>
                    <a href="media_pdf_upload.php" class="btn btn-success fw-bold btn-sm mt-2">
                        <i class="fas fa-file-pdf"></i> Upload PDF File
                    </a>
                    <a href="view_audio.php" class="btn btn-secondary fw-bold btn-sm mt-2">
                        <i class="fas fa-eye"></i> View Audio Upload
                    </a>
                </div>
              <!--   <div class="float-right mb-4">
                    <a href="view_media_upload.php" class="btn btn-success btn-md fw-bold text-white">
                        <i class="fas fa-eye mr-2"></i>VIEW MEDIA UPLOAD
                    </a>
                </div> -->
                <div align="center">
                    <a><img class="navbar-brand logo"src="asset/img/media_upload.png" width="300" height="200"></a>
                </div>
                 <?php require_once  "../error_msg.php"; ?>
                    <form action="../library/media_upload_action.php"method="POST"enctype="multipart/form-data" class="audio_form">
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
                        <div class="form-group mt-3">
                            <label for="email" class="fw-bold">Media Category</label>
                            <select class="form-control" name="category" required>
                                <option value="" id="none">Select Media Category</option>
                                <?php if ($category->num_rows>0): ?>
                                    <?php while($row=$category->fetch_object()): ?>
                                        <option value="<?=$row->cat_name ?>"><?=ucwords($row->cat_name) ?></option>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <!--Classic Sub Category-->
                                <div class="form-group classics_show mt-3">
                                    <label for="sub category" class="fw-bold">
                                        Media Sub Category <sub>(classics)</sub>
                                    </label>
                                    <select name="classic_sub_category"class="form-control mt-1">
                                        <option value="">Select Sub Category Option</option>
                                        <?php if ($classic_cat->num_rows>0): ?>
                                            <?php while($classic=$classic_cat->fetch_object()): ?>
                                                <?php if ($classic->classic_sub_cat !="None"): ?>
                                                    <option value="<?=$classic->classic_sub_cat?>"><?=ucwords($classic->classic_sub_cat)?></option>
                                                <?php endif; ?>
                                            <?php endwhile; ?>
                                        <?php endif ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <!--Believers_core Sub Category-->
                                <div class="form-group classics_show mt-3">
                                    <label for="sub category" class="fw-bold">
                                        Media Sub Category <sub>(believers_core)</sub>
                                    </label>
                                    <select name="believers_sub_category"class="form-control mt-1">
                                        <option value="">Select Sub Category Option</option>
                                        <?php if ($believers_cat->num_rows>0): ?>
                                            <?php while($believers=$believers_cat->fetch_object()): ?>
                                                <?php if ($believers->believers_core_sub_cat !="None"): ?>
                                                    <option value="<?=$believers->believers_core_sub_cat?>"><?=ucwords($believers->believers_core_sub_cat)?></option>
                                                <?php endif ?>
                                            <?php endwhile; ?>
                                        <?php endif ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <!--Faith Food Sub Category-->
                                <div class="form-group classics_show mt-3">
                                    <label for="sub category" class="fw-bold">
                                        Media Sub Category <sub>(faith food)</sub>
                                    </label>
                                    <select name="faith_food_sub_category"class="form-control mt-1">
                                        <option value="">Select Sub Category Option</option>
                                        <?php if ($faith_food->num_rows>0): ?>
                                            <?php while($faith_cat=$faith_food->fetch_object()): ?>
                                                <?php if ($faith_cat->faith_food_sub_cat !="None"): ?>
                                                    <option value="<?=$faith_cat->faith_food_sub_cat?>"><?=ucwords($faith_cat->faith_food_sub_cat)?></option>
                                                <?php endif ?>
                                            <?php endwhile; ?>
                                        <?php endif ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="file-type" class="fw-bold">Media File Type</label>
                            <input type="text" name="audio" value="audio" readonly class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label class="fw-bold" for="audio">Upload Audio File</label>
                            <input type="file" name="audio_file" accept="audio/*" class="form-control" required>
                        </div>
                        <div class="form-group mt-3">
                            <label class="fw-bold" for="pdf">Upload Image Art</label>
                            <input type="file" name="image" accept="image/*" class="form-control" required>
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
                                    <input type="date" class="datepicker form-control" name="publication_date" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="fw-bold">Upload Date</label>
                                    <input type="date" class="form-control" name="upload_date" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="mt-2 btn fw-bold btn-warning" value="Upload Audio File" name="btn_upload_audio_files" id="upload_files"><br><br>
                        </div>     
                    </form>

            </div>
        </div>
    </div>
</main>



<?php require_once	"footer/footer_admin.php"; ?>