<?php

  if (isset($_POST['update-brand'])) {
    $brandID   = mysqli_real_escape_string($appconnect, $_POST['brandID']);
    $brandName = mysqli_real_escape_string($appconnect, $_POST['brandName']);
    $brandDesc = mysqli_real_escape_string($appconnect, $_POST['brandDesc']);

    mysqli_query($appconnect, "UPDATE `product_brands` SET
                 `name` = '$brandName',
                 `description` = '$brandDesc',
                 `last_updated` = current_timestamp() WHERE `product_brands`.`id` = '$brandID' ");
  }

?>
