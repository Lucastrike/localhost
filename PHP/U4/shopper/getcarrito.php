<?php

include('connection.php');

$img = $_POST['img'];
$marca = $_POST['marca'];
$tipo = $_POST['tipo'];
$precio = $_POST['precio'];
$codigo_usuario = $_POST['codigo_usuario'];

echo $img." ".$marca." ".$tipo." ".$precio." ".$codigo_usuario;

mysqli_query($connection,"INSERT INTO `cesta_temporal`(`Marca`, `descripcion`, `precio`, `foto`, `codigo_usuario`) VALUES ('$marca','$tipo','$precio','$img','$codigo_usuario');");

 ?>
