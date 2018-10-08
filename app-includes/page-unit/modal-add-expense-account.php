<?php  ?>
    <!-- Add Expense Account Modal -->
    <div class="modal fade" id="addExpenseAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="exampleModalLabel">
              <i class="fa fa-dollar"></i>
              Add Expense Account
            </h5>
            <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form class="" action="" method="post">
            <div class="modal-body">
              <div class="form-group">
                <label for="account_title">Account Title</label>
                <input type="text" class="form-control" id="account_title" name="account_title" placeholder="Enter account title here..." required>
                <small class="text-muted">Example: Akhtar Hotel, Mian Tea Stall or My Personal Account etc</small>
              </div>
              <div class="form-group">
                <label for="account_desc">Description <small class="text-muted">(Optional)</small></label>
                <textarea name="account_desc" class="form-control" id="account_desc" cols="80" placeholder="Add some note or description about this vendor..."></textarea>
              </div>
              <small class="text-muted"><em>Please double check information before submitting.</em></small>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <input type="submit" name="addExpenseAccount" class="btn btn-primary" value="Add Account">
            </div>
          </form>
        </div>
      </div>
    </div>
