
<?php

include('connection.php');

$user = $_POST['user'];
$dificultad = $_POST['dificultad'];

$query = mysqli_query($connection, "SELECT * FROM usuarios WHERE name='$user'");
if ($query==true) {

} else {$sql="INSERT INTO usuarios (usuario) VALUES ('$user')";}

while ($fila=mysqli_fetch_array($query)) {
    $result.="<option value='$fila[0]'>$fila[0]</option>";
}

 ?>
