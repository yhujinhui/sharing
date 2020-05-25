<?php 
	session_start();
	//print_r($_SESSION['id']);
	//print_r($_SESSION['password']);
	if(!isset($_SESSION['admin_id'])){
		echo
		'<script>
	    alert("로그인 해주세요");
	    location.href="admin_login.php";
	    </script>';
	}
?>