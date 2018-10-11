<?php

session_start();

  if (isset($_SESSION['user_id'])) {

    require ('load.php');
    require (ABSPATH.'/admin/scripts/getuserinfo.php');
    require (ABSPATH.'/admin/scripts/update-product-types.php');


    $PAGE_TITLE  = "Edit Product Types";
    $PAGE_DESC   = "...";
    $PAGE_AUTHOR = "...";

    $productTypeID = mysqli_real_escape_string($appconnect, $_GET['type']);

    $res = mysqli_query($appconnect, "SELECT * FROM `product_types` WHERE `id`='$productTypeID'");
    $row = mysqli_fetch_array($res);

    $productTypeID = $row['id'];
    $productTypeName = $row['type'];
    $productTypeDesc = $row['description'];
    $lastUpdated = $row['last_updated'];
    $productTypeVisibility = $row['visibility'];

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
          <div class="card-header bg-dark text-white"> <i class="fa fa-edit"></i> Edit Type : <?php echo $productTypeName; ?></div>
          <div class="card-body">
            <form class="" action="" method="post">
              <div class="form-group">
                <div class="form-label-group">
                  <input type="text" name="productTypeID" id="productTypeID" class="form-control" value="<?php echo $productTypeID; ?>" hidden>
                  <label for="productTypeID">Product Type ID</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
                  <input type="text" name="productTypeName" id="productTypeName" class="form-control" placeholder="Product Type Name" value="<?php echo $productTypeName; ?>" required="required" autofocus>
                  <label for="productTypeName">Product Type Name</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
                  <textarea class="form-control" id="productTypeDesc" placeholder="Product Type Description" name="productTypeDesc" autofocus><?php echo $productTypeDesc; ?></textarea>
                </div>
              </div>
              <input type="submit" name="update-product-type" class="btn btn-primary btn-block" href="" value="Update">
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
