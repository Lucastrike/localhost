<?php

include('connection.php');
session_start();

$userID = $_SESSION['userID'];

$json_favorites_movies=array();

$query = mysqli_query($connection, "SELECT m.id, m.title, m.year, m.length, m.picture, AVG(s.score) AS score
FROM movies m INNER JOIN score s
ON m.id=s.id_movie
WHERE m.id in (
  SELECT lists_movies.id_movies
  FROM `lists_movies`
  JOIN `movies`
  ON lists_movies.id_movies = movies.id
  JOIN `lists`
  ON lists_movies.id_lists = lists.id
  WHERE id_users='$userID' AND lists.id='9'
)
GROUP BY m.id;");

/*SELECT * FROM `lists_movies`
JOIN `movies` ON lists_movies.id_movies = movies.id
JOIN `lists` ON lists_movies.id_lists = lists.id
WHERE id_users='$userID'
AND lists.id='9'*/

while ($row = mysqli_fetch_assoc($query)) {
  array_push($json_favorites_movies, $row);
}

echo json_encode($json_favorites_movies);

 ?>
