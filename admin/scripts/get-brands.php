<?php

session_start();

  if (isset($_SESSION['user_id'])) {

  $res = mysqli_query($appconnect, "SELECT * FROM `product_brands`");

} else {
      // Redirecting to for further redirection
      header('location: /');
    }
?>
