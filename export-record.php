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
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Home</a>
              </li>
              <li class="breadcrumb-item active">Export Record</li>
            </ol>
            <!-- Page Content -->
            <h1>Export Record</h1>
            <hr>
            <p>Create custom backups or <a href="#">clone</a> everything.</p>
            <div class="row">
              <div class="col-xl-6 col-sm-12 mb-3">
                <a href="#" class="no-text-decorations">
                  <div class="card o-hidden h-100">
                    <div class="card-body bg-info text-white">
                      <div class="card-body-icon">
                        <i class="fa fa-fw fa-clone text-white"></i>
                      </div>
                      <div class="card-text text-center">
                        <h1 class="display-1"><strong>Clone</strong></h1>
                        Extract & Run ./<strong>getinstalled.sh</strong> to bring system live
                      </div>
                    </div>
                  </div>
                </a>
                </div>
                <div class="col-xl-6 col-sm-12 mb-3">
                  <a href="#" class="no-text-decorations">
                    <div class="card o-hidden h-100">
                      <div class="card-body bg-dark text-white">
                        <div class="card-body-icon">
                          <i class="fa fa-fw fa-copy text-white"></i>
                        </div>
                        <div class="card-text text-center">
                          <h1 class="display-1"><strong>Backup</strong></h1>
                          Create custom backups of your data
                        </div>
                      </div>
                    </div>
                  </a>
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
