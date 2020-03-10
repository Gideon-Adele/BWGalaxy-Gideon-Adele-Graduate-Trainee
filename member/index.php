<?php include "includes/header.php" ?>
    <div id="wrapper">
<!-- Navigation -->
<?php include "includes/navigation.php" ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                             Welcome
                            <small>
                            <?php

                             /*$d_id= $_SESSION['doctor_id'];
                             $query_doc ="SELECT * FROM hospital_a.doctors WHERE doctor_id ='$d_id'";
                             $select_doc = mysqli_query($connection, $query_doc);
                             foreach ($select_doc as $value) {
                                       $patient_doctor = $value['doctor_name'];
                                       echo "<i>{$patient_doctor}</i>";

                                       }*/
                                      echo $_SESSION['member_name'];

                             ?>
                        </small>
                        </h1>


                        <div class="row">
    <div class="col-lg-4 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <?php 
                    $query = "SELECT * FROM bw_galaxy.member";
                    $mem_query = mysqli_query($connection, $query);
                    $count_mem = mysqli_num_rows($mem_query);
                    echo "<div class='huge'>{$count_mem}</div>";

                     ?>

                        <div>Members</div>
                    </div>
                </div>
            </div>
            <a href="doctors.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <?php 
                    $query = "SELECT * FROM bw_galaxy.member";
                    $mem_query = mysqli_query($connection, $query);
                    $count_mem = mysqli_num_rows($mem_query);
                    echo "<div class='huge'>{$count_mem}</div>";

                     ?>
                      <div>Member</div>
                    </div>
                </div>
            </div>
            <a href="nurse.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <?php 
                    $query = "SELECT * FROM bw_galaxy.member";
                    $mem_query = mysqli_query($connection, $query);
                    $count_mem = mysqli_num_rows($mem_query);
                    echo "<div class='huge'>{$count_mem}</div>";

                     ?>
                        <div>Member</div>
                    </div>
                </div>
            </div>
            <a href="users.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
                        


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include "includes/footer.php" ?>
   