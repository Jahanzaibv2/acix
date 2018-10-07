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
          <form class="" action="" method="post">
            <div class="modal-body">
              <div class="form-group">
                <label for="vendor_name">Vendor Name</label>
                <input type="text" class="form-control" name="vendor_name" id="vendor_name"  placeholder="Enter vendor's name here..." required>
                <small class="text-muted">Example: Anees Ahmad, Faisal Hayat or Shahzaib Khan etc</small>
              </div>
              <div class="form-group">
                <label for="vendor_phone">Phone Number</label>
                <input type="text" class="form-control" name="vendor_phone" id="vendor_phone" placeholder="Enter vendor's phone number here...">
                <small class="text-muted">Example: 555-665-123</small>
              </div>
              <div class="form-group">
                <label for="vendor_email">Email Address</label>
                <input type="vendor_email" class="form-control" name="vendor_email" id="email" placeholder="Enter vendor's email here...">
                <small class="text-muted">Example: ahmadanees02@gmail.com</small>
              </div>
              <div class="form-group">
                <label for="vendor_desc">Description <small class="text-muted">(Optional)</small></label>
                <textarea name="vendor_desc" id="vendor_desc" class="form-control" rows="8" cols="80" placeholder="Add some note or description about this vendor..."></textarea>
              </div>
              <small class="text-muted"><em>Please double check information before submitting.</em></small>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <input type="submit" name="addVendor" class="btn btn-primary" value="Add Vendor">
              <?php
                if (isset($_POST['addVendor'])) {
                  $vendorName = mysqli_real_escape_string($appconnect, $_POST['vendor_name']);
                  $vendorPhone = mysqli_real_escape_string($appconnect, $_POST['vendor_phone']);
                  $vendorEmail = mysqli_real_escape_string($appconnect, $_POST['vendor_email']);
                  $vendorDesc = mysqli_real_escape_string($appconnect, $_POST['vendor_desc']);

                  mysqli_query($appconnect, "INSERT INTO `vendors` (
                                                          `id`,
                                                          `name`,
                                                          `phone`,
                                                          `email`,
                                                          `description`,
                                                          `visibility`,
                                                          `date_created`,
                                                          `last_updated`
                                                        ) VALUES (
                                                          NULL,
                                                          '$vendorName',
                                                          '$vendorPhone',
                                                          '$vendorEmail',
                                                          '$vendorDesc',
                                                          '1',
                                                          current_timestamp(),
                                                          NULL)"
                                                        );
                }
              ?>
            </div>
          </form>
        </div>
      </div>
    </div>
