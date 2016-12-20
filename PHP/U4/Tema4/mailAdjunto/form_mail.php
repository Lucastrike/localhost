<?php
include ('AttachMailer.php');
if ($_SERVER['REQUEST_METHOD']=="POST"){
	$from=$_POST["from"];
	$asunto=$_POST["asunto"];
	$mensaje=$_POST["mensaje"];
	$fichero=$_FILES["fichero"]["name"];
	if (file_exists("upload/" . $_FILES["fichero"]["name"])) {
	      echo $_FILES["fichero"]["name"] . " ya existe. ";
	} else {
	      move_uploaded_file($_FILES["fichero"]["tmp_name"],
	      "upload/" . $_FILES["fichero"]["name"]);
	      ?>
	      <img src="<?php echo"upload/".$_FILES["fichero"]["name"];?>" alt="foto" />
	      <?php
	}
	$mailer = new AttachMailer($from,"aescribanodiaz@gmail.com", $asunto, $mensaje);
	$mailer->attachFile($fichero);//el fichero tiene que estar en la misma ruta que este script
	//$mailer->attachFile("a.pdf");
	$mailer->send() ? "envoye": "probleme envoi";
	echo "enviado";

}

?>
<html>
<body>
<form action="form_mail.php" method="post" enctype="multipart/form-data">
De: <input type="text" name="from"><br />
Asunto: <input type="text" name="asunto"><br />
Mensaje: <input type="text" name="mensaje"><br>
Fichero: <input type="file" name="fichero" id="fichero"><br>
<input type="submit" name="enviar" value="enviar">


</form>

</body>
</html>
