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
                            <small><?php echo $_SESSION['admin_name']; ?> </small>
                        </h1>


                        <div class="row">
    <div class="col-lg-6 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <?php 
                    $query = "SELECT * FROM bw_galaxy.member";
                    $doctor_query = mysqli_query($connection, $query);
                    $count_doctor = mysqli_num_rows($doctor_query);
                    echo "<div class='huge'>{$count_doctor}</div>";

                     ?>

                        <div>Member</div>
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
    <div class="col-lg-6 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <?php 
                    $query = "SELECT * FROM hospital_a.nurse";
                    $nurse_query = mysqli_query($connection, $query);
                    $count_nurse = mysqli_num_rows($nurse_query);
                    echo "<div class='huge'>{$count_nurse}</div>";

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
</div>
                        


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include "includes/footer.php" ?>
   