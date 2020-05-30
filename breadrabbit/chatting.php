<?php  
require_once("lib/header_php.php");
?>
<!DOCTYPE html>
<html lang="ko">
	<head>
		<title>상담</title>
		<meta charset="utf-8">
		<style type = "text/css">
          @import url("css/header.css");
        </style>
		<script type="text/javascript" src="js/chatting.js"></script>
		<link rel="stylesheet" type="text/css" href="css/chatting.css"/>
	</head>

	<body>
		<dl id="list"></dl>
		<form onsubmit="chatManager.write(this); return false;">
			<input name="name" id="name" type="text" />
			<input name="msg" id="msg" type="text" />
			<input name="btn" id="btn" type="submit" value="입력" />
		</form>

	</body>
</html>