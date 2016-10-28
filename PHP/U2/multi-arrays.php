
<?php
  $moda = array(
    array("camiseta", 22,50),
    array("pantalon", 15,00),
    array("gorra", 5,9),
    array("chaqueta", 17,95)
  );

  for ($i=0; $i<count($moda) ; $i++) {
    echo $moda[$i][0].": En almacen: ".$moda[$i][1]." Vendidos: ".$moda[$i][2];
    echo "<br />";
  }

  /*echo $moda[0][0].":En almacen: ".$moda[0][1].",vendidos: ".$moda[0][2].".<br />";
  echo $moda[1][0].":En almacen: ".$moda[0][1].",vendidos: ".$moda[1][2].".<br />";
  echo $moda[2][0].":En almacen: ".$moda[0][1].",vendidos: ".$moda[2][2].".<br />";
  echo $moda[3][0].":En almacen: ".$moda[0][1].",vendidos: ".$moda[3][2].".<br />";*/
?>
