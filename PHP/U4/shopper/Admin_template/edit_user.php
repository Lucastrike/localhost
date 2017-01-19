<?php

error_reporting(E_ALL);
ini_set("display_errors", "1");

include 'connection.php';
include('check_active_session.php');

if ($_GET['funcion'] == "delete") {
  $editId = $_GET['id'];
  mysqli_query($connection, "DELETE FROM `usuarios` WHERE `id_usuario` = '$editId'");
  header('location: usuarios.php');
}
else {
  $editId = $_POST['editId'];
  $editUser = $_POST['editUser'];
  $editName = $_POST['editName'];
  $editLast = $_POST['editLast'];
  $editPass = $_POST['editPass'];

  mysqli_query($connection, "UPDATE `usuarios` SET `usuario`='$editUser', `nombre`='$editName', `apellido`='$editLast', `password`='$editPass' WHERE `id_usuario` = '$editId';");
  header('location: usuarios.php');
}

 ?>
