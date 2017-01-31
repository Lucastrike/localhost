<?php
  error_reporting(E_ALL);
  ini_set("display_errors", "1");

  include ("connection.php");
  session_start();

  $id_user = $_SESSION['userID'];
  $id_movie = $_POST["movie_id"];
  $score = $_POST['score'];

  $query = mysqli_query($connection, "INSERT INTO `score`(`id_user`, `id_movie`, `score`) VALUES ('$id_user','$id_movie','$score');");

 ?>
