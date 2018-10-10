<?php



  $getSalesQuery = mysqli_query($appconnect, "SELECT * FROM `sales` WHERE `month`='$thisMonth' AND `year`='$thisYear'");

  $getExpensesQuery = mysqli_query($appconnect, "SELECT * FROM `expenses` WHERE `month`='$thisMonth' AND `year`='$thisYear'");




?>
