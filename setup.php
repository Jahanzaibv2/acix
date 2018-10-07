<?php
// Define ABSPATH as this file's directory
if (!defined('ABSPATH')) {
  define('ABSPATH', dirname(__FILE__).'/');
}

define('APPINC', 'app-includes');


  $PAGE_TITLE  = "Installation";
  $PAGE_DESC   = "...";
  $PAGE_AUTHOR = "..."

?>
<!DOCTYPE html>
<html lang="en">
  <?php require (ABSPATH.APPINC."/page-unit/head.php"); ?>
  <body class="bg-dark">
  <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header bg-primary text-white">I need to some information to proceed.</div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="hostName" class="form-control" placeholder="Enter hostname here" required="required" autofocus="autofocus">
                    <label for="hostName">Server's Hostname</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="dbName" class="form-control" placeholder="Enter database name" required="required">
                    <label for="dbName">Database Name</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="dbUser" class="form-control" placeholder="Enter name of your Database User" required="required" autofocus="autofocus">
                    <label for="dbUser">Database username</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="dbPassword" class="form-control" placeholder="Enter username" required="required">
                    <label for="dbPassword">Password</label>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="storeName" class="form-control" placeholder="Enter your store name" required="required">
                <label for="storeName">Your Store Name</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="fullName" class="form-control" placeholder="Your name" required="required" autofocus="autofocus">
                    <label for="fullName">Your Full Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="username" class="form-control" placeholder="Enter your username" required="required">
                    <label for="username">Your username</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                    <label for="confirmPassword">Confirm password</label>
                  </div>
                </div>
              </div>
            </div>
            <input type="submit" class="btn btn-primary btn-block" href="" value="Install">
          </form>
          <div class="text-center">
            <br>
            Not sure what to do? <a class="d-block small" href="https://github.com/appzaib/acix/">Contact developers</a>
          </div>
        </div>
      </div>
    </div>
    <script src="app-include/js/jquery.min.js"></script>
    <script src="app-include/js/bootstrap.bundle.min.js"></script>
    <script src="app-include/js/jquery.easing.min.js"></script>
 </body>
</html>
