<?php

include('check_active_session.php');
include('connection.php');

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php
     
     $username = mysqli_real_escape_string($connection, $_POST['Username']);
     $name = mysqli_real_escape_string($connection, $_POST['Name']);
     $surname = mysqli_real_escape_string($connection, $_POST['Surname']);
     $password = mysqli_real_escape_string($connection, $_POST['Password']);
     $pass = md5($password);

     $sql = "INSERT INTO usuarios (usuario, nombre, apellido, password) VALUES ('$username', '$name', '$surname', '$pass')";
     if (!mysqli_query($connection, $sql)) {
       die('Error: '.mysqli_connect_errno($connection));
     }
     echo ". Welcome ".$name." ".$surname." :)";

     mysqli_close($connection);

      ?>
   </body>
 </html>
