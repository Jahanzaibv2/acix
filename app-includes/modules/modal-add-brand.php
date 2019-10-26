<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Modal Add Brand
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

?>
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
                <textarea name="brand_desc" class="form-control" id="brand_desc" rows="8" cols="80" placeholder="Add some note or description about this brand..."></textarea>
              </div>
              <small class="text-muted"><em>Please double check information before submitting.</em></small>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <input type="submit" name="addBrand" class="btn btn-primary" value="Add Brand">
            </div>
          </form>
        </div>
      </div>
    </div>
