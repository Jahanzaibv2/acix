<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Add Vendors
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

  if (isset($_POST['addVendor'])) {
    $vendorName = mysqli_real_escape_string($appconnect, $_POST['vendor_name']);
    $vendorPhone = mysqli_real_escape_string($appconnect, $_POST['vendor_phone']);
    $vendorEmail = mysqli_real_escape_string($appconnect, $_POST['vendor_email']);
    $vendorDesc = mysqli_real_escape_string($appconnect, $_POST['vendor_desc']);

    $res = mysqli_query($appconnect, "SELECT * FROM `vendors` WHERE `name`='$vendorName'");
    $row = mysqli_fetch_array($res);

    if ((mysqli_num_rows($res))>0) {
      $ADD_VENDOR_ERROR = 1;
      $ADD_ERROR_MSG = "<a href='' class='no-text-decoration text-danger' data-toggle='modal' data-target='#queryStatus'>ADD_VENDOR_ERROR</a>";
    }else {
      mysqli_query($appconnect, "INSERT INTO `vendors` (
                                            `id`,
                                            `name`,
                                            `phone`,
                                            `email`,
                                            `description`,
                                            `visibility`,
                                            `date_created`,
                                            `last_updated`
                                          ) VALUES (
                                            NULL,
                                            '$vendorName',
                                            '$vendorPhone',
                                            '$vendorEmail',
                                            '$vendorDesc',
                                            '1',
                                            current_timestamp(),
                                            NULL)"
                                          );
    }
  }
?>
