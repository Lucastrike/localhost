<?php
session_start();
if (is_null($_SESSION['user'])) {
  header('location: index.php');
}
 ?>
