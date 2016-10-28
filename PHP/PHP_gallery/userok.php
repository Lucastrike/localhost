<?php
  session_start();

  if ($_POST["usuario"] == "user" && $_POST["pass"] == "1234") {
    $_SESSION['usuario'] = $_POST["usuario"];
    $_SESSION['pass'] = $_POST["pass"];
    header('location: gestion.php');
  }
  else {
    header('location: index.php');
  }
   ?>
