<?php include("admin_header.php"); ?>

    <div id="wrapper">

     <?php include("navigation.php"); ?>
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome To Admin Page
                            <small><?php echo $_SESSION['username']; ?></small>
                        </h1>
                  
                    </div>
                </div>
                

                <!-- /.row -->
                
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-fw fa-users fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                  <div class='huge'>
                      
                   <?php
                    
                    $sql = "SELECT * FROM users ";
                    $result = $conn->query($sql);
                    $num_of_users = $result->num_rows;

                    echo $num_of_users; 

                    ?>


                  </div>
                        <div>Users</div>
                    </div>
                </div>
            </div>
            <a href="view_users.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-fw fa-briefcase fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                     <div class='huge'>
                         
                         <?php
                           
                           $sql = "SELECT * FROM jobs ";
                           $result = $conn->query($sql);
                           $num_of_jobs = $result->num_rows;

                           echo $num_of_jobs;


                          ?>

                     </div>
                      <div>Jobs</div>
                    </div>
                </div>
            </div>
            <a href="view_jobs.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <div class='huge'>
                         
                         <?php
                           
                           $sql = "SELECT * FROM candidates ";
                           $result = $conn->query($sql);
                           $num_of_candidates = $result->num_rows;

                           echo $num_of_candidates;


                          ?>

                     </div>
                        <div>Candidates</div>
                    </div>
                </div>
            </div>
            <a href="view_candidates.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-list fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class='huge'>
                         
                         <?php
                           
                           $sql = "SELECT * FROM specialization";
                           $result = $conn->query($sql);
                           $num_of_specializations = $result->num_rows;

                           echo $num_of_specializations;


                          ?>

                     </div>
                         <div>Specializations </div>
                    </div>
                </div>
            </div>
            <a href="specialization.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
                <!-- /.row -->

                <div class="row">
                    
                 <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Users', 'Jobs', 'Candidates'],
          
          
                <?php 

        
         $element_count = ['2018',$num_of_users, $num_of_jobs, $num_of_candidates];

       

            echo "['$element_count[0]'".","."'$element_count[1]'".","."'$element_count[2]'".","."'$element_count[3]'],";
         



          ?>
        ]);

        var options = {
          chart: {
            title: '',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

    <div id="columnchart_material" style="width: auto; height: 500px;"></div>


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
