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
	<table border="1">
		<tr>
			<th><a href="admin_user_account.php">사용자 계정</a></th>
			<td>회원가입한 유저들의 계정을 모두 볼수 있습니다.</td>
		</tr>
		<tr>
			<th><a href="admin_post.php">전체 게시물</a></th>
			<td>로그인한 유저들이 올린 게시물들을 볼수 있습니다.</td>
		</tr>
		<tr>
			<th><a href="admin_event.php">이벤트</a></th>
			<td>이벤트에 참여한 유저의 계정, 내용 등을 보고 당첨자를 추첨할 수 있습니다.</td>
		</tr>
		<tr>
			<th><a href="admin_report.php">신고</a></th>
			<td>부적절한 내용을 포함하여 신고당한 유저의 계정, 댓글의 내용을 볼수 있습니다.<br>
				심의에 따라 신고당한 유저의 계정을 제지 및 댓글을 삭제할 수 있습니다.
			</td>
		</tr>
	</table>
</body>
</html>