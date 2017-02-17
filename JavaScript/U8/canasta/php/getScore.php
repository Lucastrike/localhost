<?php

include('connection.php');

$arrayjson=array();
//$contador=0;
$query = mysqli_query($connection, "SELECT MAX(score) AS maxScore FROM ranking");
while ($fila = mysqli_fetch_assoc($query)) {
  //$arrayjson[$contador]=$fila;
  //$contador++;
  array_push($arrayjson, $fila);
}

echo json_encode($arrayjson);

 ?>
