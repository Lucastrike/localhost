
<?php

//Ambas funciones insertan/ejecutan el codigo php del archivo que contienen, con la diferencia de que en el include(),
//si se produce algun error, este seguira ejecutandose.
//Mientras que con el require() si se produce algun error, este dejara de ejecutarse.

?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Practice 5</title>
  </head>
  <body>

    <div>
      <?php include 'head.txt' ?>
    </div>

    <p>===========================================</p>

    <div>
      <?php include 'foot.txt' ?>
    </div>

  </body>
</html>
