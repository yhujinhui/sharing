<?php  
	require_once("conn.php");

	$filtered=array(
		'comment'=>mysqli_real_escape_string($conn,$_POST['comment']),
		'content_id'=>mysqli_real_escape_string($conn,$_POST['content_id']),
		'user_id'=>mysqli_real_escape_string($conn,$_POST['user_id']),
	);
	$sql_name="select name from sign where user_id={$filtered['user_id']}";
	$result=mysqli_query($conn,$sql_name);
	$row=mysqli_fetch_array($result);
	print_r($row);
	$escaped_name=htmlspecialchars($row['name']);

	$sql=
	"
	insert into comment(content_id,user_id,comment,created,name)
	values(
	  '{$filtered['content_id']}',
	  '{$filtered['user_id']}',
	  '{$filtered['comment']}',
	  now(),
	  '{$escaped_name}'
	  )
	";

$result=mysqli_query($conn,$sql);
if($result==false){
	echo'에러';
	echo mysqli_error($conn);
}else{
	header("Location: content.php?id={$filtered['content_id']}&user_id={$filtered['user_id']}");
}
?>