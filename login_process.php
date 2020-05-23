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
      session_start();
      $_SESSION['id']=$filtered['id'];
      $_SESSION['password']=$filtered['password'];
      $_SESSION['user_id']=$row['user_id'];
      $bool=false;
      header("Location: first.php");
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
