<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Practice 5</title>
  </head>
  <body>
    <?php                         // Tag to open a script
      $dia=date("d");             // Variable called date
      if($dia<=10) {              // (if) control structure
        echo "running";           // Tag to print on the screen
      }
      else{
        echo "out of service";
      }
    ?>                            <!-- Tag to close the script -->
  </body>
</html>
