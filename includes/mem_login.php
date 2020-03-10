<?php  include "db.php"; ?>
<?php 
session_start();
if (isset($_POST['mem_login'])) {
  $email = $_POST['email'];
  $password =$_POST['password'];

  $email = mysqli_real_escape_string($connection, $email);
  $password = mysqli_real_escape_string($connection, $password);
}
$query = "SELECT * FROM bw_galaxy.member WHERE email = '$email'";
$select_mem_query = mysqli_query($connection, $query);

foreach ($select_mem_query as $value) {
  $db_mem_id =$value['id'];
  $db_mem_name =$value['member_name'];
  $db_specialization =$value['specialization'];
  $db_licensenumber =$value['licensenumber'];
  $db_mem_email =$value['email'];
  $db_mem_password =$value['password'];
}
if ($email === $db_mem_email and $password===$db_mem_password) {
  $_SESSION['email'] =$db_mem_email;
  $_SESSION['id']=$db_mem_id;
  $_SESSION['member_name']=$db_mem_name;
  header("location: ../member/index.php");
}else{
  header("location: ../member_login.php");
}
?>