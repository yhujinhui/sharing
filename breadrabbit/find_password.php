<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>빵 굽는 토끼:패스워드 찾기</title>
	<style>
		@import url("css/find_id.css");
	</style>
</head>
<body>
	<script src="js/sign.js"></script> 
	<div class="container">
		<div>패스워드 찾기</div>
		<form action="find_password_process.php" method="post" autocomplete='off'>
			<label for="input_name">
				<div><input type="text" name='name' placeholder="이름을 입력해주세요" id="input_name" autocomplete='off' required></div>
				</label><br>
				<label for="input_id">
				<div><input type="text" name='id' placeholder="아이디를 입력해주세요" id="input_id" autocomplete='off' required ></div>
	    	</label>
	    	<div><input type="submit" value="확인" cols="30" style="font-size:2rem; background-color:#FCE6C3; border:0; outline: 0"></div>
    	</form>
	</div>
</body>
</html>