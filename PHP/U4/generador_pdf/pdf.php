<?php
# Cargamos la librer�a dompdf.
require_once 'lib/pdf/dompdf_config.inc.php';

# Contenido HTML del documento que queremos generar en PDF.
$html='
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" src="css/style.css">


    <style media="screen">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
      }
      hr {
        height: 30px;
        background-color: #0096fa;
      }
      .from {
        font-size: 1.7em;
      }
      .logo {
        background-image: url("img/mariscos_recio.png");
        background-repeat: no-repeat;
        background-size: contain;
        height: 150px;
      }
      .to {
        font-size: 1.7em;
        margin-top: 100px;
      }
      .numFac {
        font-size: 1.7em;
        margin-top: 100px;
      }
      .date {
        font-size: 1.7em;
      }
    </style>
  </head>
  <body>

    <div class="container-fluid">

      <hr></hr>

      <br>
      <div class="from col-xs-3">
        <div class="name"><strong>Marisco Recio</strong></div>
        <div class="address">C/ Ave del paraiso 23</div>
        <div class="nif">87654321-A</div>
      </div>

      <div class="logo col-xs-2 col-xs-offset-7"></div>

      <div class="to col-xs-3">
        <div><strong>Facturar a:</strong></div>
        <div class="name">Capitan Salami</div>
        <div class="address">C/ Falsa 123</div>
        <div class="nif">12345678-A</div>
      </div>

      <div class="col-xs-3 col-xs-offset-6">
        <div class="numFac row"><strong>Nº de factura</strong> 001</div>
        <div class="date row"><strong>Fecha</strong> 13/12/2016</div>
      </div>

      <div class="clearfix"></div>

      <hr>

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

# Enviamos el fichero PDF al navegador.
$mipdf ->stream('FicheroEjemplo.pdf');
?>
