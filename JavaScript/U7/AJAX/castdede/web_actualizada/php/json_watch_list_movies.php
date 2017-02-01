<?php

include('connection.php');
session_start();

$userID = $_SESSION['userID'];
$id_movie = $_POST['id_movie'];

$query = mysqli_query($connection, "INSERT INTO `lists_movies`(`id_lists`, `id_movies`, `id_users`) VALUES ('8','$id_movie','$userID');");


 ?>
