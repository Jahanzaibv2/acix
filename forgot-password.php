<?php

session_start();

  if (isset($_SESSION['user_id'])) {

 // Won't use in MVP
  header('location: /');
  require ('load.php');


  $PAGE_TITLE  = "Request a New Password";
  $PAGE_DESC   = "...";
  $PAGE_AUTHOR = "...";

?>
<!DOCTYPE html>
<html lang="en">
  <?php
    require (ABSPATH.'/admin/scripts/add-sale.php');
    require (ABSPATH.'/admin/scripts/add-product.php');
    require (ABSPATH.'/admin/scripts/add-vendor.php');
    require (ABSPATH.'/admin/scripts/add-product-type.php');
    require (ABSPATH.'/admin/scripts/add-brand.php');
    require (ABSPATH.'/admin/scripts/add-expense-account.php');
    require (ABSPATH.'/admin/scripts/add-expense.php');
    require (ABSPATH.APPINC."/modules/head.php");
  ?>
  <body class="bg-dark">
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header bg-primary text-white">Reset Password</div>
        <div class="card-body">
          <div class="text-center mb-4">
            <h4>Forgot your password?</h4>
            <p>Enter your email address and we will send you instructions on how to reset your password.</p>
          </div>
          <form>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Enter email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Enter email address</label>
              </div>
            </div>
            <a class="btn btn-primary btn-block" href="login.php">Reset Password</a>
          </form>
          <hr>
          <div class="text-center">
            <br>
            <a class="d-block small" href="login.php">Go to Login Page</a>
            <br>
            OR
            <a class="d-block small mt-3" href="https://github.com/appzaib/acix">Contact developers</a>
          </div>
        </div>
      </div>
    </div>
    <?php
      include (ABSPATH.APPINC."/modules/footer-scripts.php");
    ?>
  </body>
</html>

<?php
}else {
  header('location: login.php');
}

?>
