<?php
// Define ABSPATH as this file's directory
if (!defined('ABSPATH')) {
  define('ABSPATH', dirname(__FILE__).'/');
}

  define('APPINC', 'app-includes');

  include 'tests/appconnect.php';
  include 'tests/create-db-tables.php';

?>
