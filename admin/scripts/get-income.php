<?php

  $thisMonth = date('F Y');
  $prevMonth = date('F Y', strtotime("last month"));

  $res = mysqli_query($appconnect, "SELECT * FROM `store_account` WHERE `month`<='$thisMonth'");
  $row = mysqli_fetch_array($res);

  $income = $row['income'] / 1000;


?>
