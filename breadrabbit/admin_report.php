<?php 
require_once("conn.php");
require_once("lib/admin_logchk.php");

$sql=
"select * from comment left join sign on comment.user_id=sign.user_id where warning>0";
$result=mysqli_query($conn,$sql);
$comment_list='';
		
//>
while($row=mysqli_fetch_array($result)){
	// print_r($row);
	$escaped_id=htmlspecialchars($row['id']);
	$escaped_comment=htmlspecialchars($row['comment']);
	$escaped_warning=htmlspecialchars($row['warning']);
	$comment_list=$comment_list.
	"<tr>
		<td><a href=''>{$escaped_id}</a></td>
		<td>{$escaped_comment}</td>
		<td>{$escaped_warning}</td>
		<td><input type='checkbox' name='chk[]' value='{$row[0]}'></td>
	</tr>";
}

?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>신고</title>
	 <style>
      @import url("css/admin_account.css");
    </style>
    <script type="text/javascript" src="js/admin.js"></script>
</head>
<body>
	<?php 
		require_once("lib/admin_header.php");
	 ?>
	 <div class="container">
		<table border="1">
			<tr>
				<th>아이디</th>
				<th>댓글</th>
				<th>신고수</th>
				<th>댓글 제재하기</th>
			</tr>
			<form action="admin_report_process.php" method="post">
			<?=$comment_list?>
			<input type="submit" onclick="return commentchk()" value="확인">
			</form>
		</table>
	</div>
</body>
</html>