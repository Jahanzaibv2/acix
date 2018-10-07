<?php  ?>
    <!-- Add Product Modal-->
    <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="exampleModalLabel">
              <i class="fa fa-tag"></i>
              Add New Product
            </h5>
            <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form class="">
            <div class="modal-body">
              <div class="form-group">
                <label>Product Type</label>
                <select class="form-control text-primary" required>
                  <option disabled selected><sub>Please select a product type</sub></option>
                  <option>Speakers</option>
                  <option>Card Readers</option>
                  <option>Headphones & MICs</option>
                  <option>Mousepads</option>
                  <option>Mice &amp; Pointing Devices</option>
                  <option>Display Monitors</option>
                  <option>Keyboards</option>
                  <option>Cables & Chargers</option>
                  <option>Power Supplies</option>
                </select>
                <small class="float-right">Product type not listed here? <a href="#"data-toggle="modal" data-target="#addProductTypeModal">Add new</a> </small>
              </div>
              <div class="form-group">
                <label>Product Brand</label>
                <select class="form-control text-primary" required>
                  <option disabled selected><sub>Please select a product brand</sub></option>
                  <option>Audionic</option>
                  <option>DELL</option>
                  <option>HP</option>
                  <option>Samsung</option>
                  <option>AMB</option>
                  <option>Nokia</option>
                  <option>Razer</option>
                  <option>MSI</option>
                </select>
                <small class="float-right">Products brand not listed here? <a href="#"data-toggle="modal" data-target="#addProductBrandModal">Add new</a> </small>
              </div>
              <div class="form-group">
                <label>Product Vendor</label>
                <select class="form-control text-primary" required>
                  <option disabled selected><sub>Please select a product vendor</sub></option>
                  <option>Haider Abbas</option>
                  <option>Muhammad Faisal</option>
                  <option>Nouman Aslam</option>
                  <option>Anees Ahmad Khan</option>
                  <option>Waleed Ahmad</option>
                  <option>Abdul Wahid</option>
                </select>
                <small class="float-right">Product vendor not listed here? <a href="#"data-toggle="modal" data-target="#addProductVendorModal">Add new</a> </small>
              </div>
              <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" class="form-control" name="" value="" placeholder="Enter product name..." required>
                <small class="text-muted">Be more specific with product names. Make sure its unique.</small>
              </div>
              <div class="form-group">
                <label for="">Product Price <small class="text-muted">(cost/item)</small> </label>
                <input type="number" class="form-control" name="" value="" placeholder="Enter cost of product per item..." required>
              </div>
              <div class="form-group">
                <label for="">Product Stock <small>(How many products are you adding in stock?)</small> </label>
                <input type="number" class="form-control" name="" value="" placeholder="Enter number of items..." required>
                <small class="text-muted">This will be used as product quantity in stock keeping unit.</small>
              </div>
              How are you paying for this product?
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                  Store Account
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                  Other. I don't want to record this epxense.
                </label>
              </div>
              <br>
              <div class="form-group">
                <label for="">Description <small class="text-muted">(Optional)</small></label>
                <textarea name="name" class="form-control" cols="80" placeholder="Add some note or description about this product..."></textarea>
              </div>
              <small class="text-muted"><em>Please double check information before submitting.</em></small>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <input type="submit" class="btn btn-primary" value="Add Product">
            </div>
          </form>
        </div>
      </div>
    </div>
