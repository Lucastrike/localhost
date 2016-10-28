
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Practice 9</title>
  </head>
  <body>
    <!--
    - Escriu el codi php en cada comentari:

      - Quin valor es mostrarà?
        - 31
      - Per què?
        - Perque la variable edat es global.
    -->

    <?php
      // Definix una funció aniversari
      function aniversari(){
        global $edat;
        $edat += 1;
      }
      // Establix edat és 30
      $edat = 30;
      // Invoca la funció
      aniversari();
      // Mostra l'edat
      echo $edat;
    ?>
  </body>
</html>
