
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Practice 12</title>
  </head>
  <body>

    <?php

    $arrayFiles = scandir("upload");

    for ($i=2; $i<count($arrayFiles); $i++) {

      $foto=$arrayFiles[$i];?>
      <img src="upload/<?php echo $foto; ?>" width="200px" height="200px"><br>
      <?php echo $arrayFiles[$i]; ?>
      <input type="button" value="Delete" href="practice12delete.php?foto=<?php echo $foto;?>"></a><br><br>
    <?php
      }
     ?>

  </body>
</html>
