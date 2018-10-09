<?php
  if (isset($_POST['addExpense'])) {

    $accountID = mysqli_real_escape_string($appconnect, $_POST['account_id']);
    $thisExpense = mysqli_real_escape_string($appconnect, $_POST['expense']);
    $expenseDesc = mysqli_real_escape_string($appconnect, $_POST['expense_desc']);


    $thisMonth = date('FY');
    $prevMonth = date('FY', strtotime("last month"));

    $addExpenseQuery = mysqli_query($appconnect, "INSERT INTO `expenses` (
                              `id`,
                              `expense`,
                              `expense_acc_id`,
                              `description`,
                              `month`,
                              `date_created`
                            ) VALUES (
                              NULL,
                              '$thisExpense',
                              '$accountID',
                              '$expenseDesc',
                              '$thisMonth',
                              current_timestamp())"
                            );
    if ($addExpenseQuery) {
      // Expense added. Proceeds with deducting amount from the store account

      // Fetches data for current month
      $res = mysqli_query($appconnect, "SELECT * FROM `store_account` WHERE `month`='$thisMonth'");
      $row = mysqli_fetch_array($res);
      $balance = $row['balance'];
      $income = $row['income'];
      $thatExpense = $row['expense'];

      // Sets updated data
      $newBalance = $balance - $thisExpense;
      $newExpense = $thatExpense + $thisExpense;

      // Updates data for current month
      mysqli_query($appconnect, "UPDATE `store_account` SET
                  `balance` = '$newBalance',
                  `income` = '$income',
                  `expense` = '$newExpense'
                  WHERE `store_account`.`month` = '$thisMonth'"
                );


      // Checks the availability of record for this month
      if ((mysqli_num_rows($res)) != 1) {

        $res = mysqli_query($appconnect, "SELECT * FROM `store_account` WHERE `month`='$thisMonth'");

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

        }else {
          /*
          * Assumes that there is no record for previous month and does not
          * add any expense.
          * There won't be any balance in store account, because default new record
          * has balance zero(0) and does not update balance as there was no
          * previous record for store account found.
          * In short: Updating store account's balance and expense could result
          * in negative value. This part assumes that user has just installed
          * application.
          */
        }

      }
    }else {
      // $addExpenseQuery failed!
    }


  }
?>
