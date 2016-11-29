<?php

include('check_active_session.php');
include('connection.php');


  $cod_esport = mysqli_real_escape_string($connection, $_POST['cod_esport']);
  $esport = mysqli_real_escape_string($connection, $_POST['esport']);
  $preu = mysqli_real_escape_string($connection, $_POST['preu']);

 $sql = "INSERT INTO esports (cod_esport, esport, preu) VALUES ('$cod_esport', '$esport', '$preu')";
 if (!mysqli_query($connection, $sql)) {
   die('Error: '.mysqli_connect_errno($connection));
 }else {
   header("location: esports.php");
  }

  mysqli_close($connection);

?>
