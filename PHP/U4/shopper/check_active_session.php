<?php
session_start();
if (is_null($_SESSION['usuario'])) {
  header('location: products.php');
}
 ?>
