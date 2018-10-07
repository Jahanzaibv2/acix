<?php

  require ('load.php');


  $PAGE_TITLE  = "Export Record";
  $PAGE_DESC   = "...";
  $PAGE_AUTHOR = "..."

?>
<!DOCTYPE html>
<html lang="en">
  <?php require (ABSPATH.APPINC."/page-unit/head.php"); ?>
  <body id="page-top">
    <?php require (ABSPATH.APPINC."/page-unit/nav.php"); ?>
    <div id="wrapper">
      <?php require (ABSPATH.APPINC."/page-unit/sidebar.php"); ?>
        <div id="content-wrapper">
          <div class="container-fluid">
            <?php require (ABSPATH.APPINC."/page-unit/breadcrumbs.php"); ?>
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
          <?php require (ABSPATH.APPINC.'/page-unit/footer.php'); ?>
        </div>
      </div>
      <?php
        include (ABSPATH.APPINC.'/page-unit/scroll-to-top.php');
        require (ABSPATH.APPINC.'/page-unit/modal-logout.php');
        require (ABSPATH.APPINC.'/page-unit/modal-add-sale.php');
        require (ABSPATH.APPINC.'/page-unit/modal-add-product.php');
        require (ABSPATH.APPINC.'/page-unit/modal-add-product-type.php');
        require (ABSPATH.APPINC.'/page-unit/modal-add-brand.php');
        require (ABSPATH.APPINC.'/page-unit/modal-add-vendor.php');
        require (ABSPATH.APPINC.'/page-unit/modal-add-expense-account.php');
        include (ABSPATH.APPINC."/page-unit/footer-scripts.php");
      ?>
    </body>
</html>
