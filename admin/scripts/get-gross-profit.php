<?php

  $thisMonth = date('F Y');
  $prevMonth = date('F Y', strtotime("last month"));

  $res = mysqli_query($appconnect, "SELECT * FROM `sales` WHERE `month`<='$thisMonth'");

  if ((mysqli_num_rows($res))>0) {
    while ($row = mysqli_fetch_array($res)) {
      $saleProfit = $row['profit'];
      $grossProfit +=$saleProfit;
    }
    $grossProfit = $grossProfit / 1000;
  }


?>
