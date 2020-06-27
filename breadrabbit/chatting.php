<?php  
require_once("lib/header_php.php");
if(!isset($_GET['id'])){
	echo 
	'
	<script>alert("생성되지 않은 방입니다");location.href="chat_group.php";</script>
	';
}

$sql="select * from chat_group";
$result=mysqli_query($conn,$sql);
$bool=true;
while($row=mysqli_fetch_array($result)){
	if($row['_id']==$_GET['id']){
		$bool=false;
	}
}
if($bool){
	echo 
	'
	<script>alert("생성되지 않았거나 삭제된 방입니다");location.href="chat_group.php";</script>
	';
}

$sql="select * from sign where user_id=".$_SESSION['user_id'];
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$name=$row['name'];
$chat_group_id=$_GET['id'];

?>
<!DOCTYPE html>
<html lang="ko">
	<head>
		<title>채팅</title>
		<meta charset="utf-8">
		<style type = "text/css">
          @import url("css/header.css");
        </style>
        <link rel="stylesheet" type="text/css" href="css/chatting.css"/>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/chatting.js"></script>
		<script src="js/message.js"></script>
	</head>
	<body onload="chatManager.getId(<?=$chat_group_id?>)">
		<div class="main">
			<div class="mainBox">
				<div> 
					<dl id="list"></dl>
				</div>
				<div>
					<form onsubmit="chatManager.write(this); return false;">
						<input name="name" id="name" type="text" placeholder="별명을 입력해주세요" value="<?=$name?>"/>
						<input name="msg" id="msg" type="text" placeholder="채팅 내용을 입력해주세요"/>
						<input name="chat_group_id" id="chat_group_id" type="hidden" value="<?=$chat_group_id?>"/>
						<input name="btn" id="btn" type="submit" value="전송" />
					</form>
				</div>
			</div>
			<!-- <button onclick="history.back()" class="backButton">나가기</button> -->
		</div>
		

	</body>
</html>