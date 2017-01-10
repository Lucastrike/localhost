
<?php

error_reporting(E_ALL);
ini_set("display_errors", "1");

include ("connection.php");

$input = $_POST["input"];
$id_region = $_POST["id"];
$city = $_POST["city"];

echo $id_region;

$update = mysqli_query($connection, "UPDATE city SET name='$input' WHERE name='$city';");

$result = "";

$query = mysqli_query($connection,"SELECT name FROM city WHERE id_region='$id_region';");
while ($fila1=mysqli_fetch_array($query)) {
  $result.= "<option value='$fila1[0]'>$fila1[0]</option>";
}

echo $result;

 ?>
