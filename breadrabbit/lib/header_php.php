<?php 
require_once("conn.php");

$log='로그인';
$escaped_name='';
$log_href="login.html";
$cookbread_href="login.html";
$store_href="store.php";
$logo_href="first.php";
$logchk='return logchk()';
if(isset($_GET['id'])){
  $filtered_user_id=mysqli_real_escape_string($conn,$_GET['id']);
  $sql=
  "select name from sign where user_id={$filtered_user_id}";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($result);
  print_r(mysqli_error($conn));
  $log_href="#";
  $cookbread_href="cookbread.php?id={$filtered_user_id}";
  $store_href="store.php?id={$filtered_user_id}";
  $logo_href="first.php?id={$filtered_user_id}";
  $log='로그아웃';
  $logchk='';
  $escaped_name=htmlspecialchars($row['name']).'님';
}
?>

