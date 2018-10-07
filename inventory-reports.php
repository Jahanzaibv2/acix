<?php

  require ('load.php');


  $PAGE_TITLE  = "Inventory Reports";
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
              <li class="breadcrumb-item active">Inventory Reports</li>
            </ol>
            <!-- Page Content -->
            <!-- DataTables Example -->
            <div class="card mb-3">
              <div class="card-header bg-primary text-white">
                <i class="fa fa-table"></i>
                Inventory Records
                <a href="#" class="text-white" data-toggle="modal" data-target="#addProductModal">
                  <span class="float-right">
                    <i class="fa fa-plus"></i>
                    Add New Products
                  </span>
                </a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>SKU</th>
                        <th>Product Type</th>
                        <th>Product</th>
                        <th>Qty</th>
                        <th>Cost/item</th>
                        <th>Stock Worth</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>SKU</th>
                        <th>Product Type</th>
                        <th>Product</th>
                        <th>Qty</th>
                        <th>Cost/item</th>
                        <th>Stock Worth</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <tr>
                        <td>AUDMICM20</td>
                        <td>Headphones & MICs</td>
                        <td>Audionic MIC AM-20</td>
                        <td class="text-danger">03</td>
                        <td>Rs2100</td>
                        <td>Rs6300</td>
                      </tr>
                      <tr>
                        <td>AUDMICM20</td>
                        <td>Headphones & MICs</td>
                        <td>Audionic MIC AM-20</td>
                        <td class="text-danger">03</td>
                        <td>Rs2100</td>
                        <td>Rs6300</td>
                      </tr>
                      <tr>
                        <td>AUDMICM20</td>
                        <td>Headphones & MICs</td>
                        <td>Audionic MIC AM-20</td>
                        <td class="text-danger">03</td>
                        <td>Rs2100</td>
                        <td>Rs6300</td>
                      </tr>
                      <tr>
                        <td>AUDMICM20</td>
                        <td>Headphones & MICs</td>
                        <td>Audionic MIC AM-20</td>
                        <td class="text-danger">03</td>
                        <td>Rs2100</td>
                        <td>Rs6300</td>
                      </tr>
                      <tr>
                        <td>AUDMICM20</td>
                        <td>Headphones & MICs</td>
                        <td>Audionic MIC AM-20</td>
                        <td class="text-danger">03</td>
                        <td>Rs2100</td>
                        <td>Rs6300</td>
                      </tr>
                      <tr>
                        <td>AUDMICM20</td>
                        <td>Headphones & MICs</td>
                        <td>Audionic MIC AM-20</td>
                        <td class="text-danger">03</td>
                        <td>Rs2100</td>
                        <td>Rs6300</td>
                      </tr>
                      <tr>
                        <td>AUDMICM20</td>
                        <td>Headphones & MICs</td>
                        <td>Audionic MIC AM-20</td>
                        <td class="text-danger">03</td>
                        <td>Rs2100</td>
                        <td>Rs6300</td>
                      </tr>
                      <tr>
                        <td>AUDMICM20</td>
                        <td>Headphones & MICs</td>
                        <td>Audionic MIC AM-20</td>
                        <td class="text-danger">03</td>
                        <td>Rs2100</td>
                        <td>Rs6300</td>
                      </tr>
                      <tr>
                        <td>AUDMICM20</td>
                        <td>Headphones & MICs</td>
                        <td>Audionic MIC AM-20</td>
                        <td class="text-danger">03</td>
                        <td>Rs2100</td>
                        <td>Rs6300</td>
                      </tr>
                      <tr>
                        <td>AUDMICM20</td>
                        <td>Headphones & MICs</td>
                        <td>Audionic MIC AM-20</td>
                        <td class="text-danger">03</td>
                        <td>Rs2100</td>
                        <td>Rs6300</td>
                      </tr>
                      <tr>
                        <td>AUDMICM20</td>
                        <td>Headphones & MICs</td>
                        <td>Audionic MIC AM-20</td>
                        <td class="text-danger">03</td>
                        <td>Rs2100</td>
                        <td>Rs6300</td>
                      </tr>
                      <tr>
                        <td>AUDMICM20</td>
                        <td>Headphones & MICs</td>
                        <td>Audionic MIC AM-20</td>
                        <td class="text-danger">03</td>
                        <td>Rs2100</td>
                        <td>Rs6300</td>
                      </tr>
                      <tr>
                        <td>AUDMICM20</td>
                        <td>Headphones & MICs</td>
                        <td>Audionic MIC AM-20</td>
                        <td class="text-danger">03</td>
                        <td>Rs2100</td>
                        <td>Rs6300</td>
                      </tr>
                      <tr>
                        <td>AUDMICM20</td>
                        <td>Headphones & MICs</td>
                        <td>Audionic MIC AM-20</td>
                        <td class="text-danger">03</td>
                        <td>Rs2100</td>
                        <td>Rs6300</td>
                      </tr>
                      <tr>
                        <td>AUDMICM20</td>
                        <td>Headphones & MICs</td>
                        <td>Audionic MIC AM-20</td>
                        <td class="text-danger">03</td>
                        <td>Rs2100</td>
                        <td>Rs6300</td>
                      </tr>
                      <tr>
                        <td>AUDMICM20</td>
                        <td>Headphones & MICs</td>
                        <td>Audionic MIC AM-20</td>
                        <td class="text-danger">03</td>
                        <td>Rs2100</td>
                        <td>Rs6300</td>
                      </tr>
                      <tr>
                        <td>AUDMICM20</td>
                        <td>Headphones & MICs</td>
                        <td>Audionic MIC AM-20</td>
                        <td class="text-danger">03</td>
                        <td>Rs2100</td>
                        <td>Rs6300</td>
                      </tr>
                      <tr>
                        <td>AUDMICM20</td>
                        <td>Headphones & MICs</td>
                        <td>Audionic MIC AM-20</td>
                        <td class="text-danger">03</td>
                        <td>Rs2100</td>
                        <td>Rs6300</td>
                      </tr>
                      <tr>
                        <td>AUDMICM20</td>
                        <td>Headphones & MICs</td>
                        <td>Audionic MIC AM-20</td>
                        <td class="text-danger">03</td>
                        <td>Rs2100</td>
                        <td>Rs6300</td>
                      </tr>
                      <tr>
                        <td>AUDMICM20</td>
                        <td>Headphones & MICs</td>
                        <td>Audionic MIC AM-20</td>
                        <td class="text-danger">03</td>
                        <td>Rs2100</td>
                        <td>Rs6300</td>
                      </tr>
                      <tr>
                        <td>AUDMICM20</td>
                        <td>Headphones & MICs</td>
                        <td>Audionic MIC AM-20</td>
                        <td class="text-danger">03</td>
                        <td>Rs2100</td>
                        <td>Rs6300</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>

            <p class="small text-center text-muted my-5">
              <em>More table examples coming soon...</em>
            </p>

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
