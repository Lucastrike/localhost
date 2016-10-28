
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio horario</title>
    <style>
      table, td {
        border: 1px solid black;
        padding: 10px;
      }
    </style>
  </head>
  <body>

    <table>
    <?php
      for ($row=0; $row<=6 ; $row++) {
        echo "<tr></tr>";
        for ($col=0; $col<=5 ; $col++) {
          echo "<td>horario</td>";
        }
      }
    ?>
  </table>

  </body>
</html>
