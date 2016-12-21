<?php
  $conexion = mysqli_connect("localhost","root","bbdd","Usuario");
  if(mysqli_connect_errno()){
    echo "Conexion Fallida: ".mysqli_connect_error();
  }

 ?>
