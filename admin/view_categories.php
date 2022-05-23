<?php require_once	"header/header_admin.php"; ?>
<?php require_once	"header/admin_dashboard_sidebar_menu.php"; ?>
<?php require_once	"header/sidebar.php"; ?>
<?php  
    $category=$db->query("SELECT * FROM category");
?>
<main class="main_content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <table class="table table-bordered">
                    <thead>
                        <th>SN</th>
                        <th>Categories</th>
                        <th>Sub Categories</th>
                        <th>Admin Name</th>
                        <th>Date Created</th>
                        <th>Action</th>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>



<?php require_once	"footer/footer_admin.php"; ?>