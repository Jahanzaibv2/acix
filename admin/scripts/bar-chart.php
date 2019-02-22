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

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
    datasets: [{
      label: "Revenue: Rs",
      backgroundColor: "#00a63f",
      borderColor: "rgba(2,117,216,1)",
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
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 12
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: <?php echo ($max *2); ?>,
          maxTicksLimit: 10
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});

</script>
