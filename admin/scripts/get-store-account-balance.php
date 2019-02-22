<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Get Store Account Balance
 * 
 * 
 * 
 * 
 * 
 * @author Rana Jahanzaib <Jahanzaibv2@gmail.com>
 * 
 * @package Acix
 */

  // preventing direct script access
  if (!defined('ABSPATH'))
    exit('No direct script access allowed');


  session_start();

  if (isset($_SESSION['user_id'])) {
    $res = mysqli_query($appconnect, "SELECT * FROM `store_account` WHERE `month`='$thisMonth' AND `year`='$thisYear'");
    $row = mysqli_fetch_array($res);
    $balance = $row['balance'] / 1000;
  } else {
    // Redirecting to / for further redirection
    header('location: /');
  }
