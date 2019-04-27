<?php include("admin_header.php"); ?>

    <div id="wrapper">

     <?php include("navigation.php"); ?>
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Candidates List
                            <small><?php echo $_SESSION['username']; ?></small>
                        </h1>
                  
                    </div>
                </div>
                <!-- /.row -->

         
                      <div class="col-lg-12">
                   <table class="table table-bordered table-hover table-responsive">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>Degree</th>
                            <th>Specialization</th>
                            <th>Experience</th>
                            <th>Image</th>
                            <th>Posting Data</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                            <?php 
           
                  $sql = "SELECT * FROM candidates ORDER BY Id ASC";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      // output data of each row
                    while($row = $result->fetch_assoc()) {
                        $id = $row["Id"];
                        $name = $row["Name"];
                        $email = $row["Email"];
                        $mbile = $row["Mobile_num"];
                        $deg = $row["Degree"];
                        $spcl = $row["Specialization"];
                        $exp = $row["Experience"]; 
                        $img = $row["Image"];
                        $date = $row["Post_date"];
                        echo 
                          '<tr>'.
                          '<td>'.$id.'</td>'.
                          '<td>'.$name.'</td>'.
                          '<td>'.$email.'</td>'.
                          '<td>'.$mbile.'</td>'.
                          '<td>'.$deg.'</td>'.
                          '<td>'.$spcl.'</td>'.
                          '<td>'.$exp.'</td>'.
                          '<td><img width="50" src=../uploads/'.$img.'>'.'</td>'.
                          '<td>'.$date.'</td>'.
                          '<td>'.'<a href=view_candidates.php?delete_cnd='.$id.'>Delete</a></td>
                        </tr>';

              }
            }
          ?>

   <?php 

             if (isset($_GET['delete_cnd'])) {
                
                $cnd_id = $_GET['delete_cnd'];

                $sql = "DELETE FROM candidates WHERE Id = ".$cnd_id;
                $delete = $conn->query($sql);
                if ($conn->query($sql) === FALSE) {
                            die($conn->error);
                        }
                header("Location: view_candidates.php");
             }
   


          ?>
   
                            
                 
                    </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>