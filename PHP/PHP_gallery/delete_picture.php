<?php

$album = $_GET["album"];
$picture = $_GET["image"];

  unlink("albums/$album/$picture");

  header("location: gestion.php");

 ?>
