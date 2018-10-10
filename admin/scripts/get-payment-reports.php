<?php


  $thisMonth = date('F Y');
  $prevMonth = date('F Y', strtotime("last month"));

  $getSalesQuery = mysqli_query($appconnect, "SELECT * FROM `sales` WHERE `month`='$thisMonth'");
  
  $getExpensesQuery = mysqli_query($appconnect, "SELECT * FROM `expenses` WHERE `month`='$thisMonth'");




?>
