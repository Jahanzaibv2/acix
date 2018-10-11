<?php

session_start();

  if (isset($_SESSION['user_id'])) {

  require ('load.php');


  $PAGE_TITLE  = "Sales Reports";
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
            <?php
              require (ABSPATH.APPINC."/modules/breadcrumbs.php");
              require (ABSPATH.APPINC."/charts/demo-area-chart.php");
            ?>
          <div class="row">
            <div class="col-lg-8">
              <?php require (ABSPATH.APPINC."/charts/demo-bar-chart.php"); ?>
            </div>
            <div class="col-lg-4">
              <?php require (ABSPATH.APPINC."/charts/demo-pie-chart.php"); ?>
            </div>
          </div>
          <p class="small text-center text-muted my-5">
            <em>The above charts are not real-time...</em>
          </p>
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

  <?php
  }else {
    header('location: login.php');
  }

  ?>
