<?php

  require ('load.php');


  $PAGE_TITLE  = "Retail Dashboard";
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
          <div class="row">
            <div class="col-xl-6 col-sm-12 mb-3">
              <?php require (ABSPATH.APPINC."/cards/revenue.php"); ?>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
              <?php require (ABSPATH.APPINC."/cards/sales-count.php"); ?>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-6 col-sm-12 mb-3">
              <?php require (ABSPATH.APPINC."/cards/gross-profit.php"); ?>
            </div>
            <div class="col-xl-6 col-sm-12 mb-3">
              <?php require (ABSPATH.APPINC."/cards/store-account.php"); ?>
            </div>
          </div>
          <?php require (ABSPATH.APPINC."/tables/sales-table-last-30days.php"); ?>
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
