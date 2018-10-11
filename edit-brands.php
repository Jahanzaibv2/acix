<?php

session_start();

  if (isset($_SESSION['user_id'])) {

  require ('load.php');
  require (ABSPATH.'/admin/scripts/update-brands.php');


  $PAGE_TITLE  = "Edit Brands";
  $PAGE_DESC   = "...";
  $PAGE_AUTHOR = "...";

  $brandID = mysqli_real_escape_string($appconnect, $_GET['brand']);

  $res = mysqli_query($appconnect, "SELECT * FROM `product_brands` WHERE `id`='$brandID'");
  $row = mysqli_fetch_array($res);

  $brandID = $row['id'];
  $brandName = $row['name'];
  $brandDesc = $row['description'];
  $lastUpdated = $row['last_updated'];
  $brandVisibility = $row['visibility'];

?>
<!DOCTYPE html>
<html lang="en">
  <?php
    require (ABSPATH.'/admin/scripts/add-sale.php');
    require (ABSPATH.'/admin/scripts/add-product.php');
    require (ABSPATH.'/admin/scripts/add-vendor.php');
    require (ABSPATH.'/admin/scripts/add-product-type.php');
    require (ABSPATH.'/admin/scripts/add-brand.php');
    require (ABSPATH.'/admin/scripts/add-expense-account.php');
    require (ABSPATH.'/admin/scripts/add-expense.php');
    require (ABSPATH.APPINC."/modules/head.php");
  ?>
  <body id="page-top">
    <?php require (ABSPATH.APPINC."/modules/nav.php"); ?>
    <div id="wrapper">
      <?php require (ABSPATH.APPINC."/modules/sidebar.php"); ?>
      <div id="content-wrapper">
        <div class="container-fluid">
          <?php
            require (ABSPATH.APPINC."/modules/breadcrumbs.php");
          ?>
          <h1><?php echo $PAGE_TITLE; ?></h1>
          <hr>
        </div>
        <div class="card card-register mx-auto mt-5">
          <div class="card-header bg-dark text-white"> <i class="fa fa-edit"></i> Edit <?php echo $brandName; ?></div>
          <div class="card-body">
            <form class="" action="" method="post">
              <div class="form-group">
                <div class="form-label-group">
                  <input type="text" name="brandID" id="brandID" class="form-control" value="<?php echo $brandID; ?>" hidden>
                  <label for="brandID">Brand ID</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
                  <input type="text" name="brandName" id="brandName" class="form-control" placeholder="Account title" value="<?php echo $brandName; ?>" required="required" autofocus>
                  <label for="brandName">Brand Name</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
                  <textarea class="form-control" id="brandDesc" placeholder="Brand Description" name="brandDesc" rows="8" cols="80" autofocus><?php echo $brandDesc; ?></textarea>
                </div>
              </div>
              <input type="submit" name="update-brand" class="btn btn-primary btn-block" href="" value="Update">
            </form>
            <br>
            <div class="card-footer bg-white">
              <small class="text-muted"><em>This record was last updated on <?php echo $lastUpdated; ?></em></small>
            </div>
          </div>
        </div>
        <br>
        <br>
        <br><br><br>
        <?php require (ABSPATH.APPINC.'/modules/footer.php'); ?>
      </div>
    </div>
    <?php
      include (ABSPATH.APPINC.'/modules/scroll-to-top.php');
      require (ABSPATH.APPINC.'/modules/modal-logout.php');
      require (ABSPATH.APPINC.'/modules/modal-add-sale.php');
      require (ABSPATH.APPINC.'/modules/modal-add-product.php');
      require (ABSPATH.APPINC.'/modules/modal-add-product-type.php');
      require (ABSPATH.APPINC.'/modules/modal-add-brand.php');
      require (ABSPATH.APPINC.'/modules/modal-add-vendor.php');
      require (ABSPATH.APPINC.'/modules/modal-add-expense-account.php');
      include (ABSPATH.APPINC."/modules/footer-scripts.php");
    ?>
    </body>
  </html>

  <?php
  }else {
    header('location: login.php');
  }

  ?>
