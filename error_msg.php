<?php if (isset($_SESSION["msg"]) && $_SESSION["msg"]!=""): ?>
  <div class="alert alert-<?=$_SESSION['color'] ?> alert-dismissible fade show" role="alert">
    <strong><i class="fa fa-bell mr-1"></i>Alert! <br></strong><?=$_SESSION["msg"] ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <?php 
    $_SESSION["msg"]="";
    $_SESSION["color"]="";
   ?>
<?php endif; ?>