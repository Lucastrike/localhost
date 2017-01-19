<?php
error_reporting(E_ALL);
ini_set("display_errors", "1");

session_start();
include ("connection.php");

$usernameLogin = $_POST["usernameLogin"];
$passwordLogin = $_POST["passwordLogin"];
$passw = md5($passwordLogin);

$query  = mysqli_query($connection, "SELECT * FROM usuario_tienda WHERE email='$usernameLogin' AND password='$passwordLogin';");

if (mysqli_fetch_array($query)) {
  $_SESSION['usuario']=$usernameLogin;
  $_SESSION['loggedin']=true;
  echo " Bienvenido ".$usernameLogin;
} else {
  echo " No cuela, registrate!";
}

 ?>
