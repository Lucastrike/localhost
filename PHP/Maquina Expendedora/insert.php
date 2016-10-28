
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
  </head>
  <body>

    <form action="<?php echo(htmlentities($_SERVER['PHP_SELF']));?>" method="post">
      <!-- Siempre se pone el metodo post por seguridad para que no se vea la informacion -->
        Product:
        <!-- En los formularios php basta con los atributos type y name -->
        <input type="text" placeholder="Product" name="product[]">
        <br /><br />

        Price:
        <input type="text" placeholder="price" name="price[]">
        <br /><br />

        <input type="submit" name="submit" value="Submit">
        <br /><br />
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
      $product =  $_POST['product'];
      echo "Product: ".$product."<br />";
      $price =  $_POST['price'];
      echo "Price: ".$Price."<br />";
    }

    //                    IMPOSIBLE

  //$products = array(""=>"")
  $arrayproduct=array("$product");
  $arrayprice=array("$price");
  print_r(array_merge($product,$price));

    ?>

  </body>
</html>
