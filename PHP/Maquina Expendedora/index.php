<?php
// Array asociatiu de prodructes amb el preu
$maquina = array(
  'CocaCola' => 1,
  'Fanta Llima' => 1,
  'Fanta Taronja' => 1,
  'Agua' => 0.75,
  'Burn' => 1.20,
  'Monster' => 1.80,
  'Aquarius' => 1);

    $pedido="";
    $seleccion="";
    $ranura="";
    $dinero=0;
    $devolver = "";

  if ($_SERVER['REQUEST_METHOD']=="POST") {
    $dinero=$_POST['dinero'];
    $producto= $_POST['submit'];
    $seleccion="El producto seleccionado es ".$producto;
    $precio= $maquina[$_POST['submit']];
    $ranura= "Inserta $precio EUR por la ranura";

    if ($dinero == $precio) {
      $pedido = $pedido."Aqui tiene su producto";
    }elseif ($dinero > $precio) {
      $pedido = $pedido."Aquí tiene su producto";
      $cambio = $dinero - $precio;
      $devolver = "Cambio $cambio €";
    }else{
      $falta = $precio - $dinero;
      $pedido = $pedido."Faltan $falta €";

    }

  };
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Maquina expendedora</title>
    <style media="screen">
      table{
        border: 1px solid black;
      }
      td{
        border: 1px solid black;
        height: 0px;
        padding: 0px;
      }
    </style>
    <script>
      function alertPrecio (valor, nombre){
        alert("El precio de la bebida es: " + valor + " " + nombre);
      }
    </script>
  </head>
  <body>
    <form class="" action="" method="post">
      <table>
          <tr>
            <td colspan="2">Mi Maquina expendedora
              <br>
              <?php echo $seleccion; ?>
              <br>
              <?php echo $ranura; ?>
              <input type="texto" name="dinero" value="<?php echo $dinero; ?>">
              <br>
              <?php echo $mensaje; ?>
            </td>
          </tr>
          <tr>
            <td rowspan="7"><img src="cocalata.jpg" alt="" width="200" height="350" /></td>
            <?php
            foreach ($maquina as $x => $x_valor){
            ?>
              <td align="center"><input type="button" name="submit" onclick="alertPrecio(<?php echo $x_valor; ?>,'<?php echo $x ?>')" value="<?php echo $x ?>"></td>
          </tr>
            <?php
              }
            ?>

          <tr>
            <td><?php echo $pedido ?></td>
            <td><?php echo $devolver ?></td>
          </tr>
      </table>
    </form>
  </body>
</html>
