<?php

include('connection.php');

$movie_id = $_GET['movie_id'];

$json_movie=array();
$query = mysqli_query($connection, "SELECT * FROM movies WHERE id='$movie_id'");
while ($row = mysqli_fetch_assoc($query)) {
  array_push($json_movie, $row);
}

echo json_encode($json_movie);

 ?>
