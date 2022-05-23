<?php require_once	"header/header_admin.php"; ?>
<?php require_once	"header/admin_dashboard_sidebar_menu.php"; ?>
<?php require_once	"header/sidebar.php"; ?>
<main class="main_content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="float-right mb-4  ml-4">
                    <a href="view_users.php" class="btn btn-success btn-md fw-bold text-white">
                        <i class="fas fa-users mr-2"></i>VIEW USERS ACCOUNT
                    </a>
                </div>
                <div class="float-right mb-4">
                    <a href="view_admin.php" class="btn btn-success btn-md fw-bold text-white">
                        <i class="fas fa-user mr-2"></i>VIEW ADMIN ACCOUNT
                    </a>
                </div>
               
                <div align="center" class="mt-5">
                    <a><img class="navbar-brand logo" id="login_logo" src="asset/img/admin_reg.png" width="300" height="200"></a>
                </div>
                <?php require_once  "../error_msg.php"; ?>
                <form action="../library/admin.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                    <label for="username">USERNAME</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                    </div><br>
                    <div class="form-group">
                    <label for="email">EMAIL</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    </div><br>
                    <div class="form-group">
                    <label for="email">ADMIN STATUS</label>
                    <select name="status" class="form-control">
                        <option value="">Select Option</option>
                        <option class="super admin">Super Admin</option>
                        <option class="sub admin">Sub Admin</option>
                        <option value="other admin">Other Admin</option>
                    </select>
                    </div><br>
                    <div class="form-group">
                    <label for="pwd">PASSWORD</label>
                    <input type="password" class="form-control" id="pwd" name="password">
                    </div>
                    <div class="form-group">
                    <label for="conf_pwd">CONFIRM PASSWORD</label>
                    <input type="password" class="form-control" id="pwd" name="confirm_password">
                    </div>
                    <input type="submit" class="mt-2 btn-warning" value="Create an Account" name="create_admin"><br><br>
                    <div class="form-group form-check form-inline">
                        <p class="text-center">Kindly check your email address <br> for confirmation</p>
                    </div>
                    
                </form>
            </div>
        </div>

    </div>
</main>



<?php require_once	"footer/footer_admin.php"; ?>