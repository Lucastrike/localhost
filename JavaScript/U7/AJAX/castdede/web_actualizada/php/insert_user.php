<?php

error_reporting(E_ALL);
ini_set("display_errors", "1");

include('connection.php');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$pass = md5($password);

$query = mysqli_query($connection,"SELECT email FROM users WHERE email='$email';");

if (mysqli_num_rows($query) == 0) {
  mysqli_query($connection, "INSERT INTO users (`name`,`email`, `password`) VALUES ('$name','$email','$pass');");
  echo " Bienvenido";
} else {
  echo " Usuario ya existente";
}

 ?>
