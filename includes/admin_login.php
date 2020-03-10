<?php  include "db.php"; ?>
<?php 
session_start();
if (isset($_POST['admin_login'])) {
  $admin_email = $_POST['admin_email'];
  $admin_password =$_POST['admin_password'];

  $admin_email = mysqli_real_escape_string($connection, $admin_email);
  $admin_password = mysqli_real_escape_string($connection, $admin_password);
}
$query = "SELECT * FROM bw_galaxy.admin WHERE admin_email = '$admin_email'";
$select_admin_query = mysqli_query($connection, $query);

foreach ($select_admin_query as $value) {
  $db_admin_id =$value['admin_id'];
  $db_admin_email =$value['admin_email'];
  $db_admin_password =$value['admin_password'];
  $db_admin_name =$value['admin_name'];
}
if ($admin_email === $db_admin_email and $admin_password===$db_admin_password) {
  $_SESSION['admin_email'] =$db_admin_email;
  $_SESSION['admin_name']=$db_admin_name;

  header("location: ../admin/index.php");
}else{
  header("location: ../admin_login.php");
}
?>