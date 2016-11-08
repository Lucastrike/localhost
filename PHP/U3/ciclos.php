<?php

include('check_active_session.php');
include('connection.php');

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ciclos</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style media="screen">

    </style>
  </head>
  <body>


    <?php
    echo "<br>";

    echo'<div class="table-responsive">';
      echo'<table class="table table-hover">';
      echo'<tr><td>Ciclos</td><td>Grados</td></tr>';

      $c1="SELECT * FROM ciclos";
      $ejecuta_c1=mysqli_query($connection,$c1);
      while($ciclos=mysqli_fetch_array($ejecuta_c1)) {
        echo'<tr>';
        echo '<td>'.utf8_encode($ciclos['ciclo']).'</td>';
        echo '<td>'.utf8_encode($ciclos['codigo']).'</td>';
        $cod_ciclo=$ciclos['codigo'];
        echo '<td>'.utf8_encode($ciclos['grado']).'</td></tr><br>';

        $c2="SELECT * FROM cursos WHERE cod_ciclo='$cod_ciclo'";
        $ejecuta_c2=mysqli_query($connection,$c2);
        while($cursos=mysqli_fetch_array($ejecuta_c2)) {
          $cod_curso=$cursos['codigo'];
          echo utf8_encode($cursos['codigo'])."<br>";

          $c3="SELECT * FROM modulos WHERE cod_curso='$cod_curso'";
          $ejecuta_c3=mysqli_query($connection,$c3);
          while($modulos=mysqli_fetch_array($ejecuta_c3)) {
            echo utf8_encode($modulos['nombre'])."<br>";
          }
        }
      }

      echo'</table>';
    echo'</div>';

     ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
