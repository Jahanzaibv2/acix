<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Demo Improvement Pie Chart
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
    Product Profits Chart
  </div>
  <div class="card-body">
    <canvas id="myPieChart" width="100%" height="100"></canvas>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
