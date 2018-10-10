<?php

  require ('load.php');


  $PAGE_TITLE  = "Export Record";
  $PAGE_DESC   = "...";
  $PAGE_AUTHOR = "..."

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
            <?php require (ABSPATH.APPINC."/modules/breadcrumbs.php"); ?>
            <h1>Export Record</h1>
            <hr>
            <p>Create custom backups or <a href="#">clone</a> everything.</p>
            <div class="row">
              <div class="col-xl-6 col-sm-12 mb-3">
                <?php require (ABSPATH.APPINC."/cards/clone.php"); ?>
              </div>
              <div class="col-xl-6 col-sm-12 mb-3">
                <?php require (ABSPATH.APPINC."/cards/backup.php"); ?>
              </div>
            </div>
          </div>
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
