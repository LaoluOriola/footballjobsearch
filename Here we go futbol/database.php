<!DOCTYPE html>
<html lang="en">
<head>
<body>
<?php
$servername = "sql107.epizy.com";
$username = "epiz_33782235";
$password = "bTcAbg6O01iPz";
$dbname = "epiz_33782235_herewegofutbol";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
if (!isset($_REQUEST["email"])) {
  echo "No email entered!";
  exit(); }
if (!isset($_REQUEST["password"])) {
  echo "No password entered!";
  exit(); }
echo "Connected successfully";
print "Welcome {$_REQUEST["email"]}<BR>";
?>
</body>