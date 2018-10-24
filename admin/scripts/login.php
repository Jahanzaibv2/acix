<?php

// preventing direct script access
if (!defined('ABSPATH'))
    exit('No direct script access allowed');

session_start();




  if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($appconnect, $_POST['username']);
    $password = mysqli_real_escape_string($appconnect, $_POST['password']);

    $encryptedPassword = md5($password);

    // Confirm user input
    $checkCreds = mysqli_query($appconnect, "SELECT * FROM `users` WHERE `username`='$username' AND `password`='$encryptedPassword'");

    if ((mysqli_num_rows($checkCreds))>0) {
      $row = mysqli_fetch_array($checkCreds);

      $_SESSION['user_id'] = $row['id'];
      header('location: /');

    }else {
      header('location: login.php');
    }
  }

?>
