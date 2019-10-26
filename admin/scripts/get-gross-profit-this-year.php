<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Get Gross Profit Of This Year
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


    // Get Profit Details
    // for Januray
    $res = mysqli_query($appconnect, "SELECT * FROM `sales` WHERE `month`='$january' AND `year`='$thisYear'");
    if ((mysqli_num_rows($res))>0) {
      $profitJanuary = 0;
      while ($row = mysqli_fetch_array($res)) {
        $saleProfit = $row['profit'];
        $profitJanuary +=$saleProfit;
      }
    }else {
      $profitJanuary = 0;
    }
    // for February
    $res = mysqli_query($appconnect, "SELECT * FROM `sales` WHERE `month`='$february' AND `year`='$thisYear'");
    if ((mysqli_num_rows($res))>0) {
      $profitFebruary = 0;
      while ($row = mysqli_fetch_array($res)) {
        $saleProfit = $row['profit'];
        $profitFebruary +=$saleProfit;
      }
    }else {
      $profitFebruary = 0;
    }
    // for March
    $res = mysqli_query($appconnect, "SELECT * FROM `sales` WHERE `month`='$march' AND `year`='$thisYear'");
    if ((mysqli_num_rows($res))>0) {
      $profitMarch = 0;
      while ($row = mysqli_fetch_array($res)) {
        $saleProfit = $row['profit'];
        $profitMarch +=$saleProfit;
      }
    }else {
      $profitMarch = 0;
    }
    // for April
    $res = mysqli_query($appconnect, "SELECT * FROM `sales` WHERE `month`='$april' AND `year`='$thisYear'");
    if ((mysqli_num_rows($res))>0) {
      $profitApril = 0;
      while ($row = mysqli_fetch_array($res)) {
        $saleProfit = $row['profit'];
        $profitApril +=$saleProfit;
      }
    }else {
      $profitApril = 0;
    }
    // for May
    $res = mysqli_query($appconnect, "SELECT * FROM `sales` WHERE `month`='$may' AND `year`='$thisYear'");
    if ((mysqli_num_rows($res))>0) {
      $profitMay = 0;
      while ($row = mysqli_fetch_array($res)) {
        $saleProfit = $row['profit'];
        $profitMay +=$saleProfit;
      }
    }else {
      $profitMay = 0;
    }
    // for June
    $res = mysqli_query($appconnect, "SELECT * FROM `sales` WHERE `month`='$june' AND `year`='$thisYear'");
    if ((mysqli_num_rows($res))>0) {
      $profitJune = 0;
      while ($row = mysqli_fetch_array($res)) {
        $saleProfit = $row['profit'];
        $profitJune +=$saleProfit;
      }
    }else {
      $profitJune = 0;
    }
    // for July
    $res = mysqli_query($appconnect, "SELECT * FROM `sales` WHERE `month`='$july' AND `year`='$thisYear'");
    if ((mysqli_num_rows($res))>0) {
      $profitJuly = 0;
      while ($row = mysqli_fetch_array($res)) {
        $saleProfit = $row['profit'];
        $profitJuly +=$saleProfit;
      }
    }else {
      $profitJuly = 0;
    }
    // for August
    $res = mysqli_query($appconnect, "SELECT * FROM `sales` WHERE `month`='$august' AND `year`='$thisYear'");
    if ((mysqli_num_rows($res))>0) {
      $profitAugust = 0;
      while ($row = mysqli_fetch_array($res)) {
        $saleProfit = $row['profit'];
        $profitAugust +=$saleProfit;
      }
    }else {
      $profitAugust = 0;
    }
    // for September
    $res = mysqli_query($appconnect, "SELECT * FROM `sales` WHERE `month`='$september' AND `year`='$thisYear'");
    if ((mysqli_num_rows($res))>0) {
      $profitSeptember = 0;
      while ($row = mysqli_fetch_array($res)) {
        $saleProfit = $row['profit'];
        $profitSeptember +=$saleProfit;
      }
    }else {
      $profitSeptember = 0;
    }
    // for Ocotber
    $res = mysqli_query($appconnect, "SELECT * FROM `sales` WHERE `month`='$october' AND `year`='$thisYear'");
    if ((mysqli_num_rows($res))>0) {
      $profitOctober = 0;
      while ($row = mysqli_fetch_array($res)) {
        $saleProfit = $row['profit'];
        $profitOctober +=$saleProfit;
      }
    }else {
      $profitOctober = 0;
    }
    // for November
    $res = mysqli_query($appconnect, "SELECT * FROM `sales` WHERE `month`='$november' AND `year`='$thisYear'");
    if ((mysqli_num_rows($res))>0) {
      $profitNovember = 0;
      while ($row = mysqli_fetch_array($res)) {
        $saleProfit = $row['profit'];
        $profitNovember +=$saleProfit;
      }
    }else {
      $profitNovember = 0;
    }
    // for December
    $res = mysqli_query($appconnect, "SELECT * FROM `sales` WHERE `month`='$december' AND `year`='$thisYear'");
    if ((mysqli_num_rows($res))>0) {
      $profitDecember = 0;
      while ($row = mysqli_fetch_array($res)) {
        $saleProfit = $row['profit'];
        $profitDecember +=$saleProfit;
      }
    }else {
      $profitDecember = 0;
    }


    // Sets Max&Min Numbers for Chart
    $max = max( $profitJanuary,
                $profitFebruary,
                $profitMarch,
                $profitApril,
                $profitMay,
                $profitJune,
                $profitJuly,
                $profitAugust,
                $profitSeptember,
                $profitOctober,
                $profitNovember,
                $profitDecember
              );


?>
