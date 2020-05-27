<?php 
require_once("lib/header_php.php");

?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>이벤트</title>
	<link href="css/header.css" rel="stylesheet"> 
	<link href="css/event.css" rel="stylesheet"> 
	<link href="css/footer_bottom.css" rel="stylesheet"> 

</head>
<body>
	<?php  
        require_once("lib/header_html.php");
    ?>
	 <div class="content">
	 	<div class="content-title">이벤트</div>
	 	<div class="eventlist">
	 		<a href="event_explain.php" class="items">
	 			<span class="img">
	 				<img src="images/slide1.png" alt="" width="380" height="270">
	 				<div class="explain">
	 					<div class="event-title">오늘의 사연 이벤트</div>
	 					<div class="date">기한 없음</div>
	 				</div>
	 			</span>
	 		</a>
	 		<a href="event_explain.php" class="items">
	 			<span class="img">
	 				<img src="images/slide2.png" alt="" width="380" height="270">
	 				<div class="explain">
	 					<div class="event-title">오늘의 사연 이벤트</div>
	 					<div class="date">기한 없음</div>	
	 				</div>
	 			</span>
	 		</a>
	 		<!-- <a href="event_explain.php" class="items">
	 			<span class="img">
	 				<img src="images/slide1.png" alt="" width="380" height="270">
	 				<div class="explain">
	 					<div class="event-title">오늘의 사연 이벤트</div>
	 					<div class="date">기한 없음</div>
	 				</div>
	 			</span>
	 		</a> -->
	 	</div>
	 </div>
	 <?php  
       require_once("lib/footer_bottom.php");
     ?>
</body>
</html>