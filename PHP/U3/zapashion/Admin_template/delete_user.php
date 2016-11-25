<?php

error_reporting(E_ALL);
ini_set("display_errors", "1");

include 'connection.php';
include('check_active_session.php');

$editId = $_GET['id'];

mysqli_query($connection, "DELETE FROM `usuarios` WHERE `id_usuario` = '$editId'");
header('location: usuarios.php');


 ?>
