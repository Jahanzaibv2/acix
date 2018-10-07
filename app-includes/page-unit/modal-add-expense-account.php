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
          <form class="">
            <div class="modal-body">
              <div class="form-group">
                <label for="">Account Title</label>
                <input type="text" class="form-control" name="" value="" placeholder="Enter account title here..." required>
                <small class="text-muted">Example: Akhtar Hotel, Mian Tea Stall or My Personal Account etc</small>
              </div>
              <div class="form-group">
                <label for="">How much are you depositing?</label>
                <input type="email" class="form-control" name="" value="" placeholder="Enter the amount you are despositing...">
              </div>
              <div class="form-group">
                <label for="">Description <small class="text-muted">(Optional)</small></label>
                <textarea name="name" class="form-control" cols="80" placeholder="Add some note or description about this vendor..."></textarea>
              </div>
              <small class="text-muted"><em>Please double check information before submitting.</em></small>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <input type="submit" class="btn btn-primary" value="Add Account">
            </div>
          </form>
        </div>
      </div>
    </div>
