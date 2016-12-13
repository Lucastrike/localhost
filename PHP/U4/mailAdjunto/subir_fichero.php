<?php
include ('AttachMailer.php');

if ($_FILES["fichero"]["error"] > 0) {
  echo "Error: " . $_FILES["fichero"]["error"] . "<br>";
} else {
  echo "Nombre del fichero: " . $_FILES["fichero"]["name"] . "<br>";
  echo "Tipo: " . $_FILES["fichero"]["type"] . "<br>";
  echo "Tamaño: " . ($_FILES["fichero"]["size"] / 1024) . " kB<br>";
  echo "Guardado en: " . $_FILES["fichero"]["tmp_name"];
}

if (file_exists("upload/" . $_FILES["fichero"]["name"])) {
      echo $_FILES["fichero"]["name"] . " ya existe. ";
} else {
      move_uploaded_file($_FILES["fichero"]["tmp_name"],
      "upload/" . $_FILES["fichero"]["name"]);
      echo "Fichero guardado en: " . "upload/" . $_FILES["fichero"]["name"];
}
$fichero=$_FILES["fichero"]["name"];
echo $fichero;
$mailer = new AttachMailer("mariluz@inventada.net", "mariluz@solvam.es", "mail sender class", "hello <b>content</b>");
$mailer->attachFile($fichero);//el fichero tiene que estar en la misma ruta que este script
//$mailer->attachFile("a.pdf");
$mailer->send() ? "envoye": "probleme envoi";
?>


	
