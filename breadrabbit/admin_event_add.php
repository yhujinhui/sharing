<?php 
require_once("lib/admin_logchk.php");

?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<script type="text/javascript" src="js/admin.js"></script>
	<form action="admin_event_add_process.php" method="post"  enctype="multipart/form-data">

		<table border="1">
			<tr>
				<th>이벤트명</th>
				<td><input type="text" name="evtname"></td>
			</tr>
			<tr>
				<th>배너사진</th>
				<td><input type="file" name="eximg[]"></td>
			</tr>
			<tr>
				<th>이벤트 설명사진</th>
				<td>
					<input type="file" name="eximg[]"><br>
					<input type="file" name="eximg[]"><br>
					<input type="file" name="eximg[]"><br>
					<input type="button" value="사진 추가하기">
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="확인"></td>
			</tr>
		</table>		
	</form>
</body>
</html>