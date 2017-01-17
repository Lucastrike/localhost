<?php
error_reporting(E_ALL);
ini_set("display_errors", "1");

session_start();
include ("connection.php");

$usernameLogin = $_POST["usernameLogin"];
$passwordLogin = $_POST["passwordLogin"];
$passw = md5($passwordLogin);

$query = mysqli_query($connection,"SELECT * FROM usuario_tienda;");

while ($fila = mysqli_fetch_array($query)) {
  if ($usernameLogin == $fila['email'] && $passw == $fila['password']) {
    $_SESSION['usuario']=$email;
    echo " Bienvenido"." ".$usernameLogin;
  } else {
    //echo " No cuela, registrate!";
    echo $passw;
  }
}

 ?>
