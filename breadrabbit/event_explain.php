<?php 
require_once("lib/header_php.php");
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="css/header.css" rel="stylesheet"> 
	<link href="css/event_explain.css" rel="stylesheet"> 
	<link href="css/footer_bottom.css" rel="stylesheet"> 
</head>
<body>
	<?php  
        require_once("lib/header_html.php");
    ?>
    <div class="content">
	 	<div class="content-title">이벤트</div>
	 	<div class="date">기한 없음</div>
	 	<div class="img">
			<img src="eventImages/test.png" alt="">
		</div>
		<div class="img">
			<img src="eventImages/test.png" alt="">
		</div>
		<div class="event-go">
			<a href="event_story.php">이벤트 참여하기</a>
		</div>
	</div>
	<?php  
        require_once("lib/footer_bottom.php");
    ?>
</body>
</html>