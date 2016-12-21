<?php
error_reporting(E_ALL);
ini_set("display_errors","1");
  include 'conexion.php';
  $user = $_GET['user'];
  $selectusu="SELECT * FROM `Usuario`";
  $consulta =  mysqli_query($conexion,$selectusu);
  while ($usuarios=mysqli_fetch_array($consulta)) {
    if($user==$usuarios['username']){
    echo "El usuario ya existe";
    }
   }
 ?>
