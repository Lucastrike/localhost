
<?php

include ("connection.php");

$region = $_GET["region"];
$query = mysqli_query($connection,"SELECT name FROM city WHERE id_region='$region';");
$result = "";
while ($fila=mysqli_fetch_array($query)) {
    $result.="<option value='$fila[0]'>$fila[0]</option>";
}

echo $result;

 ?>
