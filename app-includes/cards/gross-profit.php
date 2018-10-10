<?php

  include (ABSPATH.'/admin/scripts/get-gross-profit.php');

?>
  <div class="card o-hidden h-100">
    <div class="card-header bg-warning text-white">
      <h1>Gross Profit</h1>
    </div>
    <div class="card-body bg-warning text-white">
      <div class="card-body-icon text-white">
        <i class="fa fa-fw fa-shopping-cart"></i>
      </div>
      <div class="card-text text-center">
        <span class="display-3"><strong><?php printf("%.1f", $grossProfit); ?></strong>k</span>
        <!--
        <small class="text-danger"> <strong>3%<i class="fa fa-arrow-down"></i> </strong></small>
        -->
      </div>
    </div>
    <a class="card-footer clearfix small z-1 bg-warning text-white" href="gross-profit.php">
      <span class="float-left">View Details</span>
      <span class="float-right">
        <i class="fa fa-angle-right"></i>
      </span>
    </a>
  </div>
