<?php  ?>
    <script src="<?php echo APPINC; ?>/js/jquery.min.js"></script>
    <script src="<?php echo APPINC; ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo APPINC; ?>/js/jquery.easing.min.js"></script>
    <script src="<?php echo APPINC; ?>/js/chart.min.js"></script>
    <script src="<?php echo APPINC; ?>/js/jquery.dataTables.js"></script>
    <script src="<?php echo APPINC; ?>/js/dataTables.bootstrap4.js"></script>
    <script src="<?php echo APPINC; ?>/js/rc-pos.min.js"></script>
    <script src="<?php echo APPINC; ?>/js/datatables-demo.js"></script>
    <?php
    if ($REQUIRE_CHARTS == 0) {
      // code...
    }else {
      require (ABSPATH.'/admin/scripts/area-chart.php');
      require (ABSPATH.'/admin/scripts/bar-chart.php');
      require (ABSPATH.'/admin/scripts/pie-chart.php');

    }
    ?>
