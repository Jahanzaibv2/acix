<?php
  if (isset($_POST['addProduct'])) {
    $typeID = mysqli_real_escape_string($appconnect, $_POST['product_type']);
    $brandID = mysqli_real_escape_string($appconnect, $_POST['product_brand']);
    $vendorID = mysqli_real_escape_string($appconnect, $_POST['vendor']);
    $productName = mysqli_real_escape_string($appconnect, $_POST['product_name']);
    $productPrice = mysqli_real_escape_string($appconnect, $_POST['product_price']);
    $sku = mysqli_real_escape_string($appconnect, $_POST['sku']);
    $paymentOption = mysqli_real_escape_string($appconnect, $_POST['payment_option']);
    $productDesc = mysqli_real_escape_string($appconnect, $_POST['product_desc']);


    $res = mysqli_query($appconnect, "SELECT * FROM `products` WHERE `name`='$productName'");
    $row = mysqli_fetch_array($res);

    if ((mysqli_num_rows($res))>0) {
      $ADD_PRD_ERROR = "<a href='' class='no-text-decoration text-danger' data-toggle='modal' data-target='#queryStatus'>ADD_PRD_ERROR</a>";
    }else {
      // Adding product
      mysqli_query($appconnect, "INSERT INTO `products` (
                                              `id`,
                                              `type_id`,
                                              `brand_id`,
                                              `vendor_id`,
                                              `name`,
                                              `price`,
                                              `sku`,
                                              `description`,
                                              `visibility`,
                                              `date_created`,
                                              `last_updated`
                                            ) VALUES (
                                              NULL,
                                              '$typeID',
                                              '$brandID',
                                              '$vendorID',
                                              '$productName',
                                              '$productPrice',
                                              '$sku',
                                              '$productDesc',
                                              '1',
                                              current_timestamp(),
                                              NULL)"
                                            );
    }
  }
?>
