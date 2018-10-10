<?php
  include include (ABSPATH.'/admin/scripts/get-sales.php');
?>
<!-- Sales Records Table : Last 30 Days -->
<div class="card mb-3">
  <div class="card-header bg-primary text-white">
    <i class="fa fa-table"></i>
    Recorded Sales in Last 30 Days
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
            <th>Product</th>
            <th>Description</th>
            <th>In-Stock</th>
            <th>Price</th>
            <th>Profit</th>
            <th>Date</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Product</th>
            <th>Description</th>
            <th>In-Stock</th>
            <th>Price</th>
            <th>Profit</th>
            <th>Date</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
            while ($row = mysqli_fetch_array($res)) {
              $invoiceID = $row['id'];
              $productID = $row['product_id'];
              $saleDesc = $row['description'];
              $saleProfit = $row['profit'];
              $saleDate       = $row['date_created'];

              $productNameQuery = mysqli_query($appconnect, "SELECT * FROM `products` WHERE `id`='$productID'");

              if ($productNameQuery) {
                $row = mysqli_fetch_array($productNameQuery);
                $productName = $row['name'];
                $stockValue = $row['stock'];
                $productPrice      = $row['price'];
              }else {
                $productName = 'no product record found';
              }
              ?>

              <tr>
                <td><?php echo $productName; ?></td>
                <td><?php echo $saleDesc; ?></td>
                <td class="<?php if ($stockValue <= 3) { echo 'text-danger'; }else { echo 'text-primary'; } ?>"><?php echo $stockValue; ?></td>
                <td>Rs<?php echo(number_format($productPrice));  ?></td>
                <td class="text-primary">Rs<?php echo(number_format($saleProfit));  ?></td>
                <td><?php echo $saleDate; ?></td>
              </tr>
              <?php
            }

          ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted">Updated <?php echo $saleDate; ?></div>
</div>
