<?php require_once	"header/header_admin.php"; ?>
<?php require_once	"header/admin_dashboard_sidebar_menu.php"; ?>
<?php require_once	"header/sidebar.php"; ?>
<?php  
    $select=$db->query("SELECT * FROM users");

?>
<main class="main_content">
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="float-right">
                    <a href="add_admin.php" class="btn btn-success fw-bold mb-3">BACK</a>
                </div>
                <?php require_once  "../error_msg.php"; ?>
                <table class="table table-bordered">
                    <thead>
                        <th>SN</th>
                        <th>USERNAME</th>
                        <th>EMAIL</th>
                        <th>DATE JOINED</th>
                        <th>ACTION</th>
                    </thead>
                    <?php if ($select->num_rows>0): ?>
                        <?php while($row=$select->fetch_object()): ?>
                            <tbody>
                                <td><?=$row->uid ?></td>
                                <td><?=$row->username ?></td>
                                <td><?=$row->email ?></td>
                                <td><?=$row->date_joined ?></td>
                                <td>
                                    <a href="edit_user.php?id=<?=$row->uid ?>&username=<?=$row->username ?>" class="btn btn-success btn-sm fw-bold">
                                        <i class="fas fa-edit mr-1"></i> EDIT
                                    </a>
                                    <a href="../library/remove_user.php?id=<?=$row->uid ?>&username=<?=$row->username ?>" class="btn btn-danger btn-sm fw-bold">
                                        <i class="fas fa-trash mr-1"></i> REMOVE
                                    </a>
                                </td>
                            </tbody>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </table>
            </div>
        </div>
    </div>
</main>



<?php require_once	"footer/footer_admin.php"; ?>