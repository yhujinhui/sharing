<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>쪽지</title>
	<script type="text/javascript" src="js/admin_message.js"></script>
</head>
<body>
	<form action="admin_message_process.php" method="post" onsubmit="message.write(this); return false;">
		<textarea name="message" id="" cols="30" rows="10"></textarea>
		<input type="submit" value="보내기">
	</form>
</body>
</html>