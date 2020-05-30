<?php 
	require_once("conn.php");
	require_once("lib/admin_logchk.php");
	$sql=
	'select count(*) from event';
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
	$count=$row['count(*)'];
	$deletebtn="";
	if($count<=0){
		echo
		'
		<script>alert("현재 진행중인 이벤트가 없습니다");
		history.back();</script>
		';
	}
	$sql=
	'select * from event';
	$result=mysqli_query($conn,$sql);
	$list="";
	while($row=mysqli_fetch_array($result)){
		if($row['evtname']=="이달의 사연 이벤트"){
			$list=$list.
			'
			<tr>
				<td><a href="admin_event_go.php?title='.$row['evtname'].'">'.$row['evtname'].'</a></td>
				<td>'.$row['evtname'].'</td>
				<td>'.$row['bannername'].'</td>
				<td>'.$row['exname'].'</td>
					<td><input type="checkbox" name="chk[]" value='.$row['id'].'></td>
			</tr>
			';
		}else{
			$list=$list.
			'
			<tr>
				<td>'.$row['evtname'].'</td>
				<td>'.$row['evtname'].'</td>
				<td>'.$row['bannername'].'</td>
				<td>'.$row['exname'].'</td>
					<td><input type="checkbox" name="chk[]" value='.$row['id'].'></td>
			</tr>
			';
		}
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
		<form action="admin_event_delete_process.php" method="post">
			<tr>
				<th>이벤트명</th>
				<th>기한</th>
				<th>배너사진</th>
				<th>이벤트설명사진</th>
				<th>삭제<input type="submit" onclick="return deleteeventchk()" value="삭제하기"></th>
			</tr>
			<?=$list?>
		</form>
	</table>
</body>
</html>