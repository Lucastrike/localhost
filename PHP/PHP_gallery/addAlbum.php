<?php

$newAlbum = $_POST["albumName"];
$folder = "albums/$newAlbum";
if (!file_exists($folder)) {
  mkdir($folder, 0775);
  header('location: index.php');
}

 ?>
