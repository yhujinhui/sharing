function logchk(){
	if(confirm("로그인이 필요합니다. 로그인 하시겠습니까?")){
		location.href = "login.html";
		return true;
	} else {
    	return false;
	}
}//로그아웃 체크