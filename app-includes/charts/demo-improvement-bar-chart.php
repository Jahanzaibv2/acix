<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Demo Improvement Bar Chart
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
  <div class="card-header bg-primary text-white">
    <i class="fa fa-chart-bar"></i>
    Improvements Chart
  </div>
  <div class="card-body">
    <canvas id="myBarChart" width="100%" height="50"></canvas>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
