<?php

  require ('load.php');


  $PAGE_TITLE  = "Products";
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
              <li class="breadcrumb-item active">Products</li>
            </ol>
            <!-- Page Content -->
            <!-- DataTables Example -->
            <div class="card mb-3">
              <div class="card-header bg-primary text-white">
                <i class="fa fa-table"></i>
                Products
                <a href="#" class="text-white" data-toggle="modal" data-target="#addProductModal">
                  <span class="float-right">
                    <i class="fa fa-plus"></i>
                    Add New Product
                  </span>
                </a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>PID</th>
                        <th>Product Name</th>
                        <th>Product Type</th>
                        <th>Brand</th>
                        <th>In-stock</th>
                        <th>Cost/item</th>
                        <th>Inventory Worth</th>
                        <th>Revenue Generated</th>
                        <th>Vendor</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>PID</th>
                        <th>Product Name</th>
                        <th>Product Type</th>
                        <th>Brand</th>
                        <th>In-stock</th>
                        <th>Cost/item</th>
                        <th>Inventory Worth</th>
                        <th>Revenue Generated</th>
                        <th>Vendor</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <tr>
                        <td>054681</td>
                        <td>A4-Tech Mouse M60</td>
                        <td>Mouse &amp; Pointing Devices</td>
                        <td>A4-Tech</td>
                        <td>6</td>
                        <td>Rs840</td>
                        <td>Rs5040</td>
                        <td>Rs1370</td>
                        <td>Anees Ahmad</td>
                      </tr>
                      <tr>
                        <td>054681</td>
                        <td>A4-Tech Mouse M60</td>
                        <td>Mouse &amp; Pointing Devices</td>
                        <td>A4-Tech</td>
                        <td>6</td>
                        <td>Rs840</td>
                        <td>Rs5040</td>
                        <td>Rs1370</td>
                        <td>Anees Ahmad</td>
                      </tr>
                      <tr>
                        <td>054681</td>
                        <td>A4-Tech Mouse M60</td>
                        <td>Mouse &amp; Pointing Devices</td>
                        <td>A4-Tech</td>
                        <td>6</td>
                        <td>Rs840</td>
                        <td>Rs5040</td>
                        <td>Rs1370</td>
                        <td>Anees Ahmad</td>
                      </tr>
                      <tr>
                        <td>054681</td>
                        <td>A4-Tech Mouse M60</td>
                        <td>Mouse &amp; Pointing Devices</td>
                        <td>A4-Tech</td>
                        <td>6</td>
                        <td>Rs840</td>
                        <td>Rs5040</td>
                        <td>Rs1370</td>
                        <td>Anees Ahmad</td>
                      </tr>
                      <tr>
                        <td>054681</td>
                        <td>A4-Tech Mouse M60</td>
                        <td>Mouse &amp; Pointing Devices</td>
                        <td>A4-Tech</td>
                        <td>6</td>
                        <td>Rs840</td>
                        <td>Rs5040</td>
                        <td>Rs1370</td>
                        <td>Anees Ahmad</td>
                      </tr>
                      <tr>
                        <td>054681</td>
                        <td>A4-Tech Mouse M60</td>
                        <td>Mouse &amp; Pointing Devices</td>
                        <td>A4-Tech</td>
                        <td>6</td>
                        <td>Rs840</td>
                        <td>Rs5040</td>
                        <td>Rs1370</td>
                        <td>Anees Ahmad</td>
                      </tr>
                      <tr>
                        <td>054681</td>
                        <td>A4-Tech Mouse M60</td>
                        <td>Mouse &amp; Pointing Devices</td>
                        <td>A4-Tech</td>
                        <td>6</td>
                        <td>Rs840</td>
                        <td>Rs5040</td>
                        <td>Rs1370</td>
                        <td>Anees Ahmad</td>
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
