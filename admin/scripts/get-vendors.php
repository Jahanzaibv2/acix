<?php

if (!defined('ABSPATH'))
    exit('No direct script access allowed');

session_start();

  if (isset($_SESSION['user_id'])) {

  $res = mysqli_query($appconnect, "SELECT * FROM `vendors`");

} else {
      // Redirecting to for further redirection
      header('location: /');
    }
?>
