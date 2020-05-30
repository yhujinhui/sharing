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
function backcolorchange(min, max){
	min = Math.ceil(min);
 	max = Math.floor(max);
 	ran = Math.floor(Math.random() * (max - min)) + min;
 	var body=document.body.style;
 	//alert(ran);
 	switch(ran){
 		case 0:body.backgroundColor="#CCFFCA";break;
 		case 1:body.backgroundColor="#FFCAEC";break;
 		case 2:body.backgroundColor="#CAF6FF";break;
 		case 3:body.backgroundColor="#FFFACA";break;
 		case 4:body.backgroundColor="#CADEFF";break;
 		case 5:body.backgroundColor="#EBFFCA";break;
 		case 6:body.backgroundColor="#ECCAFF";break;
 		case 7:body.backgroundColor="#FFABAB";break;
 		case 8:body.backgroundColor="#FFD4AB";break;
 	}
}