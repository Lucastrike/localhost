  <?php

error_reporting(E_ALL);
ini_set("display_errors", "1");

include 'connection.php';
include('check_active_session.php');

if ($_GET['funcion'] == "delete") {
  $editId = $_GET['id'];
  mysqli_query($connection, "DELETE FROM `tipo` WHERE `codigo` = '$editId'");
  header('location: tipo.php');
}
else {
  $editId = $_POST['editId'];
  $editTipo = $_POST['editTipo'];

  mysqli_query($connection, "UPDATE `tipo` SET `tipo`='$editTipo' WHERE `codigo` = '$editId';");
  header('location: tipo.php');
}

 ?>
