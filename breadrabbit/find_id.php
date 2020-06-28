<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>빵 굽는 토끼:아이디 찾기</title>
	<style>
		@import url("css/find_id.css");
	</style>

</head>
<body>
	<header></header>
	<script src="js/sign.js"></script> 
	<div class="container">
		<div id="id" style="font-size:20px;font-family:'NanumBarunGothic';">아이디 찾기</div>
		<form action="find_id_process.php" method="post" autocomplete='off'>
			<label for="input_name">
				<div><input type="text" name='name' placeholder="이름을 입력해주세요" id="input_name" autocomplete='off' required></div>
				</label><br>
				<label for="input_tel">
				<div><input type="tel" name='tel' placeholder="전화번호를 입력해주세요"  id="input_tel" autocomplete='off' oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" onKeyup="inputPhoneNumber(this);" maxlength="13"required></div>
	    	</label>
	    	<div><input type="submit" value="확인" cols="30" style="font-size:1rem;  font-family: 'NanumBarunGothic'; background-color:#4F4890; color:white; border:0; outline: 0; width:100px; height:30px; margin-top:10px"></div>
    	</form>
	</div>
</body>
</html>