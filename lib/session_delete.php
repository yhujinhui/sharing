<?php  
session_start();
unset($_SESSION['id']);
unset($_SESSION['password']);
unset($_SESSION['user_id']);
header("Location: ../login.php");
?>