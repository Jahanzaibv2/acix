<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Short Items
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


  $res = mysqli_query($appconnect, "SELECT * FROM `products` WHERE `stock`<=3");
  $shortItemsCount = mysqli_num_rows($res);


  ?>
              <div class="card text-white bg-dark o-hidden h-100">
                <div class="card-header">
                  <h1>Short Items</h1>
                  <small class="float-left">Includes short items</small>
                </div>
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-fw fa-tags"></i>
                  </div>
                  <div class="card-text">
                    <h1 class="text-center display-3"><strong><?php echo $shortItemsCount; ?></strong></h1>
                  </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="short-items.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                </a>
              </div>
