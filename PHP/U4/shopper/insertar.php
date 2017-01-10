<?php

include ("connection.php");

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$pass = md5($password);

$query = mysqli_query($connection,"SELECT email FROM usuario_tienda WHERE email='$email';");

if (mysqli_num_rows($query) == 0) {
  mysqli_query($connection, "INSERT INTO `usuario_tienda`(`nombre`, `email`, `password`) VALUES ('$username','$email','$pass');")
}

echo "Bienvenido";

 ?>
