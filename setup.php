<?php

  require ('load.php');


  $PAGE_TITLE  = "Installation";
  $PAGE_DESC   = "...";
  $PAGE_AUTHOR = "..."

?>
<!DOCTYPE html>
<html lang="en">
  <?php require (ABSPATH.APPINC."/modules/head.php"); ?>
  <body class="bg-dark">
    <div class="container">
      <div class="col-md-12 text-center mb-3 mt-5">
        <img src="app-includes/img/logo.png" alt="">
      </div>
      <div class="card card-register mx-auto mt-5">
        <div class="card-header bg-primary text-white">I need some information to proceed.</div>
        <div class="card-body">
          <form class="" action="installer.php" method="post">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" name="hostname" id="hostname" class="form-control" placeholder="Enter hostname here" required="required" autofocus="autofocus">
                    <label for="hostname">Hostname</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" name="database" id="database" class="form-control" placeholder="Enter database name" required="required">
                    <label for="database">Database Name</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" name="dbuser" id="dbuser" class="form-control" placeholder="Enter name of your Database User" required="required" autofocus="autofocus">
                    <label for="dbuser">Database username</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" name="dbpassword" id="dbpassword" class="form-control" placeholder="Enter username" required="required">
                    <label for="dbpassword">Password</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <small>Already a user? <a href="#">Import everything</a> </small>
            </div>
            <hr>
            <div class="col-md-12 text-center">
              <span class="">Account details</span>
            </div>
            <hr>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="storename" id="storename" class="form-control" placeholder="Enter your store name" required="required">
                <label for="storename">Your Store Name</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Your name" required="required" autofocus="autofocus">
                    <label for="fullname">Your Full Name</label>
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
                    <input type="password" name="passwordA" id="passwordA" class="form-control" placeholder="Password" required="required">
                    <label for="passwordA">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" name="passwordB" id="passwordB" class="form-control" placeholder="Confirm password" required="required">
                    <label for="passwordB">Confirm password</label>
                  </div>
                </div>
              </div>
            </div>
            <input type="submit" name="install" class="btn btn-primary btn-block" href="" value="Install">
          </form>
          <div class="text-center">
            <br>
            Not sure what to do? <a class="d-block small" href="https://github.com/appzaib/acix/">Contact Developers</a>
          </div>
        </div>
      </div>
    </div>
    <?php
      include (ABSPATH.APPINC."/modules/footer-scripts.php");
    ?>
 </body>
</html>
