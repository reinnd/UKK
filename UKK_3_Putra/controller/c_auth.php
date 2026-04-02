<?php 

SESSION_START();

if (!isset($_SESSION['username'])) {
  header("Location: ../login.php");
  exit();
}
?>