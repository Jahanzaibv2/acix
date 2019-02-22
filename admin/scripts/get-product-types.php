<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Get Product Types
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
    $getProductTypesQuery = mysqli_query($appconnect, "SELECT * FROM `product_types`");
  } else {
    // Redirecting to for further redirection
    header('location: /');
  }
