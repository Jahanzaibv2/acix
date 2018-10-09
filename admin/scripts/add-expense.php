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
                              `date_created`
                            ) VALUES (
                              NULL,
                              '$thisExpense',
                              '$accountID',
                              '$expenseDesc',
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
    }else {
      // $addExpenseQuery failed! 
    }


  }
?>
