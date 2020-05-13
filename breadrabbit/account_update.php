<?php 
//account.php랑 코드 겹침 나중에 나누기
require_once("conn.php");

 $filtered_user_id=mysqli_real_escape_string($conn,$_GET['id']);
  $sql=
  "select * from sign where user_id={$filtered_user_id}";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($result);
  //print_r($row);
  $escaped_name=htmlspecialchars($row['name']);
  $escaped_id=htmlspecialchars($row['id']);
  $escaped_password=htmlspecialchars($row['password']);
  $escaped_tel=htmlspecialchars($row['tel']);
  $escaped_profile=htmlspecialchars($row['profile']);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	 <style>
      @import url("css/account_update.css");
    </style>
</head>
<body onload="checkedprofile('<?=$escaped_profile?>')">
	<script src="js/sign.js"></script>
	<script src="js/account_update.js"></script>
	<div>
		<form action="account_update_process.php?id=<?=$filtered_user_id?>" method="post" >
			<div class="container-right" id="container-right">
		    <div><h4 style="margin-bottom: 20px">프로필을 선택해주세요</h4></div>
		    <a href='javascript:imageClicked("rabbit")'><img src="images/rabbitprofile.png" alt="로고이미지" class="image" id="rabbit" ></a>
		    <a href='javascript:imageClicked("mouse")'><img src="images/mouseprofile.png" alt="로고이미지"  class="image" id="mouse" ></a>
		    <a href='javascript:imageClicked("monkey")'><img src="images/monkeyprofile.png" alt="로고이미지" class="image" id="monkey" ></a>
		    <a href='javascript:imageClicked("giraffe")'><img src="images/giraffeprofile.png" alt="로고이미지" class="image" id="giraffe"></a>
	     	</div>
	     	<input type="hidden" name="profile" id="profile" value="">
			<div>이름 : <input type="text" value="<?=$escaped_name?>" name="name" required></div>
			<div>id : <input type="text" value="<?=$escaped_id?>" name="id" required></div>
			<div>password : <input type="text" value="<?=$escaped_password?>" name="password" required ></div>
			<div>tel : <input type="tel" value="<?=$escaped_tel?>" name="tel" required></div>
			<div><input type="submit" value="완료" id="signbutton" onclick="imageChecked()"></div>
		</form>
	</div>
</body>
</html>