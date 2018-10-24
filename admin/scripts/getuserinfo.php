<?php

// preventing direct script access
if (!defined('ABSPATH'))
    exit('No direct script access allowed');


        $ID = $_SESSION['user_id'];
        $res = mysqli_query($appconnect, "SELECT * FROM `users` WHERE `id`='$ID'");
        $row = mysqli_fetch_array($res);

        $username = $row['username'];
        $fullName = $row['fullname'];
        $email    = $row['email'];
        $userlevel    = $row['userlevel'];

 ?>
