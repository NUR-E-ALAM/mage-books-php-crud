<?php ob_start(); ?>
<?php include("header.php"); ?>
        <!-- partial:partials/_sidebar.html -->
      <?php include("sidebar.php"); ?>
        <!-- partial -->
<?php
require "database.php";
$id = $_GET['id'];
$sql = "SELECT * FROM books WHERE id = $id";
$result = $conn->query($sql);
$row = mysqli_fetch_row($result);


if (isset($_POST['update'])){

  move_uploaded_file($_FILES['image']['tmp_name'],"bookimages/".$_FILES['image']['name']);
	$book_name = $_POST['book_name'];
	$book_info = $_POST['book_info'];
	$writer_id = $_POST['writer_id'];
  $book_image =$_FILES['image']['name'];
  $status = $_POST['status'];

	// update single data
  if (!$book_image){
$updateQuery ="UPDATE books SET book_name='$book_name',book_info='$book_info',writer_id='$writer_id',status='$status' WHERE id= '$id'";
}
else{
  $updateQuery ="UPDATE books SET book_name='$book_name',book_info='$book_info',writer_id='$writer_id',images='$book_image',status='$status' WHERE id= '$id'";
}
mysqli_query($conn, $updateQuery);

header("Location:show_book.php");
}




?>
  <div class="content-wrapper">
          <div class="col-12 col-lg-12 grid-margin">
                  <div class="card">
                      <div class="card-body">
                        <?php
                        //  print_r($row);
                        // print_r($updateQuery);

                        
                        ?>
                        
                          <h2 class="card-title">Book Update Form</h2>

                                    <form class="forms-sample" method="post"  enctype="multipart/form-data" >
                          <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                              <div class="form-group row">
                                  <label for="exampleInputEmail2" class="col-sm-4 col-form-label">Book Name</label>
                                  <div class="col-sm-8">
                                    <input type="text" name="book_name" class="form-control p-input" id="exampleInputEmail2" aria-describedby="emailHelp2" placeholder="Writer_name" value="<?php echo $row[1] ?>">
                                  </div>
                                 
                              </div>
                           
                              <div class="form-group row">
                                  <label for="exampleTextarea2" class="col-sm-4 col-form-label">Book Information</label>
                                  <div class="col-sm-8">
                                    <textarea class="form-control p-input" id="exampleTextarea2" name="book_info" placeholder="Writer Information" rows="9"><?php echo $row[2];?></textarea>
                                  </div>
                              </div>

                              


                             

                              <div class="form-group row mb-4">
                                  <label class="col-sm-4 col-form-label">Book Image</label>
                                  <div class="col-sm-8">
                                    <label for="exampleInputFile" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Upload file</label>
                                    <input type="file" class="form-control-file" value="<?php echo $row[5]; ?>" name="image" id="exampleInputFile" aria-describedby="fileHelp2">
                                   <img height='80px' width='100px' src='bookimages/<?php echo $row[5] ?>'>
                                  </div>
                                  
                              </div>



<!-- dropdown writer start -->
<div class="form-group row">
                                  <label  class="col-sm-4 col-form-label">Writer Name</label>
                                  <div class="col-sm-8">

                              <select name="writer_id">
                              <option value="">Select Writer</option>
                              <?php

                              $sql = "SELECT * FROM writers";
                              $result = $conn->query($sql);

                              if ($result->num_rows > 0) {
                                  // output data of each row
                                  while($rows = $result->fetch_assoc()) {?> 
                                                            
                                    <option value="<?php echo $rows['id']; ?>" <?php if($row[3]==$rows['id']){echo "selected";} ?>><?php  echo $rows['writer_name']; ?></option>
                                    
                                    
                                    <?php
                                  }
                              } 

                              ?>
    </select>

 </div>
                              </div>
<!-- dropdown writer end -->




<!-- radio button start -->

<div class="form-group row mb-4">
                              <label class="col-sm-4 col-form-label">Status</label>
                                  <div class="col-sm-8">
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="status" id="optionsRadios1" value="1" <?php echo ($row[4]==1)?'checked':'' ?>>
                                    Active
                                    </label>
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="status" id="optionsRadios1" value="2" <?php echo ($row[4]==2)?'checked':'' ?>>
                                      In-Active
                                    </label>
                                  </div>
                            
                              </div>

<!-- radio button end -->


                             
                          
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
