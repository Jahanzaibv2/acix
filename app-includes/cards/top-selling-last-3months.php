<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Top Selling Last 3 Months
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
<div class="card mb-3">
  <div class="card-header bg-dark text-white">
    <i class="fa fa-chart-pie"></i>
    Top Selling Products Last 3 Months
  </div>
  <div class="card-body">
    <canvas id="myPieChart3Months" width="100%" height="100"></canvas>
  </div>
  <div class="card-footer small text-muted">Updated 2s ago</div>
</div>
