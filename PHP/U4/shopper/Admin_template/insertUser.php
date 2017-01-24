<?php

include('check_active_session.php');
include('connection.php');


  $firstName = mysqli_real_escape_string($connection, $_POST['firstName']);
  $lastName = mysqli_real_escape_string($connection, $_POST['lastName']);
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $password = mysqli_real_escape_string($connection, $_POST['password']);
  $pass = md5($password);

 $sql = "INSERT INTO usuarios (usuario, nombre, apellido, password) VALUES ('$email', '$firstName', '$lastName', '$pass')";
 if (!mysqli_query($connection, $sql)) {
   die('Error: '.mysqli_connect_errno($connection));
 }else {
   header("location: usuarios.php");
  }

  mysqli_close($connection);

?>
