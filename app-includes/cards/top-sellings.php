<?php

  include (ABSPATH.'/admin/scripts/get-top-sellings.php');

?>
  <div class="card text-white bg-danger o-hidden h-100">
    <div class="card-header">
      <h1>Top-Selling</h1>
      <small class="float-left"><strong>Sold <?php echo $soldItems; ?> times this month</strong></small>
    </div>
    <div class="card-body">
      <div class="card-body-icon">
        <i class="fa fa-fw fa-flash"></i>
      </div>
      <div class="card-text">
        <h4 class="text-center mt-4"><?php echo $topSellingProduct; ?></h4>
      </div>
    </div>
    <a class="card-footer text-white clearfix small z-1" href="top-selling.php">
      <span class="float-left">View Details</span>
      <span class="float-right">
        <i class="fa fa-angle-right"></i>
      </span>
    </a>
  </div>
