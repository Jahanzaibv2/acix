<?php

if (!defined('ABSPATH'))
    exit('No direct script access allowed');

  if (isset($_POST['addProductType'])) {
    $productType = mysqli_real_escape_string($appconnect, $_POST['product_type']);
    $productDesc = mysqli_real_escape_string($appconnect, $_POST['product_desc']);

    $res = mysqli_query($appconnect, "SELECT * FROM `product_types` WHERE `type`='$productType'");
    $row = mysqli_fetch_array($res);

    if ((mysqli_num_rows($res))>0) {
      $ADD_PTYPE_ERROR = 1;
      $ADD_ERROR_MSG = "<a href='' class='no-text-decoration text-danger' data-toggle='modal' data-target='#queryStatus'>ADD_PTYPE_ERROR</a>";
    }else {

      mysqli_query($appconnect, "INSERT INTO `product_types` (
                                            `id`, `type`,
                                            `description`,
                                            `visibility`,
                                            `date_created`,
                                            `last_updated`
                                          ) VALUES (
                                            NULL,
                                            '$productType',
                                            '$productDesc',
                                            '1',
                                            current_timestamp(),
                                            NULL)"
                                          );
    }
  }
?>
