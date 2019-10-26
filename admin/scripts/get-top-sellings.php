<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Get Top Sellings
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

  session_start();

  if (isset($_SESSION['user_id'])) {
    $res = mysqli_query($appconnect, "SELECT `product_id`, COUNT(*) AS `count` FROM `sales` WHERE `month`='$thisMonth' AND `year`='$thisYear' GROUP BY `product_id`");
    $row = mysqli_fetch_array($res);

    $soldItems = $row['count'];
    $topSellingProductID = $row['product_id'];

    $res = mysqli_query($appconnect, "SELECT * FROM `products` WHERE id='$topSellingProductID'");
    $row = mysqli_fetch_array($res);

    $topSellingProduct = $row['name'];
  } else {
    // Redirecting to for further redirection
    header('location: /');
  }
