<?php

//$array = ['Marca' => Seat, 'Modelo' => Leon, 'Año' => 2007];

$array = [
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
];

echo json_encode($array);

 ?>
