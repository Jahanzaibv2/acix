<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Modal Add Product with Diff Name
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
    <!-- Add Product Modal-->
    <div class="modal fade" id="addProductWithDiffNameModal" tabindex="-1" role="dialog" aria-labelledby="addProductWithDiffNameModal" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="addProductWithDiffNameModal">
              <i class="fa fa-tag"></i>
              Add This Product with a different name.
            </h5>
            <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form class="" action="" method="post">
            <div class="modal-body">
              <div class="form-group">
                <label>Product Type</label>
                <select class="form-control text-primary" name="product_type" required>
                  <option value="<?php echo $product_type; ?>"><?php echo $product_type; ?></option>
                </select>
                <small class="float-right">Product type not listed here? <a href="#" data-toggle="modal" data-target="#addProductTypeModal">Add new</a> </small>
              </div>
              <div class="form-group">
                <label>Product Brand</label>
                <select class="form-control text-primary" name="product_brand" required>
                  <option value="<?php echo $brand_id; ?>" selected><?php echo $product_brand; ?></option>
                </select>
                <small class="float-right">Products brand not listed here? <a href="#" data-toggle="modal" data-target="#addProductBrandModal">Add new</a> </small>
              </div>
              <div class="form-group">
                <label>Product Vendor</label>
                <select class="form-control text-primary" name="vendor" required>
                  <option value="<?php echo $vendor_id; ?>"><?php echo $vendor_name; ?></option>
                </select>
                <small class="float-right">Product vendor not listed here? <a href="#" data-toggle="modal" data-target="#addProductVendorModal">Add new</a> </small>
              </div>
              <div class="form-group">
                <label for="product_name">Product Name</label>
                <input type="text" class="form-control" name="product_name" id="product_name" value="<?php echo $productName.' 2'; ?>" placeholder="Enter product name..." required>
                <small class="text-muted">Be more specific with product names. Make sure its unique.</small>
              </div>
              <div class="form-group">
                <label for="product_price">Product Price <small class="text-muted">(cost/item)</small> </label>
                <input type="number" class="form-control" name="product_price" id="product_price" value="<?php echo $productPrice; ?>" placeholder="Enter cost of product per item..." required>
              </div>
              <div class="form-group">
                <label for="sku">Product Stock <small>(How many products are you adding in stock?)</small> </label>
                <input type="number" class="form-control" name="sku" id="sku" value="<?php echo $sku; ?>" placeholder="Enter number of items..." required>
                <small class="text-muted">This will be used as product quantity in stock keeping unit.</small>
              </div>
              How are you paying for this product?
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="payment_option" id="payment_option_storeacc" value="store_account" checked>
                  Store Account
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="payment_option" id="payment_option_none" value="none">
                  I don't want to record this epxense.
                </label>
              </div>
              <br>
              <div class="form-group">
                <label for="product_desc">Description <small class="text-muted">(Optional)</small></label>
                <textarea name="product_desc" class="form-control" cols="80" placeholder="Add some note or description about this product..."><?php echo $productDesc; ?></textarea>
              </div>
              <small class="text-muted"><em>Please double check information before submitting.</em></small>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <input type="submit" name="addProduct" class="btn btn-primary" value="Add Product">
                <?php require (ABSPATH.'/admin/scripts/add-product.php'); ?>
            </div>
          </form>
        </div>
      </div>
    </div>
