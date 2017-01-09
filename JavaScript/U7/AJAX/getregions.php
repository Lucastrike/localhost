<?php

include ("connection.php");

$query = mysqli_query($connection,"SELECT id, name FROM region;");
$result;
while ($fila=mysqli_fetch_array($query)) {
    $result.="<option value='$fila[0]'>$fila[1]</option>";
}

echo $result;

 ?>
