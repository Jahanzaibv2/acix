<?php

  require ('load.php');


  $PAGE_TITLE  = "Brands";
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
            <?php
              require (ABSPATH.APPINC."/page-unit/breadcrumbs.php");
              require (ABSPATH.APPINC."/tables/brands-table.php");
            ?>
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
