<?php

include('connection.php');
include('check_active_session.php');

$idCesta = $_POST['idCesta'];
mysqli_query($connection, "DELETE FROM `cesta_temporal` WHERE codigo='$idCesta'");

 ?>
