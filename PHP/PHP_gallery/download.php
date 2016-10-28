<?php
   $album = $_GET['album'];
   $foto = $_GET['foto'];
   $ruta = "albums/$album/$foto";

   if (is_file($ruta)) {
     header('Content-Type: application-force-download');
     header("Content-Disposition: attachment; filename =$foto");
     header('Content-Transfer-Encoding: binary');
     header('Content-Length: '.filesize($ruta));

     readfile($ruta);
   }
    ?>
