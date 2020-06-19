<?php  
	require_once("conn.php");
	require_once("lib/admin_logchk.php");

	$sql="select * from event_review";
	$result=mysqli_query($conn,$sql);

	$list="";
	while($row=mysqli_fetch_array($result)){
		$list=$list.
		"<tr>
		<td>{$row['description']}</td>
		<td>{$row['tel']}</td>
		<td>{$row['created']}</td>
		</tr>";
	}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>이벤트</title>
	<style>
      @import url("css/admin_account.css");
    </style>
</head>
<body>
	<?php 
		require_once("lib/admin_header.php");
	 ?>
	<table border="1">
		<tr>
			<th>아이디</th>
			<th>내용</th>
			<th>날짜</th>
		</tr>
		<?=$list?>
	</table>
</body>
</html>