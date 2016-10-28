
<?php
  $moda = array(
    array("camiseta", 22,50),
    array("pantalon", 15,00),
    array("gorra", 5,9),
    array("chaqueta", 17,95)
  );

  for ($i=0; $i<count($moda) ; $i++) {
    echo "Fila numero: ".$i."<br />";
    echo $moda[$i][0].": En almacen: ".$moda[$i][1]." Vendidos: ".$moda[$i][2];
    echo "<br />";
  }

?>
