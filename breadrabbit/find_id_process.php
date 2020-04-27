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
$id="";

$filtered=array(
'name'=>mysqli_real_escape_string($conn,$_POST['name']),
'tel'=>mysqli_real_escape_string($conn,$_POST['tel']),
);

while ($row=mysqli_fetch_array($result)) {

	if($filtered['name']==$row['name']&&$filtered['tel']==$row['tel']){	
		// echo
		// '<script>
	 //    alert("입력하신 정보가 존재하지 않습니다");
  //  		location.href="login.html";
	 //    </script>';
		$id=$row['id'];
		$bool=false;
	}
}
if($bool){
	echo
	'<script>
    alert("입력하신 정보가 존재하지 않습니다");
		location.href="find_id.php"; //없으면 다시
    </script>';
}
?>
	<div class="container">
	  	<div>아이디</div>
	  	<div><?=$id?></div>
	  </div>
	</body>
</html>