<?php
  $thisMonth = date('F');     // returns month's full name e.g December
  $thisYear  = date('Y');
  $lastMonth = date('F', strtotime("last month"));
  $lastYear = date('Y', strtotime("last year"));
?>
