<?php
  error_reporting(E_ALL);
  ini_set("display_errors", "1");

  include ("connection.php");
  session_start();

  $id_user = $_SESSION['userID'];
  $id_movie = $_POST["movie_id"];
  $score = $_POST['score'];

  $query = mysqli_query($connection, "INSERT INTO `score`(`id_user`, `id_movie`, `score`) VALUES ('$id_user','$id_movie','$score');");


  $json_score=array();

  $queryAVG = mysqli_query($connection, "SELECT AVG(score) FROM `score` WHERE id_movie='$id_movie';");
  while ($row = mysqli_fetch_assoc($queryAVG)) {
    array_push($json_score, $row);
  }

  echo json_encode($json_score);

 ?>
