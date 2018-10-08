<?php
  if (isset($_POST['addVendor'])) {
    $vendorName = mysqli_real_escape_string($appconnect, $_POST['vendor_name']);
    $vendorPhone = mysqli_real_escape_string($appconnect, $_POST['vendor_phone']);
    $vendorEmail = mysqli_real_escape_string($appconnect, $_POST['vendor_email']);
    $vendorDesc = mysqli_real_escape_string($appconnect, $_POST['vendor_desc']);

    mysqli_query($appconnect, "INSERT INTO `vendors` (
                                            `id`,
                                            `name`,
                                            `phone`,
                                            `email`,
                                            `description`,
                                            `visibility`,
                                            `date_created`,
                                            `last_updated`
                                          ) VALUES (
                                            NULL,
                                            '$vendorName',
                                            '$vendorPhone',
                                            '$vendorEmail',
                                            '$vendorDesc',
                                            '1',
                                            current_timestamp(),
                                            NULL)"
                                          );
  }
?>
