<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Get Accounts
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

  $res = mysqli_query($appconnect, "SELECT * FROM `expense_accounts`");

} else {
      // Redirecting to for further redirection
      header('location: /');
    }
?>
