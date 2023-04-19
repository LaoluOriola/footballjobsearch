<!DOCTYPE html>
<html lang="en">
<head>
<body>
<?php
include("database.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
 $email=mysqli_real_escape_string($con,$_POST['email']);
 $password=mysqli_real_escape_string($con,$_POST['password']);
 $result = mysqli_query($con,"SELECT * FROM Usertable");
 $c_rows = mysqli_num_rows($result);
 if ($c_rows!=$email) {
  header("location: loginpage.php?remark_login=failed");
 }
 $sql="SELECT UserId FROM Usertable WHERE email='$email' and password='$password'";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($result);
 $active=$row['active'];
 $count=mysqli_num_rows($result);
 if($count==1) {
  $_SESSION['login_user']=$username;
  header("location: welcome.php");
 }
}
?>
</body>