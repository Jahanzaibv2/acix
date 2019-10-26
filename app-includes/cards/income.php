<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Income
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

  include (ABSPATH.'/admin/scripts/get-income.php');

?>
  <div class="card o-hidden h-100">
    <div class="card-header bg-info text-white">
      <h1>Income</h1>
    </div>
    <div class="card-body bg-info text-white">
      <div class="card-body-icon">
        <i class="fa fa-fw fa-money text-white"></i>
      </div>
      <div class="card-text text-center">
        <span class="display-3"><strong><?php printf("%.1f", $income); ?></strong>k</span>
        <!--
        <small class="text-danger"> <strong>6%<i class="fa fa-arrow-down"></i> </strong></small>
        -->
      </div>
    </div>
    <a class="card-footer bg-info text-white clearfix small z-1" href="revenue.php">
      <span class="float-left">View Details</span>
      <span class="float-right">
        <i class="fa fa-angle-right"></i>
      </span>
    </a>
  </div>
