
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Practice 11</title>
  </head>
  <body>
    <!--
    - Escriu el codi php necessari pre crear una funció que sume 2 nombres:
    -->

    <?php
      // Crea la funció que sume dos nombres i retorne el resultat
      function suma($num1, $num2){
        $res = $num1 + $num2;
        return $res;
      }
      // Definix les variables pels dos nombres i assigna'ls un valor
      $num1 = 1;
      $num2 = 2;
      // Definix una variable que cride a la funció
      $result = suma($num1, $num2);
      // Mostra el resultat
      echo "La suma de ".$num1." + ".$num2." = ".$result;
    ?>
  </body>
</html>
