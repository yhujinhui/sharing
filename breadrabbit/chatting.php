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
		<div class="main">
			<div class="mainBox">
				<div> 
					<dl id="list"></dl>
				</div>
				<div>
					<form onsubmit="chatManager.write(this); return false;">
						<input name="name" id="name" type="text" placeholder="별명을 입력해주세요"/>
						<input name="msg" id="msg" type="text" placeholder="채팅 내용을 입력해주세요"/>
						<input name="btn" id="btn" type="submit" value="전송" />
					</form>
				</div>
			</div>
			<!-- <button onclick="history.back()" class="backButton">나가기</button> -->
		</div>
		

	</body>
</html>