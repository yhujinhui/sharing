<?php 
	require_once("conn.php");
	if($_SERVER["HTTP_REFERER"]=="http://localhost/breadrabbit/admin_login.php"){
		$id=htmlspecialchars($_POST['id']);
		$password=htmlspecialchars($_POST['password']);
		$chk=false;

		$sql="select * from admin";
		$result=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($result)){
			if($id==$row['id'] && $password==$row['password']){
				$chk=true;
				break;
			}else{
				echo
			    '<script>
			    alert("로그인 실패하셨습니다");
			    location.href="admin_login.php";
			    </script>';
			}
		}
	}
?>
