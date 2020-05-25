<?php 
	require_once("lib/admin_logchk.php");
?>

<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>관리자</title>
</head>
<body>
	<script type="text/javascript" src="js/admin.js"></script>
	<header>
		<a href="" onclick="return logoutchk()">로그아웃</a>
	</header>
	<a href="admin_user_account.php">사용자 계정</a>
	<a href="admin_post.php">전체 게시물</a>
	<a href="admin_event.php">이벤트</a>
</body>
</html>