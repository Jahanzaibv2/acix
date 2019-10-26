<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Accounts Table
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
<?php



  include (ABSPATH.'/admin/scripts/get-accounts.php');

?>
          <!-- Accounts Data Table -->
          <div class="card mb-3">
            <div class="card-header bg-primary text-white">
              <i class="fa fa-table"></i>
              Accounts
              <a href="#" class="text-white" data-toggle="modal" data-target="#addExpenseAccountModal">
                <span class="float-right">
                  <i class="fa fa-plus"></i>
                  Add New Expense Account
                </span>
              </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Acc#</th>
                      <th>Account Title</th>
                      <th>Description</th>
                      <th>Expenses</th>
                      <th>Transactions Made</th>
                      <th>Date Created</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Acc#</th>
                      <th>Account Title</th>
                      <th>Description</th>
                      <th>Expenses</th>
                      <th>Transactions Made</th>
                      <th>Date Created</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                      while ($row = mysqli_fetch_array($res)) {
                        $accountID = $row['id'];
                        $accountTitle = $row['account_title'];
                        $accountDesc = $row['description'];
                        $dateCreated = $row['date_created'];

                        $getExpensesQuery = mysqli_query($appconnect, "SELECT * FROM `expenses` WHERE `expense_acc_id`='$accountID' AND `month`='$thisMonth' AND `year`='$thisYear'");

                        $expenses = 0;
                        if ($getExpensesQuery) {
                          while ($row = mysqli_fetch_array($getExpensesQuery)) {
                            $transactionsMade = mysqli_num_rows($getExpensesQuery);
                            $expense = $row['expense'];
                            $totalExpenses +=$expense;
                          }
                        }else {
                          $expenses = 0;
                        }

                        ?>

                        <tr>
                          <td><?php echo $accountID; ?></td>
                          <td><?php echo $accountTitle; ?></td>
                          <td><?php echo $accountDesc; ?></td>
                          <td>Rs<?php echo (number_format($totalExpenses)); ?></td>
                          <td><?php echo $transactionsMade; ?></td>
                          <td><?php echo $dateCreated; ?></td>
                          <td class="text-center"> <a href="edit-accounts.php?account=<?php echo $accountID; ?>">Edit</a> </td>
                        </tr>
                        <?php
                      }

                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
