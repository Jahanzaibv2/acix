<?php


  $thisMonth = date('FY');
  $prevMonth = date('FY', strtotime("last month"));

  $res = mysqli_query($appconnect, "SELECT * FROM `sales` WHERE `month`='$thisMonth'");
  $salesCount = mysqli_num_rows($res);

?>
