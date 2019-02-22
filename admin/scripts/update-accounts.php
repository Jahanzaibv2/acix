<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Update Accounts
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

  if (isset($_POST['update-account'])) {
    $accountID   = mysqli_real_escape_string($appconnect, $_POST['accountID']);
    $accountTitle = mysqli_real_escape_string($appconnect, $_POST['accountTitle']);
    $accountDesc = mysqli_real_escape_string($appconnect, $_POST['accountDesc']);

    mysqli_query($appconnect, "UPDATE `expense_accounts` SET
                 `account_title` = '$accountTitle',
                 `description` = '$accountDesc',
                 `last_updated` = current_timestamp() WHERE `expense_accounts`.`id` = '$accountID' ");
  }
