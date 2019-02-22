<?php

  // preventing direct script access
  if (!defined('ABSPATH'))
    exit('No direct script access allowed');

  session_start();

  if (isset($_SESSION['user_id'])) {

    require (ABSPATH.'/admin/scripts/get-gross-profit-this-year.php');

  } else {
        // Redirecting to for further redirection
        header('location: /');
      }
?>
<script type="text/javascript">
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: [{
      data: [ <?php echo $profitJanuary; ?>,
              <?php echo $profitFebruary; ?>,
              <?php echo $profitMarch; ?>,
              <?php echo $profitApril; ?>,
              <?php echo $profitMay; ?>,
              <?php echo $profitJune; ?>,
              <?php echo $profitJuly; ?>,
              <?php echo $profitAugust; ?>,
              <?php echo $profitSeptember; ?>,
              <?php echo $profitOctober; ?>,
              <?php echo $profitNovember; ?>,
              <?php echo $profitDecember; ?>
            ],
      backgroundColor: ['#d35400', '#00a63f', '#900C3F', '#2e4053', '#1a5276', '#f4d03f','#8e44ad','#DAF7A6','#34eb13','#eb1d13','#0a0101'],
    }],
  },
});

</script>
