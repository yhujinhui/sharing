<?php 
require_once("conn.php");
$sql=
"select * from content left join sign on content.user_id=sign.user_id";
$result=mysqli_query($conn,$sql);
$post_list='';
while($row=mysqli_fetch_array($result)){
	#print_r($row);
	$escaped_id=htmlspecialchars($row['id']);
	$escaped_title=htmlspecialchars($row['title']);
	$escaped_created=htmlspecialchars($row['created']);
	$post_list=$post_list.
	"<tr>
		<td><a href=''>{$escaped_id}</a></td>
		<td>{$escaped_title}</td>
		<td>{$escaped_created}</td>
	</tr>";
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>전체 게시물</title>
	 <style>
      @import url("css/admin_account.css");
    </style>
</head>
<body>
	<?php 
		require_once("lib/admin_header.php");
	 ?>
	<div class="container">
		<table border="1">
			<tr>
				<th>아이디</th>
				<th>제목</th>
				<th>게시날짜</th>
			</tr>
			<?=$post_list?>
		</table>
	</div>
	
</body>
</html>