
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Practice 13</title>
  </head>
  <body>
    <!--
    - Utilitza la variable superglobal $_SERVER amb els següents elements i observa per a què serveixen:
    -->

    <?php
      echo htmlentities($_SERVER["PHP_SELF"])."<br />"; // Aquest element serveix per a mostrar la ruta del archiu
      echo htmlentities($_SERVER["SERVER_NAME"])."<br />"; // Aquest element serveix per a mostrar el nom del servidor
      echo htmlentities($_SERVER["HTTP_HOST"])."<br />"; // Aquest element serveix per a mostrar el nom del servidor
      echo htmlentities($_SERVER["HTTP_REFERER"])."<br />"; // Aquest element serveix per a mostrar la direcció de la web
      echo htmlentities($_SERVER["HTTP_USER_AGENT"])."<br />"; // Aquest element serveix per a mostrar els navegadors que poden processar amb la versió de php instalada en el servidor
      echo htmlentities($_SERVER["SCRIPT_NAME"])."<br />"; // Aquest element mostra el nom del archiu php
    ?>
  </body>
</html>
