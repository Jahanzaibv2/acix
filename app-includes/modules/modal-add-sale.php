<?php  ?>
    <!-- Add Sale Modal-->
    <div class="modal fade" id="addSaleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="exampleModalLabel">
              <i class="fa fa-money"></i>
              Add New Sale
            </h5>
            <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form class="" action="" method="post">
            <div class="modal-body">
              <div class="form-group">
                <label>Product</label>
                <select class="form-control text-primary" name="product_id" required>
                  <option disabled selected><sub>Please select a product</sub></option>
                  <?php
                    $res = mysqli_query($appconnect, "SELECT * FROM `products`");

                    while ($row = mysqli_fetch_array($res)) {
                      $product_id = $row['id'];
                      $product_name = $row['name'];
                      $product_price = $row['price'];
                      $stockValue =   $row['stock'];
                      ?>
                      <option value="<?php echo $product_id; ?>"
                      <?php
                        if ($stockValue<=3) {
                          echo 'disabled';
                        }
                      ?>>
                      <?php
                        echo $product_name;
                        if ($stockValue<1) {
                          echo " (Out of Stock)";
                        }
                      ?>
                      </option>
                  <?php
                    }
                  ?>
                </select>
                <small class="float-right">Product type not listed here? <a href="#" data-toggle="modal" data-target="#addProductTypeModal">Add new</a> </small>
              </div>
              <div class="form-group">
                <label for="sale_price">Sale Price</label>
                <input type="number" class="form-control" name="sale_price" value="" placeholder="Enter product price here..." required>
              </div>
              <div class="form-group">
                <label for="sale_desc">Description <small class="text-muted">(Optional)</small></label>
                <textarea name="sale_desc" id="sale_desc" class="form-control" rows="8" cols="80" placeholder="Add some note or description about this sale..."></textarea>
              </div>
              <small class="text-muted"><em>Please double check information before submitting.</em></small>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <input type="submit" name="addSale" class="btn btn-primary" value="Add Sale">
            </div>
          </form>
        </div>
      </div>
    </div>
