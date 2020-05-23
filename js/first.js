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

var slideIndex = 0;
// showSlides();
var count=0;
function showSlides() {
	count++;
    var i;
    var dots = document.getElementsByClassName("dot");
    var container = document.getElementsByClassName("container");

    slideIndex++;
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
        
    }
    container[0].style.backgroundImage = "url('images/slide0"+count+".png')";
    dots[slideIndex-1].className += " active";
    if(count==0){
    	container[0].style.backgroundColor="#ffffff";
    }
    if(count==3){//사진 갯수
    	count=0;
    	slideIndex=0;
    }
    setTimeout(showSlides, 7000); // Change image every 2 seconds
}
