<?php

include('connection.php');
session_start();

$userID = $_SESSION['userID'];

//INSERT INTO `lists_movies`(`id_lists`, `id_movies`, `id_users`) VALUES ('9','9','1');
$json_get_favorites_movies=array();
$query = mysqli_query($connection, "SELECT * FROM `lists_movies`;");
while ($row = mysqli_fetch_assoc($query)) {
  array_push($json_get_favorites_movies, $row);
}

echo json_encode($json_get_favorites_movies);

 ?>
