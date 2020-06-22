function logoutchk(){
		value=document.getElementById("log").innerText;
		if(value==="로그아웃"){
			if(confirm("로그아웃하시겠습니까?")){
			location.href = "lib/session_delete.php";
	    }
        return false;
	}
}//로그아웃 체크

function logchk(){
	if(confirm("로그인이 필요합니다. 로그인 하시겠습니까?")){
		location.href = "login.html";
		return true;
	} else {
    	return false;
	}
}//로그아웃 체크
$(document).ready(function () {
});
$(document).ready(function () {
    var toggleStyleSwitcher = function () {
        $('#moreMessage').addClass('bold');
    };
    $('#viewMessage').addClass('hidden');

    $('#message').click(function (event) {
        $('#viewMessage').toggleClass('hidden');
    });

    $('div:contains("ㅇㅇ")').click(toggleStyleSwitcher);
});//쪽지