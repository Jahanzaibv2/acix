<?php
  include (ABSPATH.'/admin/scripts/get-inventory-reports.php');
?>
<!-- Inventory Reports Table -->
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
            <th>PID#</th>
            <th>Product Type</th>
            <th>Product</th>
            <th>Qty</th>
            <th>Cost/item</th>
            <th>Stock Worth</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>PID#</th>
            <th>Product Type</th>
            <th>Product</th>
            <th>Qty</th>
            <th>Cost/item</th>
            <th>Stock Worth</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
            while ($row = mysqli_fetch_array($res)) {
              $productID = $row['id'];
              $productTypeID = $row['type_id'];
              $productName = $row['name'];
              $stockValue = $row['stock'];
              $productPrice = $row['price'];
              $lastUpdated  = $row['last_updated'];

              $stockWorth = $stockValue * $productPrice;

              $productTypeQuery = mysqli_query($appconnect, "SELECT * FROM `product_types` WHERE `id`='$productTypeID'");

              if ($productTypeQuery) {
                $row = mysqli_fetch_array($productTypeQuery);
                $productType = $row['type'];
              }else {
                $productType = 'no product type found';
              }
              ?>

              <tr>
                <td><?php echo $productID; ?></td>
                <td><?php echo $productType; ?></td>
                <td><?php echo $productName; ?></td>
                <td class="<?php if ($stockValue<=3) {
                  echo 'text-danger';
                } ?>"><?php echo $stockValue; ?></td>
                <td>Rs<?php echo (number_format($productPrice)); ?></td>
                <td>Rs<?php echo (number_format($stockWorth)); ?></td>
              </tr>
              <?php
            }

          ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted">Last updated <?php echo $lastUpdated ?></div>
</div>
