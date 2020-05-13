<?php  
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
	<title><?=$escaped_name?>님 계정</title>
	
</head>
<body>
	<script src="js/account.js"></script>
  <div><img src="images/<?=$escaped_profile?>profile.png" alt="프로필"></div>
  <div>이름 : <?=$escaped_name?></div>
  <div>id : <?=$escaped_id?></div>
  <div>password : <?=$escaped_password?></div>
  <div>tel : <?=$escaped_tel?></div>
  <div><a href="account_update.php?id=<?=$filtered_user_id?>">계정 수정하기</a></div>
  <div><form action='account_delete_process.php' method='post'>
    <input type='hidden' name='id' value="<?=$filtered_user_id?>">
    <input type='submit' value='계정 삭제하기' onclick='return accountdeletechk()'></form></div>
</body>
</html>