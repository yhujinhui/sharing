<?php 
require_once("lib/header_php.php");
$title=$_GET['title'];
$list="";
$event_go="";
if(
	isset($title)&&$title=="후기 이벤트"

){
	$event_go=
	'
	<div class="event-go">
		<a href="event_go.php?title='.$title.'">이벤트 참여하기</a>
	</div>
	';
	$list=$list.
	'
	<div class="img">
		<img src="eventImages/" alt="설명 이미지">
	</div>
	<div class="img">
		<img src="eventImages/" alt="설명 이미지">
	</div>
	';
}else{
	$id=$_GET['id'];
	$sql="select * from event where id=".$id;
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
}
$strTok =explode(';' , $row['exname']);
$cnt = count($strTok);

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
	<script src="js/header.js"></script>
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
</body>
</html>