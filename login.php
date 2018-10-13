<?php


    require ('load.php');

    require (ABSPATH.'/admin/scripts/login.php');

    $REQUIRE_CHARTS = 0;

    $PAGE_TITLE  = "Login"; // NOTE: This variable is used in footer scripts to add exception for charts. If you make any changes here, you'd need to fix there too.
    $PAGE_DESC   = "...";
    $PAGE_AUTHOR = "...";



?>
<!DOCTYPE html>
<html lang="en">
  <?php require (ABSPATH.APPINC."/modules/head.php"); ?>
  <body class="bg-dark">
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header bg-primary text-white">Login to your account</div>
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="username" id="username" class="form-control" placeholder="username" required="required" autofocus="autofocus">
                <label for="username">Enter username</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <input type="submit" name="login" class="btn btn-primary btn-block" value="Login">
          </form>
          <div class="text-center">
            <br>
            <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>
    <?php
      include (ABSPATH.APPINC."/modules/footer-scripts.php");
    ?>
  </body>
</html>
