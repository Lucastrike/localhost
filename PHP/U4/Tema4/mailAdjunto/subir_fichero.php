<?php
include ('AttachMailer.php');
/*if ($_FILES["fichero"]["error"] > 0) {
  echo "Error: " . $_FILES["fichero"]["error"] . "<br>";
} else {
  echo "Nombre del fichero: " . $_FILES["fichero"]["name"] . "<br>";
  echo "Tipo: " . $_FILES["fichero"]["type"] . "<br>";
  echo "Tama�o: " . ($_FILES["fichero"]["size"] / 1024) . " kB<br>";
  echo "Guardado en: " . $_FILES["fichero"]["tmp_name"];
}
*/
if (file_exists("upload/" . $_FILES["fichero"]["name"])) {
      echo $_FILES["fichero"]["name"] . " ya existe. ";
} else {
      move_uploaded_file($_FILES["fichero"]["tmp_name"],
      "upload/" . $_FILES["fichero"]["name"]);
      ?>
      <img src="<?php echo"../".$_FILES["fichero"]["name"];?>" alt="foto" />
      <?php
}
$nombre = $_POST['name'];
$correo = $_POST['mail'];
$mensaje = $_POST['mensaje'];
$fichero=$_FILES["fichero"]["name"];
echo $fichero;
$mens = $nombre.",".$mensaje;
$mailer = new AttachMailer("aescribanodiaz@gmail.com",$correo, "mail sender class", $mens);
$mailer->attachFile($fichero);//el fichero tiene que estar en la misma ruta que este script
//$mailer->attachFile("a.pdf");
$mailer->send() ? "envoye": "probleme envoi";
?>
