<?php  
session_start();
unset($_SESSION['id']);
unset($_SESSION['password']);
header("Location: ../admin_login.php");
?>