<?php


session_start();

  if (isset($_SESSION['user_id'])) {


  $res = mysqli_query($appconnect, "SELECT * FROM `sales` WHERE `month`='$lastMonth' AND `year`='$thisYear'");
  $salesCount = mysqli_num_rows($res);

  if ((mysqli_num_rows($res))>0) {
    while ($row = mysqli_fetch_array($res)) {
      $saleProfit = $row['profit'];
      $grossProfit +=$saleProfit;
    }
    $grossProfit = $grossProfit / 1000;
  }

} else {
      // Redirecting to for further redirection
      header('location: /');
    }
?>