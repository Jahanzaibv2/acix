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
          <form class="">
            <div class="modal-body">
              <div class="form-group">
                <label>Select Product</label>
                <select class="form-control text-primary" required>
                  <option disabled selected><sub>Please select a product</sub></option>
                  <option disabled><sub>Speakers &amp; MICs</sub></option>
                  <option>Audionic MIC AM-20</option>
                  <option>USB Sound Card</option>
                  <option>Audionic Headphones AHT-11</option>
                  <option disabled><sub>Mice &amp; Accessories</sub></option>
                  <option>Razer Mousepad</option>
                  <option>Blue Mousepad</option>
                  <option>Apple Mouse Wireless A11</option>
                  <option>DELL Mouse Wireless D232</option>
                  <option>Razer Mousepad</option>
                  <option>Razer Mousepad</option>
                  <option>Razer Mousepad</option>
                  <option>Razer Mousepad</option>
                  <option>Razer Mousepad</option>
                  <option>Razer Mousepad</option>
                  <option>Razer Mousepad</option>
                  <option disabled><sub>Mice &amp; Accessories</sub></option>
                  <option>Razer Mousepad</option>
                  <option>Razer Mousepad</option>
                  <option>Razer Mousepad</option>
                  <option>Razer Mousepad</option>
                  <option>Razer Mousepad</option>
                  <option>Razer Mousepad</option>
                  <option disabled><sub>Mice &amp; Accessories</sub></option>
                  <option>Razer Mousepad</option>
                  <option>Razer Mousepad</option>
                  <option>Razer Mousepad</option>
                </select>
                <small class="float-right">Product not listed here? <a href="#" data-toggle="modal" data-target="#addProductModal">Add new</a> </small>
              </div>
              <div class="form-group">
                <label for="">Product Price</label>
                <input type="number" class="form-control" name="" value="" placeholder="Enter product price here..." required>
              </div>
              <div class="form-group">
                <label for="">Description <small class="text-muted">(Optional)</small></label>
                <textarea name="name" class="form-control" rows="8" cols="80" placeholder="Add some note or description about this sale..."></textarea>
              </div>
              <small class="text-muted"><em>Please double check information before submitting.</em></small>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <input type="submit" class="btn btn-primary" value="Add Sale">
            </div>
          </form>
        </div>
      </div>
    </div>
