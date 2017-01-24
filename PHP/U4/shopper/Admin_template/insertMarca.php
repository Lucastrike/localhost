<?php

include('check_active_session.php');
include('connection.php');


  $marca = mysqli_real_escape_string($connection, $_POST['marca']);

 $sql = "INSERT INTO marca (marca) VALUES ('$marca')";
 if (!mysqli_query($connection, $sql)) {
   die('Error: '.mysqli_connect_errno($connection));
 }else {
   header("location: marca.php");
  }

  mysqli_close($connection);

?>
