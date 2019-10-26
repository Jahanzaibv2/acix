<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Sales Count
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

  include (ABSPATH.'/admin/scripts/get-sales-count.php');

?>

                <div class="card text-white bg-primary o-hidden h-100">
                  <div class="card-header">
                    <h1>Sales Count</h1>
                    <small class="float-left">This month</small>
                  </div>
                  <div class="card-body">
                    <div class="card-body-icon">
                      <i class="fa fa-fw fa-money"></i>
                    </div>
                    <div class="card-text">
                      <h1 class="text-center display-3"><strong><?php echo $salesCount; ?></strong></h1>
                    </div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href="sales-count.php">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                      <i class="fa fa-angle-right"></i>
                    </span>
                  </a>
                </div>
