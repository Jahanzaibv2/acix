<?php

  require ('load.php');


  $PAGE_TITLE  = "Sales Reports";
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
        <li class="nav-item">
          <a class="nav-link" href="retail-dashboard.php">
            <i class="fa fa-fw fa-line-chart"></i>
            <span>Retail Dashboard</span>
          </a>
        </li>
        <li class="nav-item active">
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
              <li class="breadcrumb-item active">Sales Reports</li>
            </ol>
            <!-- Page Content -->
            <!-- Area Chart Example-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-chart-area"></i>
              Area Chart Example</div>
            <div class="card-body">
              <canvas id="myAreaChart" width="100%" height="30"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
          <div class="row">
            <div class="col-lg-8">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fa fa-chart-bar"></i>
                  Bar Chart Example</div>
                <div class="card-body">
                  <canvas id="myBarChart" width="100%" height="50"></canvas>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fa fa-chart-pie"></i>
                  Pie Chart Example</div>
                <div class="card-body">
                  <canvas id="myPieChart" width="100%" height="100"></canvas>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
              </div>
            </div>
          </div>
          <p class="small text-center text-muted my-5">
            <em>More chart examples coming soon...</em>
          </p>
            <hr>
            <p>This is a great starting point for new custom pages.</p>
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
