<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Sales This Month
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

  require (ABSPATH.'/admin/scripts/get-sales-this-month.php');

?>
<div class="card text-white bg-info o-hidden h-100">
  <div class="card-header">
    <h1><?php echo $thisMonth; ?></h1>
  </div>
  <div class="card-body">
    <div class="card-body-icon">
      <i class="fa fa-fw fa-money"></i>
    </div>
    <div class="card-text">
      <h1 class="text-center display-3"><strong><?php echo $salesCount; ?><span class="small" style="font-size: 20px;">Rs<?php printf("%.1f", $grossProfit); ?>k</span></strong></h1>
    </div>
  </div>
  <a class="card-footer text-white clearfix small z-1" href="">
    <span class="float-left">View Details</span>
    <span class="float-right">
      <i class="fa fa-angle-right"></i>
    </span>
  </a>
</div>
