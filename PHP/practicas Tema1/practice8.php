
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Practice 8</title>
  </head>
  <body>
    <!-- Escriu el codi php en cada comentari:
         Quin valor es mostrarà?
          - 30
         Per què?
          - Perque el echo de la variable edat=30 estan fora de la funció -->

    <?php
      // Definix una funció aniversari
      function aniversari(){
        $edat = 1;
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
