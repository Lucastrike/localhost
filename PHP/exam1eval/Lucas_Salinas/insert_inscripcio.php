<?php

include('check_active_session.php');
include('connection.php');


  $dni = mysqli_real_escape_string($connection, $_POST['dni']);
  $cod_sport = mysqli_real_escape_string($connection, $_POST['cod_sport']);
  $curs = mysqli_real_escape_string($connection, $_POST['curs']);
  $quota = mysqli_real_escape_string($connection, $_POST['quota']);

 $sql = "INSERT INTO inscripcions (dni, cod_sport, curs, quota) VALUES ('$dni', '$cod_sport', '$curs', '$quota')";
 if (!mysqli_query($connection, $sql)) {
   die('Error: '.mysqli_connect_errno($connection));
 }else {
   header("location: inscripcions.php");
  }

  mysqli_close($connection);

?>
