<?php

  include('connection.php');

  $id_movie=['id'];

  $json_score=array();

  $queryAVG = mysqli_query($connection, "SELECT AVG(score) FROM `score` WHERE id_movie='$id_movie';");
  while ($row = mysqli_fetch_assoc($queryAVG)) {
    array_push($json_score, $row);
  }

  echo json_encode($json_score);

 ?>
