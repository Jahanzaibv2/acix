<?php

  require ('load.php');


  $PAGE_TITLE  = "Sales";
  $PAGE_DESC   = "...";
  $PAGE_AUTHOR = "..."

?>
<!DOCTYPE html>
<html lang="en">
<?php require (ABSPATH.APPINC."/page-unit/head.php"); ?>
  <body id="page-top">
<?php require (ABSPATH.APPINC."/page-unit/nav.php"); ?>
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-home"></i>
            <span>Home</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="retail-dashboard.php">
            <i class="fa fa-fw fa-line-chart"></i>
            <span>Retail Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sales-reports.php">
            <i class="fa fa-fw fa-bar-chart"></i>
            <span>Sales Reports</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inventory-reports.php">
            <i class="fa fa-fw fa-tags"></i>
            <span>Inventory Reports</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="payment-reports.php">
            <i class="fa fa-fw fa-money"></i>
            <span>Payment Reports</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="sales.php">
            <i class="fa fa-fw fa-table"></i>
            <span>Check Sales</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="" data-toggle="modal" data-target="#addSaleModal">
            <i class="fa fa-fw fa-plus"></i>
            <span>Record New Sale</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="" data-toggle="modal" data-target="#addProductModal">
            <i class="fa fa-fw fa-tags"></i>
            <span>Add New Product</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="product-brands.php">
            <i class="fa fa-fw fa-industry"></i>
            <span>Product Brands</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="product-vendors.php">
            <i class="fa fa-fw fa-users"></i>
            <span>Product Vendors</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-folder"></i>
            <span>
              Manage Products
              <i class="float-right fa fa-angle-down"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Inventory</h6>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductModal"> <i class="fa fa-plus"></i> Add Product</a>
            <a class="dropdown-item" href="products.php"> <i class="fa fa-tags"></i> All Products</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Product Types</h6>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductTypeModal"> <i class="fa fa-plus"></i> Add New Type</a>
            <a class="dropdown-item" href="product-types.php"> <i class="fa fa-tags"></i> Product Types</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Dealers &amp; Brands</h6>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductVendorModal"> <i class="fa fa-user"></i> Add New Vendor</a>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductBrandModal"> <i class="fa fa-industry"></i> Add New Brand</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="history.php">
            <i class="fa fa-fw fa-calendar"></i>
            <span>History</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="export-record.php">
            <i class="fa fa-fw fa-external-link"></i>
            <span>Export Record</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="general-settings.php">
            <i class="fa fa-fw fa-cogs"></i>
            <span>General Settings</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="help.php">
            <i class="fa fa-fw fa-life-ring"></i>
            <span>Help</span></a>
        </li>
      </ul>
          <div id="content-wrapper">
            <div class="container-fluid">
              <!-- Breadcrumbs-->
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item active">Sales</li>
              </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header bg-primary text-white">
              <i class="fa fa-table"></i>
              Recorded Sales
              <a href="#" class="text-white" data-toggle="modal" data-target="#addSaleModal">
                <span class="float-right">
                  <i class="fa fa-plus"></i>
                  Add New Entry
                </span>
              </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>INVOICE-ID</th>
                      <th>Product</th>
                      <th>In-Stock</th>
                      <th>Price</th>
                      <th>Date</th>
                      <th>Profit</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>INVOICE-ID</th>
                      <th>Product</th>
                      <th>In-Stock</th>
                      <th>Price</th>
                      <th>Date</th>
                      <th>Profit</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>#456488</td>
                      <td>Audionic MIC AM-20</td>
                      <td class="text-danger">03</td>
                      <td>Rs2100</td>
                      <td>04/10/2018</td>
                      <td class="text-primary">Rs80</td>
                    </tr>
                    <tr>
                      <td>#451188</td>
                      <td>USB Audio Controller</td>
                      <td class="text-primary">12</td>
                      <td>Rs200</td>
                      <td>04/10/2018</td>
                      <td class="text-primary">Rs25</td>
                    </tr>
                    <tr>
                      <td>#456488</td>
                      <td>Audionic MIC AM-20</td>
                      <td class="text-danger">03</td>
                      <td>Rs2100</td>
                      <td>04/10/2018</td>
                      <td class="text-primary">Rs80</td>
                    </tr>
                    <tr>
                      <td>#456488</td>
                      <td>Audionic MIC AM-20</td>
                      <td class="text-danger">03</td>
                      <td>Rs2100</td>
                      <td>04/10/2018</td>
                      <td class="text-primary">Rs80</td>
                    </tr>
                    <tr>
                      <td>#456488</td>
                      <td>Audionic MIC AM-20</td>
                      <td class="text-danger">03</td>
                      <td>Rs2100</td>
                      <td>04/10/2018</td>
                      <td class="text-primary">Rs80</td>
                    </tr>
                    <tr>
                      <td>#456488</td>
                      <td>Audionic MIC AM-20</td>
                      <td class="text-danger">03</td>
                      <td>Rs2100</td>
                      <td>04/10/2018</td>
                      <td class="text-primary">Rs80</td>
                    </tr>
                    <tr>
                      <td>#456488</td>
                      <td>Audionic MIC AM-20</td>
                      <td class="text-danger">03</td>
                      <td>Rs2100</td>
                      <td>04/10/2018</td>
                      <td class="text-primary">Rs80</td>
                    </tr>
                    <tr>
                      <td>#456488</td>
                      <td>Audionic MIC AM-20</td>
                      <td class="text-danger">03</td>
                      <td>Rs2100</td>
                      <td>04/10/2018</td>
                      <td class="text-primary">Rs80</td>
                    </tr>
                    <tr>
                      <td>#456488</td>
                      <td>Audionic MIC AM-20</td>
                      <td class="text-danger">03</td>
                      <td>Rs2100</td>
                      <td>04/10/2018</td>
                      <td class="text-primary">Rs80</td>
                    </tr>
                    <tr>
                      <td>#456488</td>
                      <td>Audionic MIC AM-20</td>
                      <td class="text-danger">03</td>
                      <td>Rs2100</td>
                      <td>04/10/2018</td>
                      <td class="text-primary">Rs80</td>
                    </tr>
                    <tr>
                      <td>#456488</td>
                      <td>Audionic MIC AM-20</td>
                      <td class="text-danger">03</td>
                      <td>Rs2100</td>
                      <td>04/10/2018</td>
                      <td class="text-primary">Rs80</td>
                    </tr>
                    <tr>
                      <td>#456488</td>
                      <td>Audionic MIC AM-20</td>
                      <td class="text-danger">03</td>
                      <td>Rs2100</td>
                      <td>04/10/2018</td>
                      <td class="text-primary">Rs80</td>
                    </tr>
                    <tr>
                      <td>#456488</td>
                      <td>Audionic MIC AM-20</td>
                      <td class="text-danger">03</td>
                      <td>Rs2100</td>
                      <td>04/10/2018</td>
                      <td class="text-primary">Rs80</td>
                    </tr>
                    <tr>
                      <td>#456488</td>
                      <td>Audionic MIC AM-20</td>
                      <td class="text-danger">03</td>
                      <td>Rs2100</td>
                      <td>04/10/2018</td>
                      <td class="text-primary">Rs80</td>
                    </tr>
                    <tr>
                      <td>#456488</td>
                      <td>Audionic MIC AM-20</td>
                      <td class="text-danger">03</td>
                      <td>Rs2100</td>
                      <td>04/10/2018</td>
                      <td class="text-primary">Rs80</td>
                    </tr>
                    <tr>
                      <td>#456488</td>
                      <td>Audionic MIC AM-20</td>
                      <td class="text-danger">03</td>
                      <td>Rs2100</td>
                      <td>04/10/2018</td>
                      <td class="text-primary">Rs80</td>
                    </tr>
                    <tr>
                      <td>#456488</td>
                      <td>Audionic MIC AM-20</td>
                      <td class="text-danger">03</td>
                      <td>Rs2100</td>
                      <td>04/10/2018</td>
                      <td class="text-primary">Rs80</td>
                    </tr>
                    <tr>
                      <td>#456488</td>
                      <td>Audionic MIC AM-20</td>
                      <td class="text-danger">03</td>
                      <td>Rs2100</td>
                      <td>04/10/2018</td>
                      <td class="text-primary">Rs80</td>
                    </tr>
                    <tr>
                      <td>#456488</td>
                      <td>Audionic MIC AM-20</td>
                      <td class="text-danger">03</td>
                      <td>Rs2100</td>
                      <td>04/10/2018</td>
                      <td class="text-primary">Rs80</td>
                    </tr>
                    <tr>
                      <td>#456488</td>
                      <td>Audionic MIC AM-20</td>
                      <td class="text-danger">03</td>
                      <td>Rs2100</td>
                      <td>04/10/2018</td>
                      <td class="text-primary">Rs80</td>
                    </tr>
                    <tr>
                      <td>#456488</td>
                      <td>Audionic MIC AM-20</td>
                      <td class="text-danger">03</td>
                      <td>Rs2100</td>
                      <td>04/10/2018</td>
                      <td class="text-primary">Rs80</td>
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
