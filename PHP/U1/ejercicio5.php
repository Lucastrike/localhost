
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 5</title>
  </head>
  <body>

    <?php

      function volume($radio,$height){
        $volume = pi() * $radio * $radio * $height;

        echo "The volume is ".$volume." cm3";
        return $volume;
      }

      $cilVolume = volume(5,20);

    ?>

  </body>
</html>
