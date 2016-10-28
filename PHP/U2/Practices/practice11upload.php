
<?php

$arrayExtensions = array("gif", "png", "jpg");
$temp = explode (".", $_FILES ["picture"] ["name"]);
$extension = end ($temp);

  if ($_FILES["picture"]["error"] > 0) {
    echo "Error: ".$_FILES["picture"]["error"]."<br />";
  }
  else {
    echo "picture name: ".$_FILES["picture"]["name"]."<br />";
    echo "Type: ".$_FILES["picture"]["type"]."<br />";
    echo "Size: ".($_FILES["picture"]["size"] / 1024)." Kb<br />";
    echo "Picture stored in: ".$_FILES["picture"]["tmp_name"];
  }

  if (file_exists("upload/".$_FILES["picture"]["name"])) {
    echo $_FILES["picture"]["name"]." The picture already exists. ";
  }
  else if (in_array($extension, $arrayExtensions)) {
    if ($_FILES["picture"] ["size"] < 20000) {
      move_uploaded_file($_FILES["picture"]["tmp_name"],
      "upload/".$_FILES["picture"]["name"]);
      echo "<br /> Picture stored in: "."upload/".$_FILES["picture"]["name"];
    }
    else {
      echo "<br />The picture is too big";
    }
  }

 ?>
