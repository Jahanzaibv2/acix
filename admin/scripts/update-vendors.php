<?php

  // preventing direct script access
  if (!defined('ABSPATH'))
    exit('No direct script access allowed');


if (isset($_POST['update-vendor'])) {
  $vendorID = mysqli_real_escape_string($appconnect, $_POST['vendorID']);
  $vendorName = mysqli_real_escape_string($appconnect, $_POST['vendorName']);
  $vendorDesc = mysqli_real_escape_string($appconnect, $_POST['vendorDesc']);
  $vendorEmail = mysqli_real_escape_string($appconnect, $_POST['vendorEmail']);
  $vendorPhone = mysqli_real_escape_string($appconnect, $_POST['vendorPhone']);


    mysqli_query($appconnect, "UPDATE `vendors` SET
                              `name` = '$vendorName',
                              `email` = '$vendorEmail',
                              `phone` = '$vendorPhone',
                              `description` = '$vendorDesc',
                              `last_updated` = current_timestamp() WHERE `vendors`.`id` = '$vendorID' ");


}


?>
