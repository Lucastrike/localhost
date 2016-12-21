<?php
error_reporting(E_ALL);
ini_set("display_errors","1");
  include 'conexion.php';
  $sqlregion = "SELECT * FROM region";
  $consulta = mysqli_query($conexion,$sqlregion);
  while ($region=mysqli_fetch_array($consulta)) {
    echo '<option>'.$region[1].'</option>';
  }
 ?>
