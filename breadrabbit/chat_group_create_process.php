<?php  
require_once("conn.php");
session_start();
$title=$_POST['title'];
$password=$_POST['password'];
// print_r($password);
$sql="";
if(empty($password)){
	$password=null;
	$sql=
	"
	insert into chat_group(title,user_id) values(
	'{$title}',
	{$_SESSION['user_id']}
	);
	";
}else{
	$password=(int)$_POST['password'];
	$sql=
	"
	insert into chat_group(title,user_id,password) values(
	'{$title}',
	{$_SESSION['user_id']},
	{$password}
	);
	";
}
// print_r($title);
// print_r($_SESSION['user_id']);

mysqli_query($conn,$sql);
print_r(mysqli_error($conn));
$sql=
"
select * from chat_group where user_id={$_SESSION['user_id']}
";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
header('Location: chatting.php?id='.$row['_id']);
?>