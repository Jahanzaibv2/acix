<?php


session_start();

  if (isset($_SESSION['user_id'])) {


  $res = mysqli_query($appconnect, "SELECT * FROM `products`");

} else {
      // Redirecting to for further redirection
      header('location: /');
    }
?>
