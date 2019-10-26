<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Products Table
 * 
 * 
 * 
 * 
 * 
 * @author Rana Jahanzaib <iam@ranajahanzaib.com>
 * 
 * @package Acix
 */

  // preventing direct script access
  if (!defined('ABSPATH'))
    exit('No direct script access allowed');


include (ABSPATH.'/admin/scripts/get-products.php');

?>
<!-- Products Table -->
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
            <th>Stock Worth</th>
            <th>Vendor</th>
            <th>Action</th>
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
            <th>Stock Worth</th>
            <th>Vendor</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
            while ($row = mysqli_fetch_array($res)) {
              $productID = $row['id'];
              $productTypeID = $row['id'];
              $productName = $row['name'];
              $productBrandID     = $row['brand_id'];
              $productVendorID    = $row['vendor_id'];
              $stockValue  = $row['stock'];
              $productPrice = $row['price'];
              $productDesc = $row['description'];
              $dateCreated = $row['date_created'];
              $lastUpdated = $row['last_updated'];

              $stockWorth = $stockValue * $productPrice;

              $productTypeQuery = mysqli_query($appconnect, "SELECT * FROM `product_types` WHERE `id`='$productTypeID'");
              $productBrandQuery = mysqli_query($appconnect, "SELECT * FROM `product_brands` WHERE `id`='$productBrandID'");
              $productVendorQuery = mysqli_query($appconnect, "SELECT * FROM `vendors` WHERE `id`='$productVendorID'");

              if ($productTypeQuery) {
                $row = mysqli_fetch_array($productTypeQuery);
                $productTypeID = $row['id'];
                $productTypeName = $row['type'];
              }else {
                $productTypeName = 'no product type found';
              }

              if ($productBrandQuery) {
                $row = mysqli_fetch_array($productBrandQuery);
                $productBrandName = $row['name'];
              }else {
                $productBrandName = 'no brand found for this product';
              }

              if ($productVendorQuery) {
                $row = mysqli_fetch_array($productVendorQuery);
                $productVendorName = $row['name'];
              }else {
                $productVendorName = 'no vendor found for this product';
              }
              ?>

              <tr>
                <td><?php echo $productID; ?></td>
                <td><?php echo $productName; ?></td>
                <td><?php echo $productTypeName; ?></td>
                <td><?php echo $productBrandName; ?></td>
                <td class="<?php if ($stockValue<=3) {
                  echo 'text-danger';
                } ?>"><?php echo $stockValue; ?></td>
                <td>Rs<?php echo (number_format($productPrice)); ?></td>
                <td>Rs<?php echo (number_format($stockWorth)); ?></td>
                <td><?php echo $productVendorName; ?></td>
                <td class="text-center"><a href="edit-products.php?product=<?php echo $productID; ?>">Edit</a></a></td>
              </tr>
              <?php
            }

          ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted">Excludes <a href="?visibility=0">hidden</a> product(s)</div>
</div>
