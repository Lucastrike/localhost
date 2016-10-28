
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tabla multiplicar 2</title>
  </head>
  <body>

    <?php

      //________FOR________//

      for ($i=0; $i<=10 ; $i++) {
        $res = $i * 2;
        echo "2 x ".$i." = ".$res;
        echo "<br />";
      }

      echo "<br /><br /><br />";

      //________WHILE________//

      $a = 0;

      while ($a <= 10) {
        $resul = $a * 2;
        echo "2 x ".$a." = ".$resul;
        echo "<br />";
        $a++;
      }

      echo "<br /><br /><br />";

      //________DO WHILE________//

      $t = 0;

      do {
        $result = $t * 2;
        echo "2 x ".$t." = ".$result;
        echo "<br />";
        $t++;
      } while ($t <= 10);

    ?>

  </body>
</html>
