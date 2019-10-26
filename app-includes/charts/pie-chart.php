<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Pie Chart
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
  <div class="card-header bg-info text-white">
    <i class="fa fa-chart-pie"></i>
    Profit <?php echo $thisYear; ?>
  </div>
  <div class="card-body">
    <canvas id="myPieChart" width="100%" height="100"></canvas>
  </div>
  <div class="card-footer small text-muted">Shows real-time reports</div>
</div>
