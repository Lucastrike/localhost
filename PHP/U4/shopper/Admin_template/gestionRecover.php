<?php
  error_reporting(E_ALL);
  ini_set("display_errors", "1");

  include('connection.php');

  $user = mysqli_real_escape_string($connection, $_POST['user']);
  echo $user;

  $userQuery = mysqli_query($connection, "SELECT * FROM `usuarios`");
  while ($row = mysqli_fetch_array($userQuery)) {
      if($row['usuario'] == $user){
        $email_message = "Clicka en la siguiente url para reestablecer la contraseña ";
        mail($user, "Reestablecer contraseña", $email_message."http://lucassalinas.com.es/php/tema3/zapashion/recover.php".$user);
        header("location: index.php");
      }
  }


  /*if ($user == $row['usuario']) {
    $email_message = "Clicka en la siguiente url para reestablecer la contraseña ";
    mail($user, "Reestablecer contraseña", $email_message."http...blablabla"$user);
    header("location: index.php");
  }
  else {
    echo "El email es incorrecto";
  }*/
 ?>
