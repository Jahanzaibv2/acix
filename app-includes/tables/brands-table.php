<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 *  Brands Table
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


include (ABSPATH.'/admin/scripts/get-brands.php');


?>
<!-- Brands Table -->
<div class="card mb-3">
  <div class="card-header bg-primary text-white">
    <i class="fa fa-table"></i>
    Product Brands
    <a href="#" class="text-white" data-toggle="modal" data-target="#addProductBrandModal">
      <span class="float-right">
        <i class="fa fa-plus"></i>
        Add New Brand
      </span>
    </a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>BrandID#</th>
            <th>Brand Name</th>
            <th>Description</th>
            <th>Total Products</th>
            <th>Date Created</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>BrandID#</th>
            <th>Brand Name</th>
            <th>Description</th>
            <th>Total Products</th>
            <th>Date Created</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
            while ($row = mysqli_fetch_array($res)) {
              $brandID = $row['id'];
              $brandName = $row['name'];
              $brandDesc = $row['description'];
              $dateCreated = $row['date_created'];

              $getProductsQuery = mysqli_query($appconnect, "SELECT * FROM `products` WHERE `brand_id`='$brandID'");

              if ($getProductsQuery) {
                $totalProducts = mysqli_num_rows($getProductsQuery);
              }else {
                $totalProducts = 0;
              }

              ?>

              <tr>
                <td><?php echo $brandID; ?></td>
                <td><?php echo $brandName; ?></td>
                <td><?php echo $brandDesc; ?></td>
                <td><?php echo $totalProducts; ?></td>
                <td><?php echo $dateCreated; ?></td>
                <td class="text-center"> <a href="edit-brands.php?brand=<?php echo $brandID; ?>">Edit</a> </td>
              </tr>
              <?php
            }

          ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
</div>
