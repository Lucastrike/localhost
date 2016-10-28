<?php

$album = $_POST['Albums'];

$extensiones = array('gif','png','jpeg','jpg');
$temp = explode(".", $_FILES ["picture"]["name"]);
$extensio = end ($temp);

if (in_array($extensio,$extensiones)){

  if (file_exists("albums/".$album.'/'.$_FILES["picture"]["name"])) {
    echo $_FILES["picture"]["name"]." The picture already exists. ";
  }
  else {
    move_uploaded_file($_FILES["picture"]["tmp_name"],
    "albums/".$album.'/'.$_FILES["picture"]["name"]);
    header('location: gestion.php');
  }
}
 ?>
