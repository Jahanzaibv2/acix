<?php  ?>
    <!-- Add Vendor -->
    <div class="modal fade" id="addProductVendorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="exampleModalLabel">
              <i class="fa fa-user"></i>
              Add Products Vendor
            </h5>
            <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form class="">
            <div class="modal-body">
              <div class="form-group">
                <label for="">Vendor Name</label>
                <input type="text" class="form-control" name="" value="" placeholder="Enter vendor's name here..." required>
                <small class="text-muted">Example: Anees Ahmad, Faisal Hayat or Shahzaib Khan etc</small>
              </div>
              <div class="form-group">
                <label for="">Phone Number</label>
                <input type="text" class="form-control" name="" value="" placeholder="Enter vendor's phone number here...">
                <small class="text-muted">Example: 555-665-123</small>
              </div>
              <div class="form-group">
                <label for="">Email Address</label>
                <input type="email" class="form-control" name="" value="" placeholder="Enter vendor's email here...">
                <small class="text-muted">Example: ahmadanees02@gmail.com</small>
              </div>
              <div class="form-group">
                <label for="">Description <small class="text-muted">(Optional)</small></label>
                <textarea name="name" class="form-control" rows="8" cols="80" placeholder="Add some note or description about this vendor..."></textarea>
              </div>
              <small class="text-muted"><em>Please double check information before submitting.</em></small>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <input type="submit" class="btn btn-primary" value="Add Vendor">
            </div>
          </form>
        </div>
      </div>
    </div>
