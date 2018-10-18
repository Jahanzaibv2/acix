<?php

if (!defined('ABSPATH'))
    exit('No direct script access allowed');


  if (isset($_POST['update-profile'])) {
    $fullName   = mysqli_real_escape_string($appconnect, $_POST['fullname']);
    $username = mysqli_real_escape_string($appconnect, $_POST['username']);
    $email = mysqli_real_escape_string($appconnect, $_POST['email']);
    $password = mysqli_real_escape_string($appconnect, $_POST['password']);
    $encryptedPassword = md5($password);

    mysqli_query($appconnect, "UPDATE `users` SET
                              `username` = '$username',
                              `fullname` = '$fullName',
                              `email` = '$email' WHERE `users`.`id` = '$ID' AND
                              `users`.`password`='$encryptedPassword'");
  }

?>
