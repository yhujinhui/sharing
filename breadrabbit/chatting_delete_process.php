<?php  
require_once("conn.php");
$id=$_POST['id'];
session_start();
$sql=
"
delete from chat_group where _id={$id}
";
mysqli_query($conn,$sql);
$sql=
"
delete from chat where chat_group_id={$id}
";
mysqli_query($conn,$sql);

mysqli_error($conn);
header('Location: chat_group.php');
?>