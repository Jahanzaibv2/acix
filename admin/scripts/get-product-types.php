<?php

session_start();

  if (isset($_SESSION['user_id'])) {

  $getProductTypesQuery = mysqli_query($appconnect, "SELECT * FROM `product_types`");
} else {
      // Redirecting to for further redirection
      header('location: /');
    }
?>
