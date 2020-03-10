<?php include "includes/header.php" ?>

<div id="wrapper">

        <!-- Navigation -->
    <?php include "includes/navigation.php" ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                   <h1 class="page-header">
                            Members
                            <small></small>
                    </h1>
                    <?php 
                    if (isset($_GET['source'])) {
                        $source=$_GET['source'];
                    }else{
                        $source="";
                    }

                        switch ($source) {
                            case 'view_all_member':
                                include("includes/view_all_member.php");
                                break;

                            case 'add_member':
                                    include("includes/add_member.php");
                                    break;
                            case 'assign_member':
                                    include("includes/assign_member.php");
                                    break;
                                default:
                                include("includes/view_all_member.php");
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
   