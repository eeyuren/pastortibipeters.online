<?php require_once	"header/header_admin.php"; ?>
<?php require_once	"header/admin_dashboard_sidebar_menu.php"; ?>
<?php require_once	"header/sidebar.php"; ?>
<main class="main_content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="float-right mb-4">
                    <a href="view_categories.php" class="btn btn-success btn-md fw-bold text-white">
                        <i class="fas fa-eye mr-2"></i>VIEW CATEGORY
                    </a>
                </div>
                <div align="center">
                    <a><img class="navbar-brand logo" id="login_logo" src="asset/img/add_category.png" width="300" height="200"></a>
                </div>
                <?php require_once  "../error_msg.php"; ?>
                    <form action="../library/add_category_action.php"method="POST">
                        <div class="form-group">
                            <label class="fw-bold">Add Media Category</label>
                            <input type="text" name="category" class="form-control" required>
                        </div>
                       <!--  <div class="form-group mt-3">
                            <label for="email" class="fw-bold">Media Category</label>
                            <select class="form-control" name="category" required>
                                <option value="" id="none">Select Media Category</option>
                                <option id="classics"class="fw-bold" value="classics">
                                    Classics
                                </option>
                                <option id="faith_food"class="fw-bold"value="faith_food">       Faith Food
                                </option>
                                <option id="believers_core"class="fw-bold" value="believers_core">      
                                    Believers Core
                                </option>
                            </select>
                        </div> -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="fw-bold">Add Classics Sub Category</label>
                                    <input type="text" name="classic_sub_category" class="form-control">
                                </div>
                                <!-- <div class="form-group classics_show mt-3">
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
                                </div> -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="fw-bold">Add Believers Core Sub Category</label>
                                    <input type="text" name="believers_sub_category" class="form-control">
                                </div>
                                <!-- <div class="form-group believers_core_show mt-3">
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
                                </div> -->
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="fw-bold">Add Faith Food Sub Category</label>
                            <input type="text" name="faith_sub_category" class="form-control">
                        </div>
                        <!-- <div class="form-group faith_food_show mt-3">
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
                        </div> -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="fw-bold">Name of admin that added the category</label>
                                    <input type="text" class="form-control" name="admin_name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="fw-bold">Date when category was added </label>
                                    <input type="date" class="datepicker form-control" name="publication_date">
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
</main>



<?php require_once	"footer/footer_admin.php"; ?>