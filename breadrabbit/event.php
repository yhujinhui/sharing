<?php 
require_once("lib/header_php.php");

$sql="select count(*) from event";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$event_cnt=$row['count(*)'];
$items="";
if($event_cnt<=0){
	echo 
	'
	<script>alert("현재 진행중인 이벤트가 없습니다");history.back();</script>
	';
}else{
	$sql="select * from event";
	$result=mysqli_query($conn,$sql);
	$banner=array();
	$cnt=0;
	while($row=mysqli_fetch_array($result)){
	  //rint_r($row);
	  $banner[$cnt]=$row['bannername'];
	  $items=$items.
	  '
	  <a href="event_explain.php?id='.$row['id'].'" class="items">
			<span class="img">
				<img src="eventImages/'.$banner[$cnt].'" alt="" width="380" height="270">
				<div class="explain">
					<div class="event-title">'.$row['evtname'].'</div>
					<div class="date">기한 없음</div>
				</div>
			</span>
		</a>
	  ';
	}
}

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
	 		<!-- <a href="event_explain.php" class="items">
	 			<span class="img">
	 				<img src="images/slide1.png" alt="" width="380" height="270">
	 				<div class="explain">
	 					<div class="event-title">오늘의 사연 이벤트</div>
	 					<div class="date">기한 없음</div>
	 				</div>
	 			</span>
	 		</a> -->
	 		<?=$items?>
	 	</div>
	 </div>
	 <?php  
       require_once("lib/footer_bottom.php");
     ?>
</body>
</html>