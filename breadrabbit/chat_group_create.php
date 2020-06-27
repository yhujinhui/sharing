<?php  
require_once("conn.php");
session_start();
$sql=
"
select count(*) cnt from chat_group where user_id={$_SESSION['user_id']}
";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if($row['cnt']>0){
	echo
	"
	<script>alert('이미 방이 생성되었습니다');history.back();</script>
	";
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		@import url("css/chat_group_create.css")
	</style>
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<div class="title">
				채팅방 만들기
			</div>
			<div class="main">
				<div class="wrap">
					<form action="chat_group_create_process.php" method="post">
					<div class="titlediv">제목</div>
					<div class="title">
						<input type="text" name="title">
					</div>
					<div class="passworddiv" >
						비밀번호
					</div>
					<div class="password">
						<input type="password" placeholder="공개방을 원할 경우 비밀번호를 입력하지 마세요" name="password" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
					</div>
					<div class="create">
						<input type="submit" value="만들기">
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>