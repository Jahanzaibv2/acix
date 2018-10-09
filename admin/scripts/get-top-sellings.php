<?php

  $thisMonth = date('F Y');
  $prevMonth = date('F Y', strtotime("last month"));

  $res = mysqli_query($appconnect, "SELECT `product_id`, COUNT(*) AS `count` FROM `sales` WHERE `month`='$thisMonth' GROUP BY `product_id`");
  $row = mysqli_fetch_array($res);

  $soldItems = $row['count'];
  $topSellingProductID = $row['product_id'];

  $res = mysqli_query($appconnect, "SELECT * FROM `products` WHERE id='$topSellingProductID'");
  $row = mysqli_fetch_array($res);

  $topSellingProduct = $row['name'];

?>
