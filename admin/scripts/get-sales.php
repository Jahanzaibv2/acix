<?php


session_start();

  if (isset($_SESSION['user_id'])) {


  $res = mysqli_query($appconnect, "SELECT * FROM `sales` WHERE `month`='$thisMonth' AND `year`='$thisYear' ORDER BY `id` DESC");


} else {
      // Redirecting to for further redirection
      header('location: /');
    }
?>
