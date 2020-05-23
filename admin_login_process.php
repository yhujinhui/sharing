<?php 
	require_once("conn.php");
	
	$id=htmlspecialchars($_POST['id']);
	$password=htmlspecialchars($_POST['password']);
	$chk=false;

	$sql="select * from admin";
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($result)){
		if($id==$row['id'] && $password==$row['password']){
			$chk=true;
			session_start();
			$_SESSION['admin_id']=$id;
			$_SESSION['admin_password']=$password;
			header("Location: admin.php");
			break;
		}else{
			echo
		    '<script>
		    alert("로그인 실패하셨습니다");
		    location.href="admin_login.php";
		    </script>';
		}
	}
?>
