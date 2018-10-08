<?php
  if (isset($_POST['addProduct'])) {
    $typeID = mysqli_real_escape_string($appconnect, $_POST['product_type']);
    $brandID = mysqli_real_escape_string($appconnect, $_POST['product_brand']);
    $vendorID = mysqli_real_escape_string($appconnect, $_POST['vendor']);
    $productName = mysqli_real_escape_string($appconnect, $_POST['product_name']);
    $productPrice = mysqli_real_escape_string($appconnect, $_POST['product_price']);
    $stock = mysqli_real_escape_string($appconnect, $_POST['stock']);
    $paymentOption = mysqli_real_escape_string($appconnect, $_POST['payment_option']);
    $productDesc = mysqli_real_escape_string($appconnect, $_POST['product_desc']);

    $thisMonth = date('FY');
    $prevMonth = date('FY', strtotime("last month"));


    $res = mysqli_query($appconnect, "SELECT * FROM `products` WHERE `name`='$productName'");
    $row = mysqli_fetch_array($res);

    if ((mysqli_num_rows($res))>0) {
      $ADD_PRODUCT_ERROR = 1;
      $ADD_ERROR_MSG = "<a href='' class='no-text-decoration text-danger' data-toggle='modal' data-target='#queryStatus'>ADD_PRODUCT_ERROR</a>";
    }else {
      // Adding product
      mysqli_query($appconnect, "INSERT INTO `products` (
                                              `id`,
                                              `type_id`,
                                              `brand_id`,
                                              `vendor_id`,
                                              `name`,
                                              `price`,
                                              `stock`,
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
                                              '$stock',
                                              '$productDesc',
                                              '1',
                                              current_timestamp(),
                                              NULL)"
                                            );

      // Verifies if data is inserted and deducts amount from Store Account if requested
      $res = mysqli_query($appconnect, "SELECT * FROM `products` WHERE `name`='$productName'");
      if ((mysqli_num_rows($res))>0) {
        if ($paymentOption == "store_account") {
          $res = mysqli_query($appconnect, "SELECT * FROM `store_account` WHERE `month`='$thisMonth'");

          // Checks the availability of record for this month
          if ((mysqli_num_rows($res)) != 1) {

            // Creates record if not exists. This query helps creating new table data for new month

            mysqli_query($appconnect, "INSERT INTO `store_account` (
                                                    `id`,
                                                    `balance`,
                                                    `month`,
                                                    `income`,
                                                    `expense`,
                                                    `date_created`
                                                  ) VALUES (
                                                    NULL,
                                                    '0',
                                                    '$thisMonth',
                                                    '0',
                                                    '0',
                                                    current_timestamp())"
                                                  );

              // Gets Data from previous month and updates balance for this month.
              $pre = mysqli_query($appconnect, "SELECT * FROM `store_account` WHERE `month`='$prevMonth'");
              $row = mysqli_fetch_array($pre);

              if ((mysqli_num_rows($pre))>0) {
                $balance = $row['balance'];
                $income = $row['income'];
                $expense = $row['expense'];

                mysqli_query($appconnect, "UPDATE `store_account` SET
                                                   `balance` = '$balance',
                                                   `income` = '0',
                                                   `expense` = '0'
                                                   WHERE `store_account`.`month` = '$thisMonth'"
                                                 );

              }

          }

          // Fetches data for current month
          $res = mysqli_query($appconnect, "SELECT * FROM `store_account` WHERE `month`='$thisMonth'");
          $row = mysqli_fetch_array($res);
          $balance = $row['balance'];
          $income = $row['income'];
          $expense = $row['expense'];

          // Sets updated data
          $newBalance = $balance - ($productPrice * $stock);
          $newExpense = $expense + ($productPrice * $stock);

          // Updates data for current month
          mysqli_query($appconnect, "UPDATE `store_account` SET
                                             `balance` = '$newBalance',
                                             `income` = '$income',
                                             `expense` = '$newExpense'
                                             WHERE `store_account`.`month` = '$thisMonth'"
                                           );

        }
      }
    }
  }
?>
