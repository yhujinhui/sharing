<?php 
require_once("conn.php");
session_start();

$log='로그인';
$escaped_header_name='';
$log_href="login.php";
$cookbread_href="login.php";
$message="";
// $store_href="store.php?page=1&kinds=all";
$store_href="storeGame.php";
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
  $message='
  <span id="moreMessage">
    <input type="button" onsubmit="chatManager.write(this); return false;" id="message" value="쪽지" align="bottom" />
    <br>
    <span id="viewMessage"  class="viewMessage">
    
    </span> 
  </span>
  ';
  $logchk="";
  $escaped_header_name=htmlspecialchars($row['name']);
}
?>

