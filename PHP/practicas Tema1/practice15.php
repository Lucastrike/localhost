
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
  $nom= $_POST['nom'];
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Practice 15</title>
  </head>
  <body bgcolor="<?php echo $nom?>">
    <!--
    - Modifica l'exemple de la variable superglobal $_POST perquè no ixca la
      següent advertència en executar l'escript
    -->

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      Nom: <input type="text" name="nom">
      <input type="submit">
    </form>

    <!--<?php
      $nom = $_POST['nom'];
      echo $nom;
    ?>-->

  </body>
</html>
