<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Load Page
 * 
 * 
 * 
 * 
 * 
 * @author Rana Jahanzaib <Jahanzaibv2@gmail.com>
 * 
 * @package Acix
 */

  // Define ABSPATH as this file's directory
  if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__).'/');
  }

  define('APPINC', 'app-includes');

  require (ABSPATH.'/admin/time.php');

  include (ABSPATH.'/admin/app-config.php');
  include (ABSPATH.'/admin/plot-database.php');

?>
