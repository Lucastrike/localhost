
<?php

$file = "123.png";

  $route = 'upload/'.$file;

  if (is_file($route)) {
    header('Content-Type: application/force-download');
    header('Content-Disposition: attachment; filename='.$file);
    header('Content-Transfer-Encoding: binary');
    header('Content-Length: '.filesize($route));

    readfile($route);
  }

 ?>
