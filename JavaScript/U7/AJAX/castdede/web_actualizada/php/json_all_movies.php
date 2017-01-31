<?php

include('connection.php');

$json_movies=array();
$query = mysqli_query($connection, "SELECT * FROM movies;");
while ($row = mysqli_fetch_assoc($query)) {
  array_push($json_movies, $row);
}

echo json_encode($json_movies);

 ?>
