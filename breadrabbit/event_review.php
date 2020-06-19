<?php 
require_once("lib/header_php.php");
$escaped_id="";
$logchk="";
if(isset($_SESSION['user_id'])){
	$escaped_id=isset($_SESSION['user_id']);
}else{
	$logchk='return logchk()';
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>이벤트</title>
	<script src="js/content.js"></script>
	<link href="css/header.css" rel="stylesheet">
	<link href="css/event_review.css" rel="stylesheet"> 
</head>
<body>
	<?php  
        require_once("lib/header_html.php");
    ?>
    <div class="wrapper">
    	<div class="container">
    		<div class="container-left">
	    		<img src="images/reviewEvent.png" alt="">
	    	</div>
	    	<div class="container-right">
	    		<form action="event_review_process.php" method="post">
	    			<div class="top">
						<textarea name="description" id="description" cols="30" rows="10"></textarea>
	    			</div>
	    			<div class="bottom">
	    				<input type="text" name="tel" id="tel">
	    				<input type="submit" value="참여하기" onclick="<?=$logchk?>">
	    			</div>
				</form>
	    	</div>
    	</div>
	</div>
</body>
</html>