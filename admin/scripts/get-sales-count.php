<?php

// preventing direct script access
if (!defined('ABSPATH'))
    exit('No direct script access allowed');



session_start();

  if (isset($_SESSION['user_id'])) {


  $res = mysqli_query($appconnect, "SELECT * FROM `sales` WHERE `month`='$thisMonth' AND `year`='$thisYear'");
  $salesCount = mysqli_num_rows($res);
} else {
      // Redirecting to for further redirection
      header('location: /');
    }
?>
