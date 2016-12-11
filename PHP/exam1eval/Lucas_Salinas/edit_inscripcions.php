<?php

error_reporting(E_ALL);
ini_set("display_errors", "1");

include 'connection.php';
include('check_active_session.php');

if ($_GET['funcion'] == "delete") {
  $editId = $_GET['id'];
  mysqli_query($connection, "DELETE FROM `inscripcions` WHERE `cod_inscripcio` = '$editId'");
  header('location: inscripcions.php');
}
else {
  $cod_inscripcio = $_POST['cod_inscripcio'];
  $dni = $_POST['dni'];
  $cod_esport = $_POST['cod_esport'];
  $curs = $_POST['curs'];
  $quota = $_POST['quota'];

  mysqli_query($connection, "UPDATE `inscripcions` SET `dni`='$dni', `cod_esport`='$cod_esport', `curs`='$curs', `quota`='$quota' WHERE `cod_inscripcio`='$cod_inscripcio';");
  header('location: inscripcions.php');
}

 ?>
