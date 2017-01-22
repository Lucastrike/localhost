<?php

error_reporting(E_ALL);
ini_set("display_errors", "1");

include ("connection.php");

$total = $_POST['total'];
$coniva = $_POST['coniva'];
$idcliente = $_POST['idcliente'];

$date = date("Y")."-".date("m")."-".date("d");

mysqli_query($connection,"INSERT INTO `factura`(`cod_cliente`, `fecha`, `total`, `iva`, `total_a_pagar`) VALUES ('$idcliente','$date','$total','21.0','$coniva')");

$queryFactura = mysqli_query($connection, "SELECT codigo FROM `factura` WHERE `cod_cliente`='$idcliente' AND `fecha`='$date'");
while ($filaFactura = mysqli_fetch_array($queryFactura)) {
  $factura = $filaFactura[0];
}

$queryCesta = mysqli_query($connection,"SELECT * FROM `cesta_temporal`");
while ($filaQueryCesta = mysqli_fetch_array($queryCesta)) {
  $descripcion = $filaQueryCesta[2];
  $queryZapatos = mysqli_query($connection,"SELECT codigo FROM `zapatos` WHERE `descripcion`='$descripcion'");
  while ($filaZapatos = mysqli_fetch_array($queryZapatos)) {
    $cod_zapatos = $filaZapatos[0];
    $precio = $filaQueryCesta[4];
    mysqli_query($connection,"INSERT INTO `cesta`(`cod_factura`, `cod_zapatos`, `subtotal`) VALUES ('$factura','$cod_zapatos','$precio')");
  }
}

mysqli_query($connection,"DELETE FROM `cesta_temporal`");

echo "Compra realizada con exito";

 ?>
