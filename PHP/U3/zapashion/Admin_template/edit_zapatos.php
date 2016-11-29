<?php

error_reporting(E_ALL);
ini_set("display_errors", "1");

include 'connection.php';
include('check_active_session.php');

if ($_GET['funcion'] == "delete") {
  $editId = $_GET['id'];
  mysqli_query($connection, "DELETE FROM `zapatos` WHERE `codigo` = '$editId'");
  header('location: zapatos.php');
}
else {
  $editId = $_POST['editId'];
  $editModelo = $_POST['editModelo'];
  $editPrecio = $_POST['editPrecio'];
  $editDescripcion = $_POST['editDescripcion'];

  mysqli_query($connection, "UPDATE `zapatos` SET `modelo`='$editModelo', `precio`=$editPrecio, `descripcion`=$editDescripcion  WHERE `codigo` = '$editId';");
  header('location: zapatos.php');
}

 ?>
