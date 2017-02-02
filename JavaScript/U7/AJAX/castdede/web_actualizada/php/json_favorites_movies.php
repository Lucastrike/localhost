<?php

include('connection.php');
session_start();

$userID = $_SESSION['userID'];
$id_movie = $_POST['id_movie'];

if ($query = mysqli_query($connection, "INSERT INTO `lists_movies`(`id_lists`, `id_movies`, `id_users`) VALUES ('9','$id_movie','$userID');")) {
  echo "1";
} else {
  echo "0";
}

 ?>
