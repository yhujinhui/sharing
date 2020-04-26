function logoutchk(){
		value=document.getElementById("log").innerText;
		if(value==="로그아웃"){
			if(confirm("로그아웃하시겠습니까?")){
			location.href = "first.php";
			return true;
	    } else {
	        return false;
	    }
	}
}//로그아웃 체크