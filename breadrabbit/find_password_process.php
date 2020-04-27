<!DOCTYPE html>
	<html lang="ko">
	<head>
	  <meta charset="UTF-8">
	  <title>Document</title>
	</head>
	<body>
<?php 
require_once('conn.php');
$sql='select * from sign';
$result=mysqli_query($conn,$sql);
$bool=true;
$password="";

$filtered=array(
'name'=>mysqli_real_escape_string($conn,$_POST['name']),
'id'=>mysqli_real_escape_string($conn,$_POST['id']),
);

while ($row=mysqli_fetch_array($result)) {

	if($filtered['name']==$row['name']&&$filtered['id']==$row['id']){	
		// echo
		// '<script>
	 //    alert("입력하신 정보가 존재하지 않습니다");
  //  		location.href="login.html";
	 //    </script>';
		$password=$row['password'];
		$bool=false;
	}
}
if($bool){
	echo
	'<script>
    alert("입력하신 정보가 존재하지 않습니다");
	location.href="find_password.php"; //없으면 다시
    </script>';
}
?>
	<div class="container">
	  	<div>패스워드</div>
	  	<div><?=$password?></div>
	  </div>
	</body>
</html>