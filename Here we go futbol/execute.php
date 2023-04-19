<!DOCTYPE html>
<html lang="en">
<head>
<body>
<?php 
session_start();
include('database.php');
$username=$_POST['email'];
$result = mysqli_query($con,"SELECT * FROM Usertable WHERE email='$email'");
$num_rows = mysqli_num_rows($result);
if ($num_rows) {
 header("location: signuppage.php?remarks=failed"
        ); 
}else {
 $FirstName=$_POST['FirstName'];
 $Surname=$_POST['Surname'];
 $Email=$_POST['Email'];
 $Password=$_POST['Password'];
 if(mysqli_query($con,"INSERT INTO Usertable (FirstName, Surname, Email, Password)VALUES('$FirstName', '$Surname','$Email', '$Password')")){ 
 header("location: signuppage.php?remarks=success");
 }else{
  $e=mysqli_error($con);
 header("location: signuppage.php?remarks=error&value=$e");  
 }
}
?>
</body>