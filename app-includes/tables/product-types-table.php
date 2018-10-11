<?php
  include (ABSPATH.'/admin/scripts/get-product-types.php');
?>
<!-- Product Types Table -->
<div class="card mb-3">
  <div class="card-header bg-primary text-white">
    <i class="fa fa-table"></i>
    Product Types
    <a href="#" class="text-white" data-toggle="modal" data-target="#addProductTypeModal">
      <span class="float-right">
        <i class="fa fa-plus"></i>
        Add New Product Type
      </span>
    </a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>PTID</th>
            <th>Product Type</th>
            <th>Description</th>
            <th>Total Products</th>
            <th>Date Created</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>PTID</th>
            <th>Product Type</th>
            <th>Description</th>
            <th>Total Products</th>
            <th>Date Created</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php

            while ($row = mysqli_fetch_array($getProductTypesQuery)) {
              $productTypeID = $row['id'];
              $productTypeName = $row['type'];
              $productTypeDesc = $row['description'];
              $dateCreated = $row['date_created'];



              $countProductsQuery = mysqli_query($appconnect, "SELECT * FROM `products` WHERE `type_id`='$productTypeID'");

              if ($countProductsQuery) {

                $totalProducts = mysqli_num_rows($countProductsQuery);


              }else {
                $totalProducts = 0;
              }
              ?>

              <tr>
                <td><?php echo $productTypeID; ?></td>
                <td><?php echo $productTypeName; ?></td>
                <td><?php echo $productTypeDesc; ?></td>
                <td><?php echo $totalProducts; ?></td>
                <td><?php echo $dateCreated; ?></td>
                <td class="text-center"> <a href="edit-product-types.php?type=<?php echo $productTypeID; ?>">Edit</a> </td>
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
