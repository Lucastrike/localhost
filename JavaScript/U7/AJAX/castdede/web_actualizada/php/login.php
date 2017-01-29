<?php
error_reporting(E_ALL);
ini_set("display_errors", "1");

session_start();
include ("connection.php");

$email = $_POST["email"];
$password = $_POST["password"];
$passw = md5($password);

$rowQuery = "SELECT * FROM users WHERE email='$email' AND password='$passw'";

$query = mysqli_query($connection, $rowQuery);

if ($row = mysqli_fetch_array($query)) {
  $_SESSION['loggedin']=true;
  $_SESSION['userID']=$row[0];
  $_SESSION['user']=$email;
  $_SESSION['name']=$row[1];
  echo $_SESSION['name'];
} else {
  echo "0";
}

 ?>
