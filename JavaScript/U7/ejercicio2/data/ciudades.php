<?php
error_reporting(E_ALL);
ini_set("display_errors","1");
include 'conexion.php';
if($_GET['valencia']=="Valencia"){
  $sqlregion1 = "SELECT * FROM `region` WHERE name='Valencia'";
  $consulta1 = mysqli_query($conexion,$sqlregion1);
  while ($region1=mysqli_fetch_array($consulta1)) {
    $idregion1 = $region1[0];
  }
  $consultacity1 = mysqli_query($conexion,"SELECT name FROM `city` WHERE id_region='$idregion1'");
  while ($ciudades1=mysqli_fetch_array($consultacity1)) {
    echo '<option>'.$ciudades1[0].'</option>';
  }
}
else {
  $regionget = $_GET['regioncities'];
  $sqlregion = "SELECT * FROM `region` WHERE name='$regionget'";
  $consulta = mysqli_query($conexion,$sqlregion);
  while ($region=mysqli_fetch_array($consulta)) {
    $idregion = $region[0];
  }

  $consultacity = mysqli_query($conexion,"SELECT name FROM `city` WHERE id_region='$idregion'");
  while ($ciudades=mysqli_fetch_array($consultacity)) {
    echo '<option>'.$ciudades[0].'</option>';
  }
}



 ?>
