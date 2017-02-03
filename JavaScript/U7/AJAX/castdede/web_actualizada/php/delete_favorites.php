<?php

include('connection.php');
session_start();

$userID = $_SESSION['userID'];
$id_movie = $_POST['id_movie'];

$query = mysqli_query($connection, "DELETE FROM `lists_movies` WHERE id_lists='9' AND id_movies='$id_movie' AND id_users='$userID';");

 ?>
