<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Logout Page
 * 
 * 
 * 
 * 
 * 
 * @author Rana Jahanzaib <Jahanzaibv2@gmail.com>
 * 
 * @package Acix
 */

  session_start();

  session_destroy();

  header('Location: login.php');
