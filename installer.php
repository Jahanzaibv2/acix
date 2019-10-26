<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Application Installer
 * 
 * 
 * 
 * 
 * 
 * @author Rana Jahanzaib <iam@ranajahanzaib.com>
 * 
 * @package Acix
 */

  require ('load.php');

  if (isset($_POST['install'])) {

    // Won't use in MVP
    // $HOSTNAME = mysqli_real_escape_string($appconnect, $_POST['hostname']);
    // $DATABASE = mysqli_real_escape_string($appconnect, $_POST['database']);
    // $USER     = mysqli_real_escape_string($appconnect, $_POST['dbuser']);
    // $PASSWORD = mysqli_real_escape_string($appconnect, $_POST['dbpassword']);

    $storeName = mysqli_real_escape_string($appconnect, $_POST['storename']);
    $fullName  = mysqli_real_escape_string($appconnect, $_POST['fullname']);
    $username  = mysqli_real_escape_string($appconnect, $_POST['username']);
    $passwordA = mysqli_real_escape_string($appconnect, $_POST['passwordA']);
    $passwordB = mysqli_real_escape_string($appconnect, $_POST['passwordB']);

    if ($passwordA == $passwordB) {
      $password = $passwordB;
      $encryptedPassword = md5($password);

      $checkUser = mysqli_query($appconnect, "SELECT * FROM `users`");

      if ((mysqli_num_rows($checkUser))<1) {

        $addStore = mysqli_query($appconnect, "INSERT INTO `stores` (
                                `id`,
                                `name`,
                                `website`,
                                `phone`,
                                `email`,
                                `date_created`
                              ) VALUES (
                                NULL,
                                '$storeName',
                                'no website provided',
                                'no phone provided',
                                'no email provided',
                                current_timestamp())"
                              );

        $adduser = mysqli_query($appconnect, "INSERT INTO `users` (
                    `id`,
                    `username`,
                    `password`,
                    `fullname`,
                    `email`,
                    `userlevel`,
                    `online`,
                    `visibility`,
                    `date_created`
                  ) VALUES (
                    NULL,
                    '$username',
                    '$encryptedPassword',
                    '$fullName',
                    'No email provided yet',
                    '1',
                    '1',
                    '1',
                    current_timestamp())"
                  );

        if ($adduser) {
          header('location: /');
        }else {
          echo 'An error occured while adding user. Please contact developers';
        }

      }else {
        echo "Already installed. <a href='login.php'>Login</a> to your store account.";
      }


    }else {
      echo "Your passwords didn't match. <a href='setup.php'>Try again</a>.";
    }

  }
?>
