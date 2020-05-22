<?php 
require_once('conn.php');
$sql='select * from sign';
$result=mysqli_query($conn,$sql);
// <input type="hidden" name="user_id" value=<?=$row[]

$filtered=array(
'id'=>mysqli_real_escape_string($conn,$_POST['id']),
'password'=>mysqli_real_escape_string($conn,$_POST['password']),
);
$bool=true;
while($row=mysqli_fetch_array($result)){
  if(!empty($filtered['id'])&&!empty($filtered['password'])){
    if($filtered['id']==$row['id']&&$filtered['password']==$row['password']){
      $bool=false;
      break;
    }
  }else{
    echo
    '<script>
    alert("아이디나 비밀번호를 입력해주세요");
    location.href="login.html";
    </script>';
  }	
}
  
if($bool){
	  echo 
    '<script>
    alert("가입하지 않은 아이디이거나, 잘못된 비밀번호입니다.");
    location.href="login.html";
    </script>';
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form method="post" name="form" action="first.php?id=<?=$row['user_id']?>">
    <script>document.form.submit();</script>
  </form>
</body>
</html>