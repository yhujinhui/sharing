<?php 
	require_once("conn.php");
	require_once("lib/admin_logchk.php");
	$sql=
	'select * from event';
	$result=mysqli_query($conn,$sql);
	$list="";
	while($row=mysqli_fetch_array($result)){
		$list=$list.
		'
		<tr>
			<td>'.$row['evtname'].'</td>
			<td>'.$row['evtname'].'</td>
			<td>'.$row['bannername'].'</td>
			<td>'.$row['exname'].'</td>
		</tr>
		';
	}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<script type="text/javascript" src="js/admin.js"></script>
	<table border="1">
		<tr>
			<th>이벤트명</th>
			<th>기한</th>
			<th>배너사진</th>
			<th>이벤트설명사진</th>
		</tr>
		<?=$list?>
	</table>
</body>
</html>