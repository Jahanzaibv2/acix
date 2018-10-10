<?php



  $res = mysqli_query($appconnect, "SELECT * FROM `sales` WHERE `month`='$thisMonth' AND `year`='$thisYear'");
  $salesCount = mysqli_num_rows($res);

?>
