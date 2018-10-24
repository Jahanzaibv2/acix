<?php

// preventing direct script access
if (!defined('ABSPATH'))
    exit('No direct script access allowed');


session_start();

  if (isset($_SESSION['user_id'])) {


  $res = mysqli_query($appconnect, "SELECT * FROM `store_account` WHERE `month`='$thisMonth' AND `year`='$thisYear'");

  $row = mysqli_fetch_array($res);

  $balance = $row['balance'] / 1000;

} else {
      // Redirecting to / for further redirection
      header('location: /');
    }
?>
