<?php
// Define ABSPATH as this file's directory
if (!defined('ABSPATH')) {
  define('ABSPATH', dirname(__FILE__).'/');
}

  define('APPINC', 'app-includes');

  include (ABSPATH.'/admin/app-config.php');
  include (ABSPATH.'/admin/plot-database.php');

?>
