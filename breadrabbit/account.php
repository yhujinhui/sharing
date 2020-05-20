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
	<link href="css/account.css" rel="stylesheet">
</head>
<body>
  <script src="js/account.js"></script>
  
  <div class="boxProfile"> 

    <div class="text">프로필</div>

    <div><img src="images/<?=$escaped_profile?>profile.png" alt="프로필"  class="image"></div>

    <div class="info">
      <div class="name">이름</div> <div class="name2"><?=$escaped_name?></div>
      <div class="id">아이디</div> <div class="id2"><?=$escaped_id?></div>
      <div class="pw">비밀번호</div> <div class="pw2"><?=$escaped_password?></div>
      <div class="tel">전화번호</div> <div class="tel2"><?=$escaped_tel?></div>
    </div>

    <div>
      <form action='account_delete_process.php' method='post'>
      <input type='button' value='수정' class="updateButton" onClick="location.href='account_update.php?id=<?=$filtered_user_id?>'">
      <input type='hidden' name='id' value="<?=$filtered_user_id?>">
      <input type='submit' value='삭제' class="deleteButton" onclick='return accountdeletechk()'>
      </form>
    </div>
  </div>

  <button type="button" class="backButton" onclick="goback();">뒤로가기</button>

</body>
</html>