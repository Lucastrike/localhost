<?php

include('connection.php');
session_start();

$userID = $_SESSION['userID'];

//INSERT INTO `lists_movies`(`id_lists`, `id_movies`, `id_users`) VALUES ('9','9','1');
$json_watch_list_movies=array();

$query = mysqli_query($connection, "SELECT * FROM `lists_movies`
JOIN `movies` ON lists_movies.id_movies = movies.id
JOIN `lists` ON lists_movies.id_lists = lists.id
WHERE id_users='$userID'
AND lists.id='8';");

while ($row = mysqli_fetch_assoc($query)) {
  array_push($json_watch_list_movies, $row);
}

echo json_encode($json_watch_list_movies);

 ?>
