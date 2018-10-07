<?php
// Define ABSPATH as this file's directory
if (!defined('ABSPATH')) {
  define('ABSPATH', dirname(__FILE__).'/');
}

  define('APPINC', 'app-includes');

  include 'tests/appconnect.php';
  include 'tests/usertable.php';
  include 'tests/product_types.php';
  include 'tests/product_brands.php';
  include 'tests/vendors.php';
  include 'tests/expense_accounts.php';
  include 'tests/products.php';
  include 'tests/sales.php';

?>
