<?php

  require ('load.php');


  $PAGE_TITLE  = "History";
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
            <!-- Page Content -->
            <!-- DataTables Example -->
            <div class="card mb-3">
              <div class="card-header bg-primary text-white">
                <i class="fa fa-table"></i>
                History
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Description</th>
                        <th>Transaction Type</th>
                        <th>Amount</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>#</th>
                        <th>Description</th>
                        <th>Transaction Type</th>
                        <th>Amount</th>
                        <th>Date</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <tr>
                        <td>01</td>
                        <td>Sold A4-Tech Mouse A20</td>
                        <td>Income</td>
                        <td>Rs680</td>
                        <td>06/10/2018</td>
                      </tr>
                      <tr>
                        <td>01</td>
                        <td>Sold A4-Tech Mouse A20</td>
                        <td>Income</td>
                        <td>Rs680</td>
                        <td>06/10/2018</td>
                      </tr>
                      <tr>
                        <td>01</td>
                        <td>Sold A4-Tech Mouse A20</td>
                        <td>Income</td>
                        <td>Rs680</td>
                        <td>06/10/2018</td>
                      </tr>
                      <tr>
                        <td>01</td>
                        <td>Sold A4-Tech Mouse A20</td>
                        <td>Income</td>
                        <td>Rs680</td>
                        <td>06/10/2018</td>
                      </tr>
                      <tr>
                        <td>01</td>
                        <td>Sold A4-Tech Mouse A20</td>
                        <td>Income</td>
                        <td>Rs680</td>
                        <td>06/10/2018</td>
                      </tr>
                      <tr>
                        <td>01</td>
                        <td>Sold A4-Tech Mouse A20</td>
                        <td>Income</td>
                        <td>Rs680</td>
                        <td>06/10/2018</td>
                      </tr>
                      <tr>
                        <td>01</td>
                        <td>Sold A4-Tech Mouse A20</td>
                        <td>Income</td>
                        <td>Rs680</td>
                        <td>06/10/2018</td>
                      </tr>
                      <tr>
                        <td>01</td>
                        <td>Sold A4-Tech Mouse A20</td>
                        <td>Income</td>
                        <td>Rs680</td>
                        <td>06/10/2018</td>
                      </tr>
                      <tr>
                        <td>01</td>
                        <td>Sold A4-Tech Mouse A20</td>
                        <td>Income</td>
                        <td>Rs680</td>
                        <td>06/10/2018</td>
                      </tr>
                      <tr>
                        <td>01</td>
                        <td>Sold A4-Tech Mouse A20</td>
                        <td>Income</td>
                        <td>Rs680</td>
                        <td>06/10/2018</td>
                      </tr>
                      <tr>
                        <td>01</td>
                        <td>Sold A4-Tech Mouse A20</td>
                        <td>Income</td>
                        <td>Rs680</td>
                        <td>06/10/2018</td>
                      </tr>
                      <tr>
                        <td>01</td>
                        <td>Sold A4-Tech Mouse A20</td>
                        <td>Income</td>
                        <td>Rs680</td>
                        <td>06/10/2018</td>
                      </tr>
                      <tr>
                        <td>01</td>
                        <td>Sold A4-Tech Mouse A20</td>
                        <td>Income</td>
                        <td>Rs680</td>
                        <td>06/10/2018</td>
                      </tr>
                      <tr>
                        <td>01</td>
                        <td>Sold A4-Tech Mouse A20</td>
                        <td>Income</td>
                        <td>Rs680</td>
                        <td>06/10/2018</td>
                      </tr>
                      <tr>
                        <td>01</td>
                        <td>Sold A4-Tech Mouse A20</td>
                        <td>Income</td>
                        <td>Rs680</td>
                        <td>06/10/2018</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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
