<?php

  require ('load.php');


  $PAGE_TITLE  = "Vendors";
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
              <li class="breadcrumb-item active">Product Vendors</li>
            </ol>
            <!-- Page Content -->
            <!-- DataTables Example -->
            <div class="card mb-3">
              <div class="card-header bg-primary text-white">
                <i class="fa fa-table"></i>
                Product Vendors
                <a href="#" class="text-white" data-toggle="modal" data-target="#addProductVendorModal">
                  <span class="float-right">
                    <i class="fa fa-plus"></i>
                    Add New Vendor
                  </span>
                </a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Vendor ID</th>
                        <th>Vendor Name</th>
                        <th>Phone</th>
                        <th>Products</th>
                        <th>Total Products Qty</th>
                        <th>Revenue Generated</th>
                        <th>Inventory Worth</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Vendor ID</th>
                        <th>Vendor Name</th>
                        <th>Phone</th>
                        <th>Products</th>
                        <th>Total Products Qty</th>
                        <th>Revenue Generated</th>
                        <th>Inventory Worth</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <tr>
                        <td>054681</td>
                        <td>Aness Ahmad</td>
                        <td>555-555-555</td>
                        <td>7</td>
                        <td>21</td>
                        <td>Rs9310</td>
                        <td>Rs16000</td>
                      </tr>
                      <tr>
                        <td>054682</td>
                        <td>Faisal Hayat</td>
                        <td>555-555-555</td>
                        <td>3</td>
                        <td>8</td>
                        <td>Rs7000</td>
                        <td>Rs11500</td>
                      </tr>
                      <tr>
                        <td>054683</td>
                        <td>Haider Abbass</td>
                        <td>555-555-555</td>
                        <td>16</td>
                        <td>65</td>
                        <td>Rs9100</td>
                        <td>Rs8600</td>
                      </tr><tr>
                        <td>01</td>
                        <td>Abdul Wahid Babar</td>
                        <td>555-555-555</td>
                        <td>7</td>
                        <td>21</td>
                        <td>Rs9310</td>
                        <td>Rs16000</td>
                      </tr>
                      <tr>
                        <td>02</td>
                        <td>Nouman Aslam</td>
                        <td>555-555-555</td>
                        <td>3</td>
                        <td>8</td>
                        <td>Rs7000</td>
                        <td>Rs11500</td>
                      </tr>
                      <tr>
                        <td>03</td>
                        <td>Zohaib Saleem</td>
                        <td>555-555-555</td>
                        <td>16</td>
                        <td>65</td>
                        <td>Rs9100</td>
                        <td>Rs8600</td>
                      </tr><tr>
                        <td>01</td>
                        <td>Ahmed Bangyal</td>
                        <td>555-555-555</td>
                        <td>7</td>
                        <td>21</td>
                        <td>Rs9310</td>
                        <td>Rs16000</td>
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
