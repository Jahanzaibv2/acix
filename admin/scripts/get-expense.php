<?php

if (!defined('ABSPATH'))
    exit('No direct script access allowed');


session_start();

  if (isset($_SESSION['user_id'])) {


  $res = mysqli_query($appconnect, "SELECT * FROM `expenses` WHERE `month`='$thisMonth' AND `year`='$thisYear'");

  if ((mysqli_num_rows($res))>0) {
    while ($row = mysqli_fetch_array($res)) {
      $expense = $row['expense'];
      $expenses +=$expense;
    }
    $expenses = $expenses / 1000;
  }

} else {
      // Redirecting to for further redirection
      header('location: /');
    }
?>
