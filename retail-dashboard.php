<?php

  require ('load.php');


  $PAGE_TITLE  = "Retail Dashboard";
  $PAGE_DESC   = "...";
  $PAGE_AUTHOR = "..."

?>
<!DOCTYPE html>
<html lang="en">
  <?php require (ABSPATH.APPINC."/page-unit/head.php"); ?>
  <body id="page-top">
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
      <a class="navbar-brand mr-1" href="index.php">Acix Sales Pro</a>
      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fa fa-bars"></i>
      </button>
      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </form>
      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-plus fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addSaleModal"> <i class="fa fa-money"></i> New Sale</a>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductModal"> <i class="fa fa-tag"></i> New Product</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductTypeModal"> <i class="fa fa-tags"></i> New Product Type</a>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductVendorModal"> <i class="fa fa-user"></i> New Product Vendor</a>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductBrandModal"> <i class="fa fa-industry"></i> New Product Brand</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addExpenseAccountModal"> <i class="fa fa-dollar"></i> New Expense Account</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-flash fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="products.php"> <i class="fa fa-tag"></i> All Products</a>
            <a class="dropdown-item" href="product-types.php"> <i class="fa fa-tags"></i> Product Types</a>
            <a class="dropdown-item" href="product-vendors.php"> <i class="fa fa-user"></i> Product Vendors</a>
            <a class="dropdown-item" href="product-brands.php"> <i class="fa fa-industry"></i> Product Brands</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="revenue.php"> <i class="fa fa-money"></i> Revenue</a>
            <a class="dropdown-item" href="improvements.php"> <i class="fa fa-rocket"></i> Improvements</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="accounts.php"> <i class="fa fa-dollar"></i> Accounts</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow ml-3">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="badge badge-warning">9+</span>
            <i class="fa fa-fw fa-bell"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item text-danger no-text-decorations" href="#"> <i class="fa fa-info-circle"></i> You've few blocked products</a>
            <a class="dropdown-item text-danger no-text-decorations" href="#"> <i class="fa fa-info-circle"></i> Another new notification</a>
            <a class="dropdown-item text-danger no-text-decorations" href="#"> <i class="fa fa-info-circle"></i> Another new notification</a>
            <a class="dropdown-item text-danger no-text-decorations" href="#"> <i class="fa fa-info-circle"></i> Another new notification</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="notifications.php">See more notifications</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow ml-3">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <div class="dropdown-header">Rao Ahmed</div>
            <a class="dropdown-item" href="profile.php"> <i class="fa fa-user"></i> Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"> <i class="fa fa-cog"></i> Settings</a>
            <a class="dropdown-item" href="history.php"> <i class="fa fa-line-chart"></i> Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"> <i class="fa fa-power-off"></i> Logout</a>
          </div>
        </li>
      </ul>
    </nav>
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-home"></i>
            <span>Home</span>
          </a>
        </li>
        <li class="nav-item active">
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
        <li class="nav-item">
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
            <li class="breadcrumb-item active">Retail Dashboard</li>
          </ol>
          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-6 col-sm-12 mb-3">
              <div class="card o-hidden h-100">
                <div class="card-header bg-primary text-white">
                  <h1>Revenue</h1>
                </div>
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-fw fa-money text-white"></i>
                  </div>
                  <div class="card-text text-center">
                    <span class="display-3"><strong>13.2</strong>k</span>
                    <small class="text-danger"> <strong>6%<i class="fa fa-arrow-down"></i> </strong></small>
                  </div>
                </div>
                <a class="card-footer clearfix small z-1" href="revenue.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                </a>
              </div>
              </div>
              <div class="col-xl-6 col-sm-12 mb-3">
                <div class="card o-hidden h-100">
                  <div class="card-header bg-warning text-white">
                    <h1>Sales Count</h1>
                  </div>
                  <div class="card-body">
                    <div class="card-body-icon text-white">
                      <i class="fa fa-fw fa-flash"></i>
                    </div>
                    <div class="card-text text-center">
                      <span class="display-3"><strong>17</strong></span>
                      <small class="text-primary"> <strong>26%<i class="fa fa-arrow-up"></i> </strong></small>
                    </div>
                  </div>
                  <a class="card-footer clearfix small z-1" href="sales-count.php">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                      <i class="fa fa-angle-right"></i>
                    </span>
                  </a>
                </div>
                </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-6 col-sm-12 mb-3">
                      <div class="card o-hidden h-100">
                        <div class="card-header bg-primary text-white">
                          <h1>Gross Profit</h1>
                        </div>
                        <div class="card-body">
                          <div class="card-body-icon text-white">
                            <i class="fa fa-fw fa-shopping-cart"></i>
                          </div>
                          <div class="card-text text-center">
                            <span class="display-3"><strong>8.2</strong>k</span>
                            <small class="text-danger"> <strong>3%<i class="fa fa-arrow-down"></i> </strong></small>
                          </div>
                        </div>
                        <a class="card-footer clearfix small z-1" href="gross-profit.php">
                          <span class="float-left">View Details</span>
                          <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                          </span>
                        </a>
                      </div>
                      </div>
                    <div class="col-xl-6 col-sm-12 mb-3">
                      <div class="card o-hidden h-100">
                        <div class="card-header bg-dark text-white">
                          <h1>Account</h1>
                        </div>
                        <div class="card-body">
                          <div class="card-body-icon text-white">
                            <i class="fa fa-fw fa-dollar"></i>
                          </div>
                          <div class="card-text text-center">
                            <span class="display-3"><strong>27.5</strong>k</span>
                            <small class="text-primary"> <strong>52%<i class="fa fa-arrow-up"></i> </strong></small>
                          </div>
                        </div>
                        <a class="card-footer clearfix small z-1" href="accounts.php">
                          <span class="float-left">View Details</span>
                          <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                          </span>
                        </a>
                      </div>
                      </div>
                          </div>
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
