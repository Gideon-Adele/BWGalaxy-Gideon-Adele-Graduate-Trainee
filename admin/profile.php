<?php include "includes/header.php" ?>
<?php 
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $query ="SELECT * FROM users WHERE username = '{$username}'";
    $select_profile = mysqli_query($connection, $query);

    foreach ($select_profile as $value) {
        $user_id =$value['user_id'];
        $username =$value['username'];
        $user_firstname =$value['user_firstname'];
        $user_lastname=$value['user_lastname'];
        $user_email =$value['user_email'];
        $user_role =$value['role'];
        $user_password =$value['user_password'];
    }
}


    if (isset($_POST['edit_profile'])) {
        $username=$_POST['username'];
        $user_firstname=$_POST['user_firstname'];
        $user_lastname =$_POST['user_lastname'];
        $user_role=$_POST['user_role'];
        $user_password=$_POST['user_password'];
        $post_image=$_FILES['image']['name'];
        $post_image_temp =$_FILES['image']['tmp_name'];
        $user_email=$_POST['user_email'];
        
        

        $query ="UPDATE users SET 
        username = '$username', user_firstname = '$user_firstname',
        user_lastname = '$user_lastname', user_email = '$user_email', user_password = '$user_password', role = '$user_role' WHERE username = '{$username}'";
        $update_user_query = mysqli_query($connection, $query);

        if (!$update_user_query) {
            die("connection failed".mysqli_error($connection));
        }
    }

 ?>

<div id="wrapper">

        <!-- Navigation -->
    <?php include "includes/navigation.php" ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                   <h1 class="page-header">
                            ADMIN DASHBOARD
                            <small>Author</small>
                    </h1>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="username">User Name</label>
        <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
    </div>
    <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" name="user_firstname" class="form-control" value="<?php echo $user_firstname; ?>">
    </div>

    <div class="form-group">
        <label for="Surname">Last Name</label>
        <input type="text" name="user_lastname" class="form-control" value="<?php echo $user_lastname; ?>">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="user_email" class="form-control" value="<?php echo $user_email; ?>">
    </div>
    <div class="form-group">
        <label for="email">User Role</label>
        <select class="form-control" name="user_role">
            <option value="<?php echo $user_role; ?>">Select Options</option>
            <option value="Admin">Admin</option>
            <option value="Subscriber">Subscriber</option>
        </select>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="user_password" class="form-control" value="<?php echo $user_password; ?>">
    </div>
    <div class="form-group">
        <label for="Image">Passport</label>
        <input type="file" name="user_image">
    </div>
    <div class="form-group">
        <input type="submit" name="edit_profile" class="btn btn-primary" value="Edit Profile">
    </div>
    
</form>
                    

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include "includes/footer.php" ?>
   