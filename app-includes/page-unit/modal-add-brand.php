<?php  ?>
    <!-- Add Brand-->
    <div class="modal fade" id="addProductBrandModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="exampleModalLabel">
              <i class="fa fa-industry"></i>
              Add Product Brand
            </h5>
            <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form class="" action="" method="post">
            <div class="modal-body">
              <div class="form-group">
                <label for="brand_name">Product Brand</label>
                <input type="text" class="form-control" name="brand_name" id="brand_name" placeholder="Enter brand name here..." required>
                <small class="text-muted">Example: Nokia, AMB or MSI etc</small>
              </div>
              <div class="form-group">
                <label for="brand_desc">Description <small class="text-muted">(Optional)</small></label>
                <textarea name="brand_desc" class="form-control" id="brand_desc" rows="8" cols="80" placeholder="Add some note or description about this vendor..."></textarea>
              </div>
              <small class="text-muted"><em>Please double check information before submitting.</em></small>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <input type="submit" name="addBrand" class="btn btn-primary" value="Add Brand">
              <?php
                if (isset($_POST['addBrand'])) {
                  $brandName = mysqli_real_escape_string($appconnect, $_POST['brand_name']);
                  $brandDesc = mysqli_real_escape_string($appconnect, $_POST['brand_desc']);

                  mysqli_query($appconnect, "INSERT INTO `product_brands` (
                                                          `id`,
                                                          `name`,
                                                          `description`,
                                                          `visibility`,
                                                          `date_created`,
                                                          `last_updated`
                                                        ) VALUES (
                                                          NULL,
                                                          '$brandName',
                                                          '$brandDesc',
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
