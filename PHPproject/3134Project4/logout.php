<?php 
  $_SESSION = array();
  session_destroy();
  session_unset();
  header('location:index.php'); 
  exit;
?>