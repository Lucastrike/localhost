<?php
  error_reporting(E_ALL);
  ini_set("display_errors", "1");

  session_start();

  include('connection.php');

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $pass = md5($password);

    $query = mysqli_query($connection, "SELECT * FROM usuarios");
    while ($row = mysqli_fetch_array($query)) {
      if ($email == $row['usuario']) {
        if ($password == $row['password']) {
          $_SESSION['usuario'] = $email;
          header('location: gestion.php');
        }
      }
    }
  }

  mysqli_close($connection);

 ?>
