<?php 
	session_start();
	//print_r($_SESSION['id']);
	//print_r($_SESSION['password']);
	if(!isset($_SESSION['id'])){
		echo
		'<script>
	    alert("로그인 해주세요");
	    location.href="login.php";
	    </script>';
	}
?>