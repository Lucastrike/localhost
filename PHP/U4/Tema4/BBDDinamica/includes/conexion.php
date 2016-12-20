<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
  </body>
</html>
<?php
error_reporting(E_ALL);
ini_set("display errors", "1");
  $conexion = mysqli_connect("localhost", "root", "bbdd", "bbddDinamica");
  if (mysqli_connect_errno()) {
    echo "No se pudo conectar a la base de datos: ".mysqli_connect_error();
  }
?>
