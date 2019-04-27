<?php include("admin_header.php"); ?>

    <div id="wrapper">

     <?php include("navigation.php"); ?>
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Jobs List
                            <small><?php echo $_SESSION['username']; ?></small>
                        </h1>
                  
                    </div>
                </div>
                <!-- /.row -->

         
                      <div class="col-lg-12">
                   <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Qualification Required</th>
                            <th>Specialization Required</th>
                            <th>Experience Required</th>
                            <th>Estimated Package</th>
                            <th>Skill 1</th>
                            <th>Skill 2</th>
                            <th>Skill 3</th>
                            <th>Skill 4</th>
                            <th>Logo</th>
                            <th>Posting Data</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                            <?php 
           
                  $sql = "SELECT * FROM jobs ORDER BY Post_date DESC";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      // output data of each row
                    while($row = $result->fetch_assoc()) {
                        $cmp_id = $row["comp_id"];
                        $cmp_name = $row["comp_name"];
                        $cmp_email = $row["comp_email"];
                        $cmp_qual = $row["comp_qualification"];
                        $cmp_spcl = $row["comp_specialization"];
                        $cmp_exp = $row["comp_experience"]; 
                        $cmp_pckg = $row["comp_salary"];
                        $cmp_skill1 = $row["comp_skill1"];
                        $cmp_skill2 = $row["comp_skill2"];
                        $cmp_skill3 = $row["comp_skill3"];
                        $cmp_skill4 = $row["comp_skill4"];
                        $cmp_logo = $row["comp_logo"];
                        $cmp_date = $row["Post_date"];
                        echo 
                          '<tr>'.
                          '<td>'.$cmp_id.'</td>'.
                          '<td>'.$cmp_name.'</td>'.
                          '<td>'.$cmp_email.'</td>'.
                          '<td>'.$cmp_qual.'</td>'.
                          '<td>'.$cmp_spcl.'</td>'.
                          '<td>'.$cmp_exp.'</td>'.
                          '<td>'.$cmp_pckg.'</td>'.
                          '<td>'.$cmp_skill1.'</td>'.
                          '<td>'.$cmp_skill2.'</td>'.
                          '<td>'.$cmp_skill3.'</td>'.
                          '<td>'.$cmp_skill4.'</td>'.
                          '<td><img width="50" src=../uploads/'.$cmp_logo.'>'.'</td>'.
                          '<td>'.$cmp_date.'</td>'.
                          '<td>'.'<a href=view_jobs.php?delete_cmp='.$cmp_id.'>Delete</a></td>
                        </tr>';

              }
            }
          ?>

   <?php 

             if (isset($_GET['delete_cmp'])) {
                
                $cmp_id = $_GET['delete_cmp'];

                $sql = "DELETE FROM jobs WHERE comp_id = ".$cmp_id;
                $delete = $conn->query($sql);
                if ($conn->query($sql) === FALSE) {
                            die($conn->error);
                        }
                header("Location: view_jobs.php");
             }
   


          ?>
   
                            
                 
                    </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>