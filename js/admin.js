function logoutchk(){
if(confirm("로그아웃하시겠습니까?")){
	location.href = "admin_login.php";
	return true;
} else {
        return false;
    }
}
