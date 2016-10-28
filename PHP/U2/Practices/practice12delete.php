
<?php
$foto=$_GET["foto"];
unlink('upload/'.$foto);
header("location:practice12.php");

?>
