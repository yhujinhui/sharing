<?php  
require_once("conn.php");

$password=$_POST['password'];
$id=$_POST['id'];
$sql=
"select * from chat_group where _id=".$id;
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if($row['password']!=$password){
	echo"
	<script>
	alert('비밀번호가 일치하지 않습니다.');
	history.back();
	</script>
	";
}
else{
	header('Location: chatting.php?id='.$id);
}
?>