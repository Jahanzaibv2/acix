<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Edit Vendors Page
 * 
 * 
 * 
 * 
 * 
 * @author Rana Jahanzaib <Jahanzaibv2@gmail.com>
 * 
 * @package Acix
 */

  session_start();

  if (isset($_SESSION['user_id'])) {

    require ('load.php');
    require (ABSPATH.'/admin/scripts/getuserinfo.php');
    require (ABSPATH.'/admin/scripts/update-vendors.php');


    $PAGE_TITLE  = "Edit Vendors";
    $PAGE_DESC   = "...";
    $PAGE_AUTHOR = "...";

    $vendorID = mysqli_real_escape_string($appconnect, $_GET['vendor']);

    $res = mysqli_query($appconnect, "SELECT * FROM `vendors` WHERE `id`='$vendorID'");
    $row = mysqli_fetch_array($res);

    $vendorID = $row['id'];
    $vendorName = $row['name'];
    $vendorPhone = $row['phone'];
    $vendorEmail = $row['email'];
    $vendorDesc = $row['description'];
    $lastUpdated = $row['last_updated'];
    $vendorVisibility = $row['visibility'];

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
          <div class="card-header bg-dark text-white"> <i class="fa fa-edit"></i> Edit <?php echo $vendorName; ?></div>
          <div class="card-body">
            <form class="" action="" method="post">
              <div class="form-group">
                <div class="form-label-group">
                  <input type="text" name="vendorID" id="vendorID" class="form-control" value="<?php echo $vendorID; ?>" hidden>
                  <label for="vendorID">Vendor ID</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
                  <input type="text" name="vendorName" id="vendorName" class="form-control" placeholder="Vendor Name" value="<?php echo $vendorName; ?>" required="required" autofocus>
                  <label for="vendorName">Vendor Name</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
                  <textarea class="form-control" id="vendorDesc" placeholder="Vendor Description" name="vendorDesc" autofocus><?php echo $vendorDesc; ?></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
                  <input type="text" name="vendorPhone" id="vendorPhone" class="form-control" placeholder="Vendor Phone" value="<?php echo $vendorPhone; ?>" required="required" autofocus>
                  <label for="vendorPhone">Vendor Phone</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
                  <input type="email" name="vendorEmail" id="vendorEmail" class="form-control" placeholder="Vendor Email" value="<?php echo $vendorEmail; ?>" required="required" autofocus>
                  <label for="vendorEmail">Vendor Email</label>
                </div>
              </div>
              <input type="submit" name="update-vendor" class="btn btn-primary btn-block" href="" value="Update">
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
