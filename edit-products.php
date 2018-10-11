<?php

session_start();

  if (isset($_SESSION['user_id'])) {

    require ('load.php');
    require (ABSPATH.'/admin/scripts/getuserinfo.php');
  require (ABSPATH.'/admin/scripts/update-products.php');


  $PAGE_TITLE  = "Edit Products";
  $PAGE_DESC   = "...";
  $PAGE_AUTHOR = "...";

  $productID = mysqli_real_escape_string($appconnect, $_GET['product']);

  $res = mysqli_query($appconnect, "SELECT * FROM `products` WHERE `id`='$productID'");
  $row = mysqli_fetch_array($res);

  $productID = $row['id'];
  $productName    = $row['name'];
  $productTypeID = $row['type_id'];
  $productBrandID = $row['brand_id'];
  $vendorID       = $row['vendor_id'];
  $productPrice   = $row['price'];
  $stockValue     = $row['stock'];
  $productDesc    = $row['description'];
  $lastUpdated = $row['last_updated'];
  $productVisibility = $row['visibility'];

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
          <?php
            require (ABSPATH.APPINC."/modules/breadcrumbs.php");
          ?>
          <h1><?php echo $PAGE_TITLE; ?></h1>
          <hr>
        </div>
        <div class="card card-register mx-auto mt-5">
          <div class="card-header bg-dark text-white"> <i class="fa fa-edit"></i> Edit Product : <?php echo $productName; ?></div>
          <div class="card-body">
            <form class="" action="" method="post">
              <div class="form-group">
                <div class="form-label-group">
                  <input type="text" name="productID" id="productID" class="form-control" value="<?php echo $productID; ?>" hidden>
                  <label for="productID">Product ID</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
                  <input type="text" name="productName" id="productName" class="form-control" placeholder="Product Name" value="<?php echo $productName; ?>" required="required" autofocus>
                  <label for="productName">Product Type Name</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
                  <textarea class="form-control" id="productDesc" placeholder="Product Description" name="productDesc" autofocus><?php echo $productDesc; ?></textarea>
                </div>
              </div>
              <div class="form-group">
                <label>Product Type</label>
                <select class="form-control text-primary" name="productType" required>
                  <option disabled selected><sub>Please select a product type</sub></option>
                  <?php
                    $res = mysqli_query($appconnect, "SELECT * FROM `product_types`");

                    while ($row = mysqli_fetch_array($res)) {
                      $typeID = $row['id'];
                      $productType = $row['type'];
                      ?>
                      <option value="<?php echo $typeID; ?>"><?php echo $productType; ?></option>
                      <?php
                    }
                  ?>
                </select>
                <small class="float-right">Product type not listed here? <a href="#" data-toggle="modal" data-target="#addProductTypeModal">Add new</a> </small>
              </div>
              <div class="form-group">
                <label>Product Brand</label>
                <select class="form-control text-primary" name="productBrand" required>
                  <option disabled selected><sub>Please select a product brand</sub></option>
                  <?php
                    $res = mysqli_query($appconnect, "SELECT * FROM `product_brands`");

                    while ($row = mysqli_fetch_array($res)) {
                      $brandID = $row['id'];
                      $productBrand = $row['name'];
                      ?>
                      <option value="<?php echo $brandID; ?>"><?php echo $productBrand; ?></option>
                      <?php
                    }
                  ?>
                </select>
                <small class="float-right">Products brand not listed here? <a href="#" data-toggle="modal" data-target="#addProductBrandModal">Add new</a> </small>
              </div>
              <div class="form-group">
                <label>Product Vendor</label>
                <select class="form-control text-primary" name="vendor" required>
                  <option disabled selected><sub>Please select a product vendor</sub></option>
                  <?php
                    $res = mysqli_query($appconnect, "SELECT * FROM `vendors`");

                    while ($row = mysqli_fetch_array($res)) {
                      $vendorID = $row['id'];
                      $vendorName = $row['name'];
                      ?>
                      <option value="<?php echo $vendorID; ?>"><?php echo $vendorName; ?></option>
                      <?php
                    }
                  ?>
                </select>
                <small class="float-right">Product vendor not listed here? <a href="#" data-toggle="modal" data-target="#addProductVendorModal">Add new</a> </small>
              </div>
              <div class="form-group">
                <label for="stock">Product Price</label>
                <input type="number" class="form-control" name="productPrice" placeholder="Enter product price..." value="<?php echo $productPrice; ?>" required>
              </div>
              <div class="form-group">
                <label for="stock">Product Stock <small>(How many products are you adding in stock?)</small> </label>
                <input type="number" class="form-control" name="stock" id="stock" placeholder="Enter number of items..." required>
              </div>
              <input type="submit" name="update-product" class="btn btn-primary btn-block" href="" value="Update">
            </form>
            <br>
            <div class="card-footer bg-white">
              <small class="text-muted"><em>This record was last updated on <?php echo $lastUpdated; ?></em></small>
            </div>
          </div>
        </div>
        <br>
        <br>
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
      include (ABSPATH.APPINC."/modules/footer-scripts.php");
    ?>
    </body>
  </html>

  <?php
  }else {
    header('location: login.php');
  }

  ?>
