<?php



  $res = mysqli_query($appconnect, "SELECT * FROM `sales` WHERE `month`='$thisMonth' AND `year`='$thisYear' ORDER BY `id` DESC");


?>
