<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Get User Info
 * 
 * 
 * 
 * 
 * 
 * @author Rana Jahanzaib <iam@ranajahanzaib.com>
 * 
 * @package Acix
 */

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
