<?php
  include include (ABSPATH.'/admin/scripts/get-payment-reports.php');
?>
<!-- Payment Reports Table -->
<div class="card mb-3">
  <div class="card-header bg-primary text-white">
    <i class="fa fa-table"></i>
    Payment Reports (Income/Expense Details)
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Description</th>
            <th>Transaction Type</th>
            <th>Account</th>
            <th>Amount</th>
            <th>Date</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Description</th>
            <th>Transaction Type</th>
            <th>Account</th>
            <th>Amount</th>
            <th>Date</th>
          </tr>
        </tfoot>
        <tbody>
          <?php

            while ($row = mysqli_fetch_array($getSalesQuery)) {
              $salesID = $row['id'];
              $productID = $row['product_id'];
              $saleDesc = $row['description'];
              $saleProfit = $row['profit'];
              $saleDate  = $row['date_created'];



              $productNameQuery = mysqli_query($appconnect, "SELECT * FROM `products` WHERE `id`='$productID'");

              if ($productNameQuery) {
                $row = mysqli_fetch_array($productNameQuery);
                $productName = $row['name'];
                $productPrice = $row['price'];
                $saleDesc = "Sold $productName";

                $amount = $productPrice + $saleProfit;
              }else {
                $productName = 'no products found for this sale';
              }
              ?>

              <tr>
                <td><?php echo $saleDesc; ?></td>
                <td class="text-primary">Income</td>
                <td>Store Account</td>
                <td><?php echo (number_format($amount)); ?></td>
                <td><?php echo $saleDate; ?></td>
              </tr>
              <?php
            }



              while ($row = mysqli_fetch_array($getExpensesQuery)) {
                $expenseID = $row['id'];
                $expenseAmount = $row['expense'];
                $expenseAccountID = $row['expense_acc_id'];
                $expenseDesc = $row['description'];
                $expenseDate = $row['date_created'];


                $expenseAccountQuery = mysqli_query($appconnect, "SELECT * FROM `expense_accounts` WHERE `id`='$expenseAccountID'");

                if ($expenseAccountQuery) {
                  $row = mysqli_fetch_array($expenseAccountQuery);
                  $expenseAccount = $row['account_title'];
                }else {
                  $expenseAccount = 'no accounts found for this expense';
                }
                ?>

                <tr>
                  <td><?php echo $expenseDesc; ?></td>
                  <td class="text-danger">Expense</td>
                  <td><?php echo $expenseAccount; ?></td>
                  <td><?php echo (number_format($expenseAmount)); ?></td>
                  <td><?php echo $expenseDate; ?></td>
                </tr>
                <?php
              }


          ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted"><?php echo $thisMonth; ?> | <a href="?month=<?php echo $prevMonth; ?>&year=2018"><?php echo $prevMonth; ?></a> | <a href="?year=2018">All 2018</a> </div>
</div>
