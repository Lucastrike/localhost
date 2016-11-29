<?php

error_reporting(E_ALL);
ini_set("display_errors", "1");

include 'connection.php';
include('check_active_session.php');

if ($_GET['funcion'] == "delete") {
  $editId = $_GET['id'];
  mysqli_query($connection, "DELETE FROM `esports` WHERE `cod_esport` = '$editId'");
  header('location: esports.php');
}
else {
  $cod_esport = $_POST['cod_esport'];
  $esport = $_POST['esport'];
  $preu = $_POST['preu'];

  mysqli_query($connection, "UPDATE `esports` SET `esport`='$esport', `preu`='$preu' WHERE `cod_esport`='$cod_esport';");
  header('location: esports.php');
}

 ?>
