<?php

  require ('load.php');


  $PAGE_TITLE  = "Home";
  $PAGE_DESC   = "...";
  $PAGE_AUTHOR = "..."


?>

<!DOCTYPE html>
<html lang="en">
  <?php
    require (ABSPATH.APPINC.'/scripts/add-product.php');
    require (ABSPATH.APPINC.'/scripts/add-vendor.php');
    require (ABSPATH.APPINC.'/scripts/add-product-type.php');
    require (ABSPATH.APPINC.'/scripts/add-brand.php');
    require (ABSPATH.APPINC.'/scripts/add-expense-account.php');
    require (ABSPATH.APPINC."/page-unit/head.php");
  ?>
  <body id="page-top">
    <?php require (ABSPATH.APPINC."/page-unit/nav.php"); ?>
    <div id="wrapper">
      <?php require (ABSPATH.APPINC."/page-unit/sidebar.php"); ?>
      <div id="content-wrapper">
        <div class="container-fluid">
          <?php require (ABSPATH.APPINC."/page-unit/breadcrumbs.php"); ?>
          <div class="row text-center">
            <div class="col-md-12 text-center mb-3">
              <span class=""><?php echo $ADD_ERROR_MSG; ?></span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
              <?php require (ABSPATH.APPINC."/cards/sales-count.php"); ?>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
              <?php require (ABSPATH.APPINC."/cards/top-sellings.php"); ?>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
              <?php require (ABSPATH.APPINC."/cards/short-items.php"); ?>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
              <?php require (ABSPATH.APPINC."/cards/improvements.php"); ?>
            </div>
          </div>
          <?php require (ABSPATH.APPINC."/charts/demo-area-chart.php"); ?>
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
      require (ABSPATH.APPINC.'/page-unit/modal-query-status.php');
      require (ABSPATH.APPINC.'/page-unit/modal-add-product-with-diff-name.php');
      include (ABSPATH.APPINC."/page-unit/footer-scripts.php");
    ?>
  </body>
</html>
