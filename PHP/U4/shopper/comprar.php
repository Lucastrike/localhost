<?php

error_reporting(E_ALL);
ini_set("display_errors", "1");

include ("connection.php");
include ("check_active_session.php");
$nombre = $_SESSION["nombre"];

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
    $precio = $filaQueryCesta[3];
    mysqli_query($connection,"INSERT INTO `cesta`(`cod_factura`, `cod_zapatos`, `subtotal`) VALUES ('$factura','$cod_zapatos','$precio')");
  }
}

echo "Compra realizada con exito";

//============================================================================

# Cargamos la librer�a dompdf.
require_once 'lib/pdf/dompdf_config.inc.php';

# Contenido HTML del documento que queremos generar en PDF.
$html='
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div " style="border:solid; margin-top:20px">
	<div " style="padding-top:20px">
	<table style="width:90%">
		<tr>
		<td>
		<div>
			<div class="thumbnail"  style="max-width: 100px; margin-left:20px">
				<img src="img/botin2.jpg">
			</div>
		</div>
		</td>

		<td>
		<div>
			<p><strong>Zapatos Online</strong></p>
			<p>Dirección: Calle Mayor-55<br>Población: Aldaia<br>Telf: 55555555</p>
		</div>
		</td>

		<td>
		<div>
			<p>Factura Nº: <strong>'.$factura.'</strong></p>
			<p>Fecha: <strong>'.$date.'</strong></p>
		</div>
		</td>

			</tr>
			</table>

	</div>
	<hr>
	<div class="row">
		<div class="col-md-12">
			<p>
      Cliente: <strong>'.$nombre.'</strong><br>
			<!--Dirección: <strong>C/falsa 135</strong>
      <br>
			Teléfono: <strong>666 666 666</strong>-->
      </p>
		</div>
	</div>
	<hr>
	<table align="center" class="table table-hover" style="width:90%">
			<tr>
				<td>
					<p><strong>MARCA</strong></p>
				</td>
				<td>
					<p><strong>DESCRIPCION</strong></p>
				</td>
				<td>
					<p><strong></strong></p>
				</td>
				<td>
					<p><strong>SUBTOTAL</strong></p>
				</td>
			</tr>';


        $queryCesta = mysqli_query($connection, "SELECT * FROM `cesta_temporal`");
        while ($fila = mysqli_fetch_array($queryCesta)) {
          $descripcion = $fila[2];
          $marca = $fila[1];
          $precio = $fila[3];

		$html.='<tr>
					<td><p>'.$marca.'</p></td>
					<td><p>'.$descripcion.'€</p></td>
					<td><p></p></td>
					<td><p>'.$precio.'</p></td>
				</tr>';
				}

	$html.=	'</table>
	<hr>
			<div class="row">
				<div class="col-md-8"></div>
				<div class="col-md-4">
					<p>Total: <strong>'.$total.'€</strong></p>
					<p>IVA: <strong>21%</strong></p>
					<p>Total factura: <strong>'.$coniva.'€</strong></p>
				</div>
			</div>
</div>
</body>
</html>';

# Instanciamos un objeto de la clase DOMPDF.
$mipdf = new DOMPDF();

# Definimos el tama�o y orientaci�n del papel que queremos.
# O por defecto coger� el que est� en el fichero de configuraci�n.
$mipdf ->set_paper("A4", "portrait");

# Cargamos el contenido HTML.
$mipdf ->load_html(utf8_decode($html));

# Renderizamos el documento PDF.
$mipdf ->render();

# Almacenar documento
$output = $mipdf ->output();
file_put_contents("clientes/".$nombre."/factura".$factura.".pdf", $output);

# Enviamos el fichero PDF al navegador.
//$mipdf ->stream('FicheroEjemplo.pdf');

mysqli_query($connection,"DELETE FROM `cesta_temporal`");

 ?>
