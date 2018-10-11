<?php
session_start();

  if (isset($_SESSION['user_id'])) {

      require ('load.php');


      $PAGE_TITLE  = "Home";
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
