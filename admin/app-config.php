<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * App Configurations
 * 
 * 
 * 
 * 
 * 
 * @author Rana Jahanzaib <Jahanzaibv2@gmail.com>
 * 
 * @package Acix
 */

  define('HOST', 'localhost');
  define('USER', 'root');
  define('PASSWORD', 'test');
  define('DATABASE', 'acix');

  $appconnect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
