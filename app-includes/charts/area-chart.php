<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Area Chart
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
        <!-- Area Chart -->
        <div class="card mb-3">
          <div class="card-header bg-primary text-white">
            <i class="fa fa-chart-area"></i>
            Profit Chart of <?php echo $thisYear; ?>
          </div>
          <div class="card-body">
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
          </div>
          <div class="card-footer small text-muted">Shows real-time reports</div>
        </div>
