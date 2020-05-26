function logchk(){
	if(confirm("로그인이 필요합니다. 로그인 하시겠습니까?")){
		location.href = "login.php";
	} 
	return false;
}//로그아웃 체크

function deletechk(){
	if(confirm("댓글을 삭제하시겠습니까?")){
		history.back();
		return true;
	} else {
    	return false;
	}
}//로그아웃 체크

function contentdeletechk(){
	if(confirm("선택한 빵을 삭제하시겠습니까?")){
		history.back();
		return true;
	} else {
    	return false;
	}
}
function reportchk(){
	if(confirm("댓글을 신고하시겠습니까?")){
		history.back();
		return true;
	} else {
    	return false;
	}
}