<?php

error_reporting(E_ALL);
ini_set("display_errors", "1");

include 'connection.php';
include('check_active_session.php');

if ($_GET['funcion'] == "delete") {
  $editId = $_GET['id'];
  mysqli_query($connection, "DELETE FROM `marca` WHERE `codigo` = '$editId'");
  header('location: marca.php');
}
else {
  $editId = $_POST['editId'];
  $editMarca = $_POST['editMarca'];

  mysqli_query($connection, "UPDATE `marca` SET `marca`='$editMarca' WHERE `codigo` = '$editId';");
  header('location: marca.php');
}

 ?>
