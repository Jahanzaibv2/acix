<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2018-2019
 * 
 * 
 * Time Utility
 * 
 * 
 * 
 * 
 * 
 * @author Rana Jahanzaib <Jahanzaibv2@gmail.com>
 * 
 * @package Acix
 */

  $thisMonth = date('F');     // returns month's full name e.g December
  $thisYear  = date('Y');
  $lastMonth = date('F', strtotime("last month"));
  $lastYear = date('Y', strtotime("last year"));

  // Months
  $january = "January";
  $february = "February";
  $march = "March";
  $april = "April";
  $may = "May";
  $june = "June";
  $july = "July";
  $august = "August";
  $september = "September";
  $october = "October";
  $november = "November";
  $december = "December";
