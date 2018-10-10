<?php


  $res = mysqli_query($appconnect, "SELECT * FROM `sales` WHERE `month`<='$thisMonth' AND `year`='$thisYear'");

  if ((mysqli_num_rows($res))>0) {
    while ($row = mysqli_fetch_array($res)) {
      $saleProfit = $row['profit'];
      $grossProfit +=$saleProfit;
    }
    $grossProfit = $grossProfit / 1000;
  }


?>
