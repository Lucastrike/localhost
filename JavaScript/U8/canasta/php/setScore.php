<?php

include('connection.php');
session_start();


$username = $_POST['username'];
$score = $_POST['score'];

if ($query = mysqli_query($connection, " INSERT INTO `ranking`(`name`, `score`) VALUES ('$username','$score');")) {
  echo "1";
} else {
  echo "0";
}

 ?>
