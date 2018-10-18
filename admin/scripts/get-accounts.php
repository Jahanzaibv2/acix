<?php

if (!defined('ABSPATH'))
    exit('No direct script access allowed');

session_start();

  if (isset($_SESSION['user_id'])) {

  $res = mysqli_query($appconnect, "SELECT * FROM `expense_accounts`");

} else {
      // Redirecting to for further redirection
      header('location: /');
    }
?>
