<!-- 빵굽기화면 -->
<?php  


?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>빵굽기</title>
	<style>
      @import url("css/header.css");
      @import url("css/write.css");
	</style>
</head>
<body>
	<?php 
	    require_once("lib/header.html");
	?>
	<article>
		<form action="write_process.php" method="post">
			<div><input type="text" name="title" placeholder="빵 이름을 지어주세요"></div>
			<div><textarea name="description" placeholder="고민을 적어주세요"></textarea></div>
			<div><input type="submit" value="확인"></div>
		</form>
	</article>		
</body>
</html>