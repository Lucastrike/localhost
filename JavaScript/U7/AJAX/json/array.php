<?php

//$array = ['Marca' => Seat, 'Modelo' => Leon, 'Año' => 2007];

/*$array = [
  [
    'Marca'=>Seat,
    'Modelo'=>Leon,
  ],
  [
    'Marca'=>Ford,
    'Modelo'=>Focus,
  ],
  [
    'Marca'=>Opel,
    'Modelo'=>Astra,
  ]
];*/

include('connection.php');

$arrayjson=array();
//$contador=0;
$query = mysqli_query($connection, "SELECT * FROM zapatos");
while ($fila = mysqli_fetch_assoc($query)) {
  //$arrayjson[$contador]=$fila;
  //$contador++;
  array_push($arrayjson, $fila);
}

echo json_encode($arrayjson);

 ?>
