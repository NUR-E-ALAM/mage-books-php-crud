<?php ob_start(); ?>
<?php include("header.php"); ?>
        <!-- partial:partials/_sidebar.html -->
      <?php include("sidebar.php"); ?>
        <!-- partial -->

       
        <div class="content-wrapper">
          <div class="col-12 col-lg-12 grid-margin">
          <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Advanced Table</h2>
                  <div class="table-responsive">
                    <table class="table center-aligned-table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Information</th>
                          <th>Status</th>
                          <th>Created</th>
                         
                          
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
require "database.php";



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM writers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {?>
                        <tr class="">
        <td><?php echo $row["writer_name"] ?></td>
        <td><?php echo $row["writer_info"] ?></td>
        <td><?php if($row["status"]==1){ echo '<label class="badge badge-success">Active</label>';}
        else{
          echo '<label class="badge badge-danger">Inactive</label>';
        }
        ?></td>
        <td><?php echo $row["created"] ?></td>
        <td><a href="edit_writer.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a></td>
        <td><a href="delete_writer.php?id=<?php echo $row['id']; ?>" onClick="return confirm('Are you absolutely sure you want to delete?')" class="btn btn-danger btn-sm">Remove</a></td>
                        </tr>
                        <?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>
      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
              </div>
          
          
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">Salt Admin</a> &copy; 2017
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="node_modules/flot/jquery.flot.js"></script>
  <script src="node_modules/flot/jquery.flot.resize.js"></script>
  <script src="node_modules/flot/jquery.flot.categories.js"></script>
  <script src="node_modules/flot/jquery.flot.pie.js"></script>
  <script src="node_modules/rickshaw/vendor/d3.v3.js"></script>
  <script src="node_modules/rickshaw/rickshaw.min.js"></script>
  <script src="bower_components/chartist/dist/chartist.min.js"></script>
  <script src="node_modules/chartist-plugin-legend/chartist-plugin-legend.js"></script>
  <script src="node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/settings.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard_1.js"></script>
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:32:50 GMT -->
</html>
