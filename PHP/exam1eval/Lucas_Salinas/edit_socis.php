<?php

error_reporting(E_ALL);
ini_set("display_errors", "1");

include 'connection.php';
include('check_active_session.php');

if ($_GET['funcion'] == "delete") {
  $editId = $_GET['dni'];
  mysqli_query($connection, "DELETE FROM `socis` WHERE `dni` = '$editId'");
  header('location: socis.php');
}
else {
  $dni = $_POST['dni'];
  $nom = $_POST['nom'];
  $email = $_POST['email'];

  mysqli_query($connection, "UPDATE `socis` SET `dni`='$dni', `email`='$email' WHERE `dni`='$dni';");
  header('location: socis.php');
}

 ?>
