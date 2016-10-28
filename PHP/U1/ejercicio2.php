
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2</title>
  </head>
  <body>

    <?php

      function calculate($num1,$num2,$op){
        $res;
        switch ($op) {
          case 'add':
            $res = $num1 + $num2;
            echo $num1." + ".$num2." = ".$res;
            break;

          case 'subtract':
            $res = $num1 - $num2;
            echo $num1." - ".$num2." = ".$res;
            break;

          case 'multiply':
            $res = $num1 * $num2;
            echo $num1." * ".$num2." = ".$res;
            break;

          case 'divide':
            $res = $num1 / $num2;
            echo $num1." / ".$num2." = ".$res;
            break;

          default:
            echo 'You must choose between the options add, subtract, multiply and divide';
            break;
        }
        return $res;
      }

      $result = calculate(10,5,"add");
      echo "<br /><br />";
      $result = calculate(10,5,"subtract");
      echo "<br /><br />";
      $result = calculate(10,5,"multiply");
      echo "<br /><br />";
      $result = calculate(10,5,"divide");
      echo "<br /><br />";
      $result = calculate(10,5,"dfyjdfh");
      echo "<br /><br />";

    ?>

  </body>
</html>
