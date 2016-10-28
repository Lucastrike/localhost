
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Practice 14</title>
  </head>
  <body>
    <!--
    - Fes dues scripts per utilitzar la variable superglobal $_GET:
    -->

    <?php
      /* Segon script: recollir les 2 variables i mostrar-les per pantalla */
      echo "El meu nom es ".($_GET["nom"]." ".$_GET["cognom"]);
    ?>
  </body>
</html>
