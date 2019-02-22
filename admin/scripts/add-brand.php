<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Add Brands
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

  if (isset($_POST['addBrand'])) {
    $brandName = mysqli_real_escape_string($appconnect, $_POST['brand_name']);
    $brandDesc = mysqli_real_escape_string($appconnect, $_POST['brand_desc']);


    $res = mysqli_query($appconnect, "SELECT * FROM `product_brands` WHERE `name`='$brandName'");
    $row = mysqli_fetch_array($res);

    if ((mysqli_num_rows($res))>0) {
      $ADD_BRAND_ERROR = 1;
      $ADD_ERROR_MSG = "<a href='' class='no-text-decoration text-danger' data-toggle='modal' data-target='#queryStatus'>ADD_BRAND_ERROR</a>";
    }else {

      mysqli_query($appconnect, "INSERT INTO `product_brands` (
                                            `id`,
                                            `name`,
                                            `description`,
                                            `visibility`,
                                            `date_created`,
                                            `last_updated`
                                          ) VALUES (
                                            NULL,
                                            '$brandName',
                                            '$brandDesc',
                                            '1',
                                            current_timestamp(),
                                            NULL)"
                                          );
    }
  }
?>
