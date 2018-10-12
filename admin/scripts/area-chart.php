<?php
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

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: [{
      label: "Profit Rs",
      lineTension: 0.3,
      backgroundColor: "#00a63f",
      borderColor: "#00a63f",
      pointRadius: 5,
      pointBackgroundColor: "#00a63f",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "#00a63f",
      pointHitRadius: 50,
      pointBorderWidth: 2,
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
          unit: 'date'
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
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
</script>
