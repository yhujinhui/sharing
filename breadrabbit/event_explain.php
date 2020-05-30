<?php 
require_once("lib/header_php.php");
$id=$_GET['id'];
$sql="select * from event where id=".$id;
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$title=$row['evtname'];
$event_go="";
if(
	$row['evtname']=="이달의 사연 이벤트"

){
	$event_go=
	'
	<div class="event-go">
		<a href="event_go.php?title='.$row['evtname'].'">이벤트 참여하기</a>
	</div>
	';
}
$strTok =explode(';' , $row['exname']);
$cnt = count($strTok);
$list="";
for($i = 0 ; $i < $cnt; $i++){
	if($strTok[$i]){
		$list=$list.
		'
		<div class="img">
			<img src="eventImages/'.$strTok[$i].'" alt="설명 이미지">
		</div>
		';
	}
	//echo($strTok[$i] . "<br/>");
	//echo $cnt;
}

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
	 	<div class="content-title"><?=$title?></div>
	 	<div class="date">기한 없음</div>
		<?=$list?>
		<?=$event_go?>
	</div>
	<?php  
        require_once("lib/footer_bottom.php");
    ?>
</body>
</html>