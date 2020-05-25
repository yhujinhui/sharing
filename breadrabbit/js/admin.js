function logoutchk(){
if(confirm("로그아웃하시겠습니까?")){
	location.href = "lib/admin_session_delete.php";
} 
return false;
}

function eventchk(){
if(confirm("올리면 되돌릴 수 없습니다. 올리시겠습니까?")){
	return true;
} else return false;
}