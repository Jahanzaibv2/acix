<?php  ?>
    <!-- Query Status-->
    <div class="modal fade" id="queryStatus" tabindex="-1" role="dialog" aria-labelledby="queryStatus" aria-hidden="true">
      <div class="modal-dialog modal-sm vertical-center" role="document">
        <div class="modal-content">
          <div class="modal-header bg-danger text-white">
            <h5 class="modal-title" id="queryStatus">
              Sorry, I can't do that.
            </h5>
            <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            We already have a product with this name.
            <br><br>
            I recommend using a slightly different name for this product.
            This way I can track profit/loss by this product easily.
            That'll be good!
            <br><br>
            <span class="small text-muted">Hey, You can use <strong><?php echo $productName.' Variant 2';?></strong>
            instead of just <strong><?php echo $productName; ?></strong> or may be something else.</span>
          </div>
        </div>
      </div>
    </div>
