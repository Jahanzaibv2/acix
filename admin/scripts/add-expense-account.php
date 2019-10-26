<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Add Expense Accounts
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

  if (isset($_POST['addExpenseAccount'])) {
    $accountTitle = mysqli_real_escape_string($appconnect, $_POST['account_title']);
    $accountDesc = mysqli_real_escape_string($appconnect, $_POST['account_desc']);

    $res = mysqli_query($appconnect, "SELECT * FROM `expense_accounts` WHERE `account_title`='$accountTitle'");
    $row = mysqli_fetch_array($res);

    if ((mysqli_num_rows($res))>0) {
      $ADD_EACC_ERROR = 1;
      $ADD_ERROR_MSG = "<a href='' class='no-text-decoration text-danger' data-toggle='modal' data-target='#queryStatus'>ADD_EACC_ERROR</a>";
    }else {
      mysqli_query($appconnect, "INSERT INTO `expense_accounts` (
                                            `id`,
                                            `account_title`,
                                            `description`,
                                            `visibility`,
                                            `date_created`,
                                            `last_updated`
                                          ) VALUES (
                                            NULL,
                                            '$accountTitle',
                                            '$accountDesc',
                                            '1',
                                            current_timestamp(),
                                            NULL)"
                                          );
    }
  }
?>
