<?php  
	require_once("conn.php");
	require_once("lib/admin_logchk.php");

	$filtered=array(
		'id'=>mysqli_real_escape_string($conn,$_GET['id'])
	);
	$sql="select * from story_evt where id={$filtered['id']}";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="js/admin.js"></script>
</head>
<body>
	<table border="1">
		<form action="admin_event_story_process.php" method="post">
			<tr>
			<th>내용</th>
			</tr>
			<tr>
				<td><?=$row['description']?></td>
			</tr>
			<tr>
				<th>댓글</th>
			</tr>
			<tr >
				<td>
					<textarea name="comment" id="" cols="30" rows="10"></textarea>
				</td>
			</tr>
			<tr>
				<td>
					<input type="hidden" name="user_id" value="<?=$row['user_id']?>">
					<input type="submit" onclick="return eventchk()" value="올리기">
				</td>
			</tr>
		</form>
	</table>
</body>
</html>