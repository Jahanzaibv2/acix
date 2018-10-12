<?php

  // Get Profit Details
  // for Januray
  $res = mysqli_query($appconnect, "SELECT * FROM `sales` WHERE `month`='$january' AND `year`='$thisYear'");
  if ((mysqli_num_rows($res))>0) {
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
<script>
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
