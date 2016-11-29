<?php

include('check_active_session.php');
include('connection.php');


  $tipo = mysqli_real_escape_string($connection, $_POST['tipo']);

 $sql = "INSERT INTO tipo (tipo) VALUES ('$tipo')";
 if (!mysqli_query($connection, $sql)) {
   die('Error: '.mysqli_connect_errno($connection));
 }else {
   header("location: tipo.php");
  }

  mysqli_close($connection);

?>
