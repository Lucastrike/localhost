
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Practice 12</title>
  </head>
  <body>
    <!--
    - Utilitza la variable $GLOBALS per mostrar per pantalla el teu nom i cognoms
    -->

    <?php
      $nom = "Lucas";
      $cog1 = "Salinas";
      $cog2 = "Lozano";

      function nomCom(){
        $GLOBALS['nomcom'] = $GLOBALS['nom']." ".$GLOBALS['cog1']." ".$GLOBALS['cog2'];
      }

      nomCom();
      echo $nomcom;
    ?>
  </body>
</html>
