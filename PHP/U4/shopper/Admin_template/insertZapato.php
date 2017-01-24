<?php

include('check_active_session.php');
include('connection.php');


  $tipo = mysqli_real_escape_string($connection, $_POST['tipo']);
  $marca = mysqli_real_escape_string($connection, $_POST['marca']);
  $modelo = mysqli_real_escape_string($connection, $_POST['modelo']);
  $precio = mysqli_real_escape_string($connection, $_POST['precio']);
  $descripcion = mysqli_real_escape_string($connection, $_POST['descripcion']);

  $tipocodquery = mysqli_query($connection, "SELECT codigo FROM `tipo` WHERE tipo='$tipo'");
  while ($row1 = mysqli_fetch_array($tipocodquery)) {
    $tipocod = $row1['codigo'];
  }

  $marcacodquery = mysqli_query($connection, "SELECT codigo FROM `marca` WHERE marca='$marca'");
  while ($row2 = mysqli_fetch_array($marcacodquery)) {
    $marcacod = $row2['codigo'];
  }

 $sql = "INSERT INTO zapatos (tipo, marca, modelo, precio, descripcion) VALUES ('$tipocod', '$marcacod', '$modelo', '$precio', '$descripcion')";
 if (!mysqli_query($connection, $sql)) {
   die('Error: '.mysqli_connect_errno($connection));
 }else {
   header("location: zapatos.php");
  }

?>
