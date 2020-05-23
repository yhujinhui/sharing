<?php 
require_once("conn.php");
session_start();

$log='로그인';
$escaped_name='';
$log_href="login.php";
$cookbread_href="login.php";
$store_href="store.php?page=1&kinds=all";
$logo_href="first.php";
$event_href="event.php";
$filtered_user_id='';
$logchk='return logchk()';
if(isset($_SESSION['user_id'])){
  $filtered_user_id=mysqli_real_escape_string($conn,$_SESSION['user_id']);
  $sql=
  "select name from sign where user_id={$filtered_user_id}";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($result);
  print_r(mysqli_error($conn));
  $log_href="";
  $cookbread_href="cookbread.php";
  $log='로그아웃';
  $logchk="";
  $escaped_name=htmlspecialchars($row['name']).'님';
}
?>

