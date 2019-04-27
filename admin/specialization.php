<?php include("admin_header.php"); ?>

    <div id="wrapper">

     <?php include("navigation.php"); ?>
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Specializations
                            <small><?php echo $_SESSION['username']; ?></small>
                        </h1>
                  
                    </div>
                </div>
                <!-- /.row -->

                <div class="col-xs-6">
                     <form action="specialization.php" method="post">
                     	<div class="form-group">
                     		<label for="spcl_title">Add Specialization</label>
                     		<input type="text" class="form-control" name="spcl_title" required>
                     	</div>

                     	<div class="form-group">
                     		<input class="btn btn-primary" name="submit" value="Add specialization" type="submit">
                     	</div>
                     </form>

                     <?php
           
              if (isset($_GET['update'])) {

              	$update_id = $_GET['update'];

              	$sql = "SELECT special_title FROM specialization WHERE special_id=".$update_id;
              	$result = $conn->query($sql);

              	while($row = $result->fetch_assoc()){

              		$update_title = $row['special_title'];

              	 echo '<form action="" method="post">
                     	<div class="form-group">
                     		<label for="spcl_title">Edit Specialization</label>
                     		<input type="text" class="form-control" value="'. $update_title.'" name="spcl_title" required>
                     	</div>

                     	<div class="form-group">
                     		<input class="btn btn-primary" name="update" value="Update specialization" type="submit">
                     	</div>
                     </form>';


              }
          }



        if(isset($_POST['update'])){

     	$update_title = $_POST['spcl_title'];

        $sql = "UPDATE specialization SET special_title = '$update_title' WHERE special_id =".$update_id;
        $update_table = $conn->query($sql);

                      if ($conn->query($sql) === FALSE) {
						    die($conn->error);
						}

						header("Location: specialization.php");
					

				}
		
		?>
                      

                	<?php 
                      
                      if(isset($_POST['submit'])){

                      	$spcl_title = $_POST['spcl_title'];


                      	if($spcl_title == "" || empty($spcl_title)){
                      		echo "Please fill the specialization";
                      	}
                      
                      else{
                      	$sql = "SELECT * FROM specialization";
						$result = $conn->query($sql);


                      	$sql = "INSERT INTO specialization(special_title) VALUES ('$spcl_title')";
                      
                      if ($conn->query($sql) === FALSE) {
						    die("Error");
						}
                }

		
		}

    ?>




                </div>

                <div class="col-xs-6">
                   <table class="table table-bordered table-hover">
                   	<thead>
                   		<tr>
                   			<th>Id</th>
                   			<th>SpecializationTitle</th>
                   			<th>Delete</th>
                   			<th>Edit</th>
                   		</tr>
                   	</thead>
                   	<tbody>
                   	
                   			<?php 
           
		          $sql = "SELECT * FROM specialization ORDER BY special_id ASC";
		          $result = $conn->query($sql);

		          if ($result->num_rows > 0) {
		              // output data of each row
		            while($row = $result->fetch_assoc()) {
		            	$spcl_id = $row["special_id"];
		            	$spcl_title = $row["special_title"]; 
		                echo 
		                  '<tr>'.
		                  '<td>'.$spcl_id.'</td>'.
		                  '<td>'.$spcl_title.'</td>'.
		                  '<td>'.'<a href=specialization.php?delete='.$spcl_id .'>Delete</a></td>
		                  <td>'.'<a href=specialization.php?update='.$spcl_id .'>Edit</a></td>
		                  </tr>';

              }
            }
          ?>

          <?php 

             if (isset($_GET['delete'])) {
             	
             	$delete_id = $_GET['delete'];

             	$sql = "DELETE FROM specialization WHERE special_id = ".$delete_id;
             	$delete = $conn->query($sql);
             	header("Location: specialization.php");
             }
   


          ?>
                   			
                 
                   	</tbody>
                   </table>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
