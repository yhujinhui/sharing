<?php  
session_start();
unset($_SESSION['admin_id']);
unset($_SESSION['admin_password']);
header("Location: ../admin_login.php");
?>