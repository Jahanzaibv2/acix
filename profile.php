<?php

session_start();

  if (isset($_SESSION['user_id'])) {

    require ('load.php');
    require (ABSPATH.'/admin/scripts/getuserinfo.php');
    require (ABSPATH.'/admin/scripts/update-profile.php');


  $PAGE_TITLE  = "Profile";
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
  <body id="page-top">
    <?php require (ABSPATH.APPINC."/modules/nav.php"); ?>
    <div id="wrapper">
      <?php require (ABSPATH.APPINC."/modules/sidebar.php"); ?>
      <div id="content-wrapper">
        <div class="container-fluid">
          <?php require (ABSPATH.APPINC."/modules/breadcrumbs.php"); ?>
          <h1>Welcome, <?php echo $fullName; ?></h1>
          <hr>
          <p>Here you'll see all stuff specific to you.</p>
        </div>
        <div class="card card-register mx-auto mt-5">
          <div class="card-header bg-dark text-white"> <i class="fa fa-edit"></i> Edit your Account Information</div>
          <div class="card-body">
            <form class="" action="" method="post">
              <div class="form-group">
                <div class="form-label-group">
                  <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Your Name" value="<?php echo $fullName; ?>" required="required" autofocus>
                  <label for="fullname">Your Name</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
                  <input type="text" name="username" id="username" class="form-control" placeholder="Your Username" value="<?php echo $username; ?>" required="required" autofocus>
                  <label for="username">Your Username</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
                  <input type="email" name="email" id="email" class="form-control" placeholder="Your Email address" value="<?php echo $email; ?>" required="required" autofocus>
                  <label for="email">Your Email Address</label>
                </div>
              </div>
              <hr>
              <div class="text-center">
                Is it really you, <?php echo $fullName; ?>?
              </div>
              <hr>
              <div class="form-group">
                <div class="form-label-group">
                  <input type="password" name="password" id="password" class="form-control" placeholder="Enter your Password for confirmation" required="required" autofocus>
                  <label for="password">Enter your Password for confirmation</label>
                </div>
              </div>
              <input type="submit" name="update-profile" class="btn btn-primary btn-block" href="" value="Update">
            </form>
            <br>
          </div>
        </div>
        <br><br>
        <br><br><br>
        <?php require (ABSPATH.APPINC.'/modules/footer.php'); ?>
      </div>
    </div>
    <?php
      include (ABSPATH.APPINC.'/modules/scroll-to-top.php');
      require (ABSPATH.APPINC.'/modules/modal-logout.php');
      require (ABSPATH.APPINC.'/modules/modal-add-sale.php');
      require (ABSPATH.APPINC.'/modules/modal-add-product.php');
      require (ABSPATH.APPINC.'/modules/modal-add-product-type.php');
      require (ABSPATH.APPINC.'/modules/modal-add-brand.php');
      require (ABSPATH.APPINC.'/modules/modal-add-vendor.php');
      require (ABSPATH.APPINC.'/modules/modal-add-expense-account.php');
      include (ABSPATH.APPINC."/modules/footer-scripts.php");
    ?>
  </body>
</html>

<?php
}else {
  header('location: login.php');
}

?>
