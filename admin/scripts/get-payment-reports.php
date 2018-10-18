<?php

if (!defined('ABSPATH'))
    exit('No direct script access allowed');



session_start();

  if (isset($_SESSION['user_id'])) {


  $getSalesQuery = mysqli_query($appconnect, "SELECT * FROM `sales` WHERE `month`='$thisMonth' AND `year`='$thisYear'");

  $getExpensesQuery = mysqli_query($appconnect, "SELECT * FROM `expenses` WHERE `month`='$thisMonth' AND `year`='$thisYear'");



} else {
      // Redirecting to for further redirection
      header('location: /');
    }
?>
