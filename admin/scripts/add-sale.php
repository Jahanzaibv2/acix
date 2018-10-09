<?php

  if (isset($_POST['addSale'])) {

    $productID = mysqli_real_escape_string($appconnect, $_POST['product_id']);
    $salePrice = mysqli_real_escape_string($appconnect, $_POST['sale_price']);
    $saleDesc = mysqli_real_escape_string($appconnect, $_POST['sale_desc']);


    // Checks for the product price
    $res = mysqli_query($appconnect, "SELECT * FROM `products` WHERE `id`='$productID'");
    $row = mysqli_fetch_array($res);
    $productPrice = $row['price'];

    // Sets profit
    $saleProfit = $salePrice - $productPrice;



    $thisMonth = date('F Y');
    $prevMonth = date('F Y', strtotime("last month"));

    // Adding sales record
    $addSaleQuery = mysqli_query($appconnect, "INSERT INTO `sales` (
                                `id`,
                                `product_id`,
                                `description`,
                                `profit`,
                                `month`,
                                `date_created`
                              ) VALUES (
                                NULL,
                                '$productID',
                                '$saleDesc',
                                '$saleProfit',
                                '$thisMonth',
                                current_timestamp())"
                              );

    if ($addSaleQuery) {

      // Expense added. Proceeds with deducting amount from the store account

      //Fetches data from products, and updates stock
      $res = mysqli_query($appconnect, "SELECT * FROM `products` WHERE `id`='$productID'");
      $row = mysqli_fetch_array($res);
      $stock = $row['stock'];

      $newStock = $stock - 1;

      // Updates stock value
      mysqli_query($appconnect, "UPDATE `products` SET
                  `stock` = '$newStock',
                  `last_updated` = current_timestamp()
                  WHERE `products`.`id`='$productID'"
                );


        // Checks the availability of record for this month
        $res = mysqli_query($appconnect, "SELECT * FROM `store_account` WHERE `month`='$thisMonth'");

        // If no record found for this month
        if ((mysqli_num_rows($res)) != 1) {


          // Creates record if not exists. This query helps creating new table data for new month

          mysqli_query($appconnect, "INSERT INTO `store_account` (
                      `id`,
                      `balance`,
                      `month`,
                      `income`,
                      `expense`,
                      `date_created`,
                      `last_updated`
                    ) VALUES (
                      NULL,
                      '0',
                      '$thisMonth',
                      '0',
                      '0',
                      current_timestamp(),
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
                      `expense` = '0',
                      `last_updated` = current_timestamp()
                      WHERE `store_account`.`month` = '$thisMonth'"
                    );

          // Fetches data from store account for current month
          $res = mysqli_query($appconnect, "SELECT * FROM `store_account` WHERE `month`='$thisMonth'");
          $row = mysqli_fetch_array($res);
          $balance = $row['balance'];
          $thatIncome = $row['income'];
          $expense = $row['expense'];

          // Sets updated data
          $newBalance = $balance + $productPrice;
          $income = $thatIncome + $productPrice;

          // Updates data for current month
          mysqli_query($appconnect, "UPDATE `store_account` SET
                      `balance` = '$newBalance',
                      `income` = '$income',
                      `expense` = '$expense',
                      `last_updated` = current_timestamp()
                      WHERE `store_account`.`month` = '$thisMonth'"
                    );

        }else {
          /*
           * Assumes that there is no record for previous month.
           * Continues updating data for current month
           */

          // Fetches data from store account for current month
          $res = mysqli_query($appconnect, "SELECT * FROM `store_account` WHERE `month`='$thisMonth'");
          $row = mysqli_fetch_array($res);
          $balance = $row['balance'];
          $thatIncome = $row['income'];
          $expense = $row['expense'];

          // Sets updated data
          $newBalance = $balance + $productPrice;
          $income = $thatIncome + $productPrice;

          // Updates data for current month
          mysqli_query($appconnect, "UPDATE `store_account` SET
                      `balance` = '$newBalance',
                      `income` = '$income',
                      `expense` = '$expense',
                      `last_updated` = current_timestamp()
                      WHERE `store_account`.`month` = '$thisMonth'"
                    );
        }

      }else {
        // Assumes that data for current month exists and proceeds with updating record


      // Fetches data from store account for current month
      $res = mysqli_query($appconnect, "SELECT * FROM `store_account` WHERE `month`='$thisMonth'");
      $row = mysqli_fetch_array($res);
      $balance = $row['balance'];
      $thatIncome = $row['income'];
      $expense = $row['expense'];

      // Sets updated data
      $newBalance = $balance + $productPrice;
      $income = $thatIncome + $productPrice;

      // Updates data for current month
      mysqli_query($appconnect, "UPDATE `store_account` SET
                  `balance` = '$newBalance',
                  `income` = '$income',
                  `expense` = '$expense',
                  `last_updated` = current_timestamp()
                  WHERE `store_account`.`month` = '$thisMonth'"
                );
    } // ends else statement

    }else {
      // $addSaleQuery failed!
    }


  }
?>
