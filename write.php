<!-- 빵굽기화면 -->
<?php  

?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>빵굽기</title>
	<style>
		#main_title{
			font-size: 1rem;
		}
		#store{
			font-size: 1rem;
			float:right;
		}
		header{
			border:1px solid gray;
			padding:10px;
		}
		article{
			border:1px solid gray;
			text-align: center;
			padding:10px;
		}
		body{
			margin:0px;
		}
	</style>
</head>
<body>
	<header>
		<span><a href="javascript:void(0);"  id="main_title" onClick="top.location='javascript:location.reload()'">빵굽는 토끼</a></span>
		<span><a href="" id="store">상점</a></span>		
	</header>
	<article>
		<form action="write_process.php" method="post">
			<div><input type="text" name="title" placeholder="빵 이름을 지어주세요"></div>
			<div><textarea name="description" placeholder="고민을 적어주세요"></textarea></div>
			<div><input type="submit" value="확인"></div>
		</form>
	</article>		
</body>
</html>