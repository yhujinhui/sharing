<?php  
require_once("lib/header_php.php");
$page=0;
if(!isset($_SESSION['id'])){
	echo'
	<script>
	alert("로그인이 필요합니다.");
	history.back();
	</script>';
}
if(!isset($_GET['page'])){
	$page=1;
}else{
	$page=$_GET['page'];
}
$sql=
"select count(*) totalCount from chat_group";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$total_article=$row['totalCount'];//게시물 총 개수
$cnt=$total_article;
if($total_article==0){
	$total_article=1;
}
$view_article=5;//페이지당 게시물 개수2
$start=($page-1)*$view_article;
$total_page=ceil($total_article/$view_article);

$sql=
"select * from chat_group order by _id desc limit $start, $view_article";
$result=mysqli_query($conn,$sql);
$list="";
$primary="";

while($row=mysqli_fetch_array($result)){
	if(empty($row['password'])){
		$primary="unLock";
	}else{
		$primary="lock";
	}
	$list=$list.
	"
	<a href='#' onclick='primaryChk(\"".$primary."\",".$row['_id'].",\"".$row['title']."\")'>
	<div class='list'>
		<div class='no'>
			".$cnt--."
		</div>
		<div class='chatTitle'>
			".$row['title']."
		</div>
		<div class='primary'>
			<img src='images/".$primary.".png'>
		</div>
	</div>
	</a>
	";
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		@import url("css/chat_group.css")
	</style>
	<script src="js/chat_group.js"></script>
</head>
<body onload="pageButton(<?=$page?>,<?=$total_page?>)">
	<div class="wrapper">
		<div class="password" id="pwddiv">
			<div class="offButton" onclick="document.getElementById('pwddiv').style.display='none';">
				<img src="images/offButton.png" alt="">
			</div>
			<div class="wrapper">
				<div class="title">비밀번호를 입력해주세요</div>
				<div class="chatTitle" id="chatTitle"></div>
				<form action="chat_password_chk.php" method="post">
				<div class="inputpwd">
					<input type="password" id="password" name="password" required>
					<input type="hidden" id="idhidden" name="id" value="">
				</div>
				<div class="button">
					<input type="submit" id="pwdbutton" value="입장">
				</div>
				</form>
			</div>
		</div>
		<div class="container">
			<div class="title">
				채팅방 목록
			</div>
			<div class="main">
				<div class="left" id="left">
					<img src="images/left.png" alt="" onclick="prepage(<?=$page?>)">
				</div>
				<div class="board">
					<div class="title">
						<div class="no">
							방 번호
						</div>
						<div class="chatTitle">
							방 이름
						</div>
						<div class="primary">
							비밀방
						</div>
					</div>
					<div class="lists">
						<?=$list?>
					</div>
					<div class="page">
						<?=$page?>/<?=$total_page?>
					</div>
				</div>
				<div class="right" id="right">
					<img src="images/right.png" alt="" onclick="nextpage(<?=$page?>,<?=$total_page?>)">
				</div>
			</div>
		</div>
		<div class="bottom">
			<div class="create-group">
				<a href="chat_group_create.php">방 만들기</a>
			</div>
		</div>
	</div>
</body>
</html>