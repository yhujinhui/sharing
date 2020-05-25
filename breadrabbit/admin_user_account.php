<?php 
require_once("conn.php");
require_once("lib/admin_logchk.php");

$sql="select * from sign";
$result=mysqli_query($conn,$sql);
$user_list='';
while($row=mysqli_fetch_array($result)){
	$escaped_name=htmlspecialchars($row['name']);
	$escaped_id=htmlspecialchars($row['id']);
	$escaped_password=htmlspecialchars($row['password']);
	$escaped_tel=htmlspecialchars($row['tel']);
	$user_list=$user_list.
	"<tr>
		<td>{$escaped_name}</td>
		<td>{$escaped_id}</td>
		<td>{$escaped_password}</td>
		<td>{$escaped_tel}</td>
	</tr>";
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>사용자 계정</title>
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
			<th>이름</th>
			<th>아이디</th>
			<th>비밀번호</th>
			<th>전화번호</th>
		</tr>
		<?=$user_list?>
		</table>
	</div>
</body>
</html>