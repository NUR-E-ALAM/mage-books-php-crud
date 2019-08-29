<?php ob_start(); ?>
<?php include("header.php"); ?>
        <!-- partial:partials/_sidebar.html -->
      <?php include("sidebar.php"); ?>
        <!-- partial -->
<?php
require "database.php";
$id = $_GET['id'];
$sql = "SELECT * FROM writers WHERE id = $id";
$result = $conn->query($sql);
$row = mysqli_fetch_row($result);


if (isset($_POST['update'])){
   
	$name = $_POST['writer_name'];
	$info = $_POST['writer_info'];
  $status = $_POST['status'];

	// update single data
	
$updateQuery ="UPDATE writers SET writer_name='$name',writer_info='$info',status='$status' WHERE id= '$id'";
mysqli_query($conn, $updateQuery);

header("Location:show_writer.php");
}

?>
  <div class="content-wrapper">
          <div class="col-12 col-lg-12 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Writer Update Form</h2>

                                    <form class="forms-sample" method="post"  enctype="multipart/form-data" >
                          <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                              <div class="form-group row">
                                  <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Writer Name</label>
                                  <div class="col-sm-8">
                                    <input type="text" name="writer_name" class="form-control p-input" id="exampleInputEmail2" aria-describedby="emailHelp2" placeholder="Writer_name" value="<?php echo $row[1] ?>">
                                  </div>
                                 
                              </div>
                              
                              <div class="form-group row">
                                  <label for="exampleTextarea2" class="col-sm-4 col-form-label">Writer Information</label>
                                  <div class="col-sm-8">
                                    <textarea class="form-control p-input" id="exampleTextarea2" name="writer_info" placeholder="Writer Information" rows="9"><?php echo $row[2];?></textarea>
                                  </div>
                              </div>
                              <div class="form-group row mb-4">
                                  <label class="col-sm-4 col-form-label">Status</label>
                                  <div class="col-sm-8">
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="status" id="optionsRadios1" value="1" <?php echo ($row[3]==1)?'checked':'' ?>>
                                    Active
                                    </label>
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="status" id="optionsRadios1" value="2" <?php echo ($row[3]==2)?'checked':'' ?>>
                                      In-Active
                                    </label>
                                  </div>
                            
                              </div>
                              <input type="submit" name="update" class="btn btn-primary" value="Update">
                          </form>
                          


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
