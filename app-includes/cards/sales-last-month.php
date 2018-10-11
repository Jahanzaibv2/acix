<?php
  require (ABSPATH.'/admin/scripts/get-sales-last-month.php');
?>
<div class="card text-white bg-primary o-hidden h-100">
  <div class="card-header">
    <h1><?php echo $lastMonth; ?></h1>
  </div>
  <div class="card-body">
    <div class="card-body-icon">
      <i class="fa fa-fw fa-money"></i>
    </div>
    <div class="card-text">
      <h1 class="text-center display-3"><strong><?php echo $salesCount; ?><span class="small" style="font-size: 20px;">Rs<?php printf("%.1f", $grossProfit); ?>k</span></strong></h1>
    </div>
  </div>
  <a class="card-footer text-white clearfix small z-1" href="sales-count.php">
    <span class="float-left">View Details</span>
    <span class="float-right">
      <i class="fa fa-angle-right"></i>
    </span>
  </a>
</div>
