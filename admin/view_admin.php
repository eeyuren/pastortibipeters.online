<?php require_once  "header/header_admin.php"; ?>
<?php require_once  "header/admin_dashboard_sidebar_menu.php"; ?>
<?php require_once  "header/sidebar.php"; ?>
<?php  
    $select=$db->query("SELECT * FROM admin");

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
                        <th>ACCESS LEVEL</th>
                        <th>DATE JOINED</th>
                        <th>ACTION</th>
                    </thead>
                    <?php if ($select->num_rows>0): ?>
                        <?php while($row=$select->fetch_object()): ?>
                            <tbody>
                                <td><?=$row->admin_id ?></td>
                                <td><?=$row->username ?></td>
                                <td><?=$row->email ?></td>
                                <td><?=$row->access_level ?></td>
                                <td><?=$row->date_created ?></td>
                                <td>
                                    <a href="" class="btn btn-success btn-sm fw-bold">
                                        <i class="fas fa-edit mr-1"></i> EDIT
                                    </a>
                                    <a href="../library/remove_admin.php?id=<?=$row->admin_id ?>&username=<?=$row->username ?>" class="btn btn-danger btn-sm fw-bold">
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



<?php require_once  "footer/footer_admin.php"; ?>