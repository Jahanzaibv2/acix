<?php


  $thisMonth = date('F Y');
  $prevMonth = date('F Y', strtotime("last month"));

  $res = mysqli_query($appconnect, "SELECT * FROM `sales` WHERE `month`='$thisMonth' ORDER BY `id` DESC");


?>
