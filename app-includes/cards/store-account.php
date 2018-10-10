<?php

  include (ABSPATH.'/admin/scripts/get-store-account-balance.php');

?>
  <div class="card o-hidden h-100">
    <div class="card-header bg-dark text-white">
      <h1>Store Account</h1>
      <small>Shows current balance in your account</small>
    </div>
    <div class="card-body">
      <div class="card-body-icon text-white">
        <i class="fa fa-fw fa-dollar"></i>
      </div>
      <div class="card-text text-center">
        <span class="display-3"><strong><?php printf("%.1f", $balance); ?></strong>k</span>
        <!--
        <small class="text-primary"> <strong>52%<i class="fa fa-arrow-up"></i> </strong></small>
      -->
      </div>
    </div>
    <a class="card-footer clearfix small z-1" href="accounts.php">
      <span class="float-left">Check Expense Accounts</span>
      <span class="float-right">
        <i class="fa fa-angle-right"></i>
      </span>
    </a>
  </div>
