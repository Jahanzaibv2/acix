<?php
  include (ABSPATH.'/admin/scripts/get-vendors.php');
?>
<!-- Vendors Table -->
<div class="card mb-3">
  <div class="card-header bg-primary text-white">
    <i class="fa fa-table"></i>
    Product Vendors
    <a href="#" class="text-white" data-toggle="modal" data-target="#addProductVendorModal">
      <span class="float-right">
        <i class="fa fa-plus"></i>
        Add New Vendor
      </span>
    </a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Vendor ID</th>
            <th>Vendor Name</th>
            <th>Description</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Date Created</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Vendor ID</th>
            <th>Vendor Name</th>
            <th>Description</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Date Created</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
            while ($row = mysqli_fetch_array($res)) {
              $vendorID = $row['id'];
              $vendorName = $row['name'];
              $vendorPhone = $row['phone'];
              $vendorEmail = $row['email'];
              $vendorDesc = $row['description'];
              $dateCreated = $row['date_created'];

              ?>

              <tr>
                <td><?php echo $vendorID; ?></td>
                <td><?php echo $vendorName; ?></td>
                <td><?php echo $vendorDesc; ?></td>
                <td><?php echo $vendorPhone; ?></td>
                <td><?php echo $vendorEmail; ?></td>
                <td><?php echo $dateCreated; ?></td>
                <td class="text-center"> <a href="edit-vendors.php?vendor=<?php echo $vendorID; ?>">Edit</a> </td>
              </tr>
              <?php
            }

          ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
</div>
