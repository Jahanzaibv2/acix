<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Payment Reports Page
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


    $PAGE_TITLE  = "Payment Reports";
    $PAGE_DESC   = "...";
    $PAGE_AUTHOR = "...";

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
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <?php require (ABSPATH.APPINC."/cards/income.php"); ?>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <?php require (ABSPATH.APPINC."/cards/expense.php"); ?>
            </div>
            <div class="col-xl-6 col-sm-12 mb-3">
              <?php require (ABSPATH.APPINC."/cards/store-account.php"); ?>
            </div>
          </div>
          <div class="row">
            <h3></h3>
          </div>
          <?php require (ABSPATH.APPINC."/tables/payment-reports-table.php"); ?>
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
      require (ABSPATH.APPINC.'/modules/modal-add-expense.php');
      require (ABSPATH.APPINC.'/modules/modal-query-status.php');
      include (ABSPATH.APPINC."/modules/footer-scripts.php");
    ?>
  </body>
</html>

<?php
}else {
  header('location: login.php');
}

?>
