<?php

error_reporting(E_ALL);
ini_set("display_errors", "1");

include 'connection.php';
include('check_active_session.php');

$editId = $_POST['editId'];
$editUser = $_POST['editUser'];
$editName = $_POST['editName'];
$editLast = $_POST['editLast'];
$editPass = $_POST['editPass'];

mysqli_query($connection, "UPDATE `usuarios` SET `usuario`= '$editUser' WHERE `id_usuario` = '$editId';");
header('location: usuarios.php');


 ?>
