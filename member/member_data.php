<?php include "includes/header.php" ?>

<div id="wrapper">

        <!-- Navigation -->
    <?php include "includes/navigation.php" ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                   <h1 class="page-header">
                            <small>Member's Records</small>
                    </h1>
                    <?php 
                    if (isset($_GET['source'])) {
                        $source=$_GET['source'];
                    }else{
                        $source="";
                    }

                        switch ($source) {
                            case 'view_all_task':
                                include("includes/view_all_task.php");
                                break;
                            case 'view_all_patient_details':
                                include("includes/view_all_patient_details.php");
                                break;

                            case 'add_member':
                                    include("includes/add_member_data.php");
                                    break;
                            case 'edit_patient':
                                    include("includes/edit_patient_health_data.php");
                                    break;
                                default:
                                include("includes/view_all_patient_data.php");
                                break;
                        }

                     ?>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include "includes/footer.php" ?>
   