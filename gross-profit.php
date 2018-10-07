<?php

  require ('load.php');


  $PAGE_TITLE  = "Gross Profit";
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
            <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
              <?php require (ABSPATH.APPINC."/cards/gross-profit-last-7days.php"); ?>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
              <?php require (ABSPATH.APPINC."/cards/gross-profit-last-30days.php"); ?>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
              <?php require (ABSPATH.APPINC."/cards/gross-profit-last-3months.php"); ?>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
              <?php require (ABSPATH.APPINC."/cards/gross-profit-last-6months.php"); ?>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <?php require (ABSPATH.APPINC."/charts/demo-last-6months-profit-area-chart.php"); ?>
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
