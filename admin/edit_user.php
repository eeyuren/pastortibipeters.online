<?php require_once	"header/header_admin.php"; ?>
<?php require_once	"header/admin_dashboard_sidebar_menu.php"; ?>
<?php require_once	"header/sidebar.php"; ?>
<?php  
    if (isset($_GET['id'])&& isset($_GET['username'])) {
        $id=$_GET['id'];
        $username=$_GET['username'];
        $select=$db->query("SELECT * FROM users WHERE uid='$id' AND username='$username' ");
        if ($select->num_rows>0) {
            $row=$select->fetch_object();
        }
    }else{
        header("location:view_users.php");
    }
?>
<main class="main_content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="float-right mb-4  ml-4">
                    <a href="view_users.php" class="btn btn-success btn-md fw-bold text-white">
                        <i class="fas fa-users mr-2"></i>VIEW USERS ACCOUNT
                    </a>
                </div>
               
                <div align="center" class="mt-5">
                    <a><img class="navbar-brand logo" id="login_logo" src="asset/img/edit_user.png" width="300" height="200"></a>
                </div>
                <?php require_once  "../error_msg.php"; ?>
                <form action="../library/edit_user_account.php" method="POST">
                    <div class="form-group">
                    <label for="username">USERNAME</label>
                    <input type="text" class="form-control"value="<?=$row->username ?>" name="username" required>
                    </div><br>
                    <div class="form-group">
                    <label for="email">EMAIL</label>
                    <input type="email" class="form-control" value="<?=$row->email ?>" name="email" required>
                    </div><br>
                    <input type="hidden"value="<?=$id?>" name="id" required>
                    </div><br>
                    <input type="submit" class="btn btn-success" value="Update Your Account" name="edit_account"><br><br>
                    <div class="form-group form-check form-inline">
                    </div>
                    
                </form>
            </div>
        </div>

    </div>
</main>



<?php require_once	"footer/footer_admin.php"; ?>