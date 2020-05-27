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
</head>
<body>
	<?php  
        require_once("lib/header_html.php");
    ?>
	<form action="event_process.php" method="post">
		<textarea name="description" id="" cols="30" rows="10"></textarea>
		<input type="hidden" name="id" value="<?=$escaped_id?>">
		<input type="submit" value="참여하기" onclick="<?=$logchk?>">
	</form>
</body>
</html>