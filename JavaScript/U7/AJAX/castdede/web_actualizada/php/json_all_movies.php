<?php

include('connection.php');

$json_movies=array();
$query = mysqli_query($connection, "SELECT m.id, m.title, m.picture, m.year, m.length, avg(s.score) AS score FROM movies m LEFT JOIN score s ON m.id=s.id_movie GROUP BY m.id;");
while ($row = mysqli_fetch_assoc($query)) {
  array_push($json_movies, $row);
}

echo json_encode($json_movies);

 ?>
