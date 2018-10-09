<?php  ?>
    <!-- Add Expense Modal -->
    <div class="modal fade" id="addExpenseModal" tabindex="-1" role="dialog" aria-labelledby="addExpenseModal" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="addExpenseModal">
              <i class="fa fa-dollar"></i>
              Add Expense
            </h5>
            <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form class="" action="" method="post">
            <div class="modal-body">
              <div class="form-group">
                <label>Account</label>
                <select class="form-control text-primary" name="account_id" required>
                  <option disabled selected><sub>Please select a product type</sub></option>
                  <?php
                    $res = mysqli_query($appconnect, "SELECT * FROM `expense_accounts`");

                    while ($row = mysqli_fetch_array($res)) {
                      $account_id = $row['id'];
                      $account_title = $row['account_title'];
                      ?>
                      <option value="<?php echo $account_id; ?>"><?php echo $account_title; ?></option>
                      <?php
                    }
                  ?>
                </select>
                <small class="float-right">Account not listed here? <a href="#" data-toggle="modal" data-target="#addExpenseAccountModal">Add new</a> </small>
              </div>
              <div class="form-group">
                <label for="expense">Amount Spent</label>
                <input type="number" class="form-control" name="expense" id="expense" placeholder="Enter amount spent on this expense..." required>
              </div>
              <div class="form-group">
                <label for="expense_desc">Description <small class="text-muted">(Optional)</small></label>
                <textarea name="expense_desc" class="form-control" id="expense_desc" cols="80" placeholder="Add some note or description about this expense..."></textarea>
              </div>
              <small class="text-muted"><em>Please double check information before submitting.</em></small>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <input type="submit" name="addExpense" class="btn btn-primary" value="Add Expense">
            </div>
          </form>
        </div>
      </div>
    </div>
