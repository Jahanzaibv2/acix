<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Update Products
 * 
 * 
 * 
 * 
 * 
 * @author Rana Jahanzaib <Jahanzaibv2@gmail.com>
 * 
 * @package Acix
 */

  // preventing direct script access
  if (!defined('ABSPATH'))
    exit('No direct script access allowed');


  if (isset($_POST['update-product'])) {
    $productID = mysqli_real_escape_string($appconnect, $_POST['productID']);
    $productName = mysqli_real_escape_string($appconnect, $_POST['productName']);
    $productDesc = mysqli_real_escape_string($appconnect, $_POST['productDesc']);
    $typeID = mysqli_real_escape_string($appconnect, $_POST['productType']);
    $brandID = mysqli_real_escape_string($appconnect, $_POST['productBrand']);
    $vendorID = mysqli_real_escape_string($appconnect, $_POST['vendor']);
    $productPrice = mysqli_real_escape_string($appconnect, $_POST['productPrice']);
    $stock = mysqli_real_escape_string($appconnect, $_POST['stock']);

      $res = mysqli_query($appconnect, "SELECT * FROM `products` WHERE `id`='$productID'");
      $row = mysqli_fetch_array($res);

      $productPrice   = $row['price'];
      $stockValue     = $row['stock'];



    //////////////////////////////////////////////////////////////
    //
    // Updating Store Account Details
    //
    //////////////////////////////////////////////////////////////
    $res = mysqli_query($appconnect, "SELECT * FROM `store_account` WHERE `month`='$thisMonth' AND `year`='$thisYear'");
    $row = mysqli_fetch_array($res);
    $balance = $row['balance'];
    $income = $row['income'];
    $expense = $row['expense'];

    // Sets updated data
    $newBalance = $balance - ($productPrice * $stock);
    $newExpense = $expense + ($productPrice * $stock);

    // Updates data for current month
    mysqli_query($appconnect, "UPDATE `store_account` SET
                `balance` = '$newBalance',
                `income` = '$income',
                `expense` = '$newExpense',
                `last_updated` = current_timestamp()
                WHERE `store_account`.`month` = '$thisMonth' AND `store_account`.`year` = '$thisYear'"
              );


    $stockValue = $stockValue + $stock;

    mysqli_query($appconnect, "UPDATE `products` SET
                              `type_id` = '$typeID',
                              `brand_id` = '$brandID',
                              `vendor_id` = '$brandID',
                              `name` = '$productName',
                              `price` = '$productPrice',
                              `stock` = '$stockValue',
                              `description` = '$productDesc',
                              `last_updated` = current_timestamp()
                              WHERE `products`.`id` = '$productID' ");
  }
