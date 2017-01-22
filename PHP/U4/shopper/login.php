<?php
error_reporting(E_ALL);
ini_set("display_errors", "1");

session_start();
include ("connection.php");

$usernameLogin = $_POST["usernameLogin"];
$passwordLogin = $_POST["passwordLogin"];
$passw = md5($passwordLogin);

$rowQuery = "SELECT * FROM usuario_tienda WHERE email='$usernameLogin' AND password='$passw'";

$query = mysqli_query($connection, $rowQuery);


if ($fila = mysqli_fetch_array($query)) {
  $_SESSION['loggedin']=true;
  $_SESSION['userID']=$fila[0];
  $_SESSION['usuario']=$usernameLogin;
  echo " (^_^) Bienvenido/a ".$usernameLogin." (^_^)";
} else {
  echo " (=_=) No cuela, registrate! (=_=)";
}

 ?>
