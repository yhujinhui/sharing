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
    container[0].style.backgroundImage = "url('images/slide"+count+".png')";
    dots[slideIndex-1].className += " active";
    if(count==1){
        container[0].style.backgroundColor="#F7C6C6";
    }
    if(count==2){
    	container[0].style.backgroundColor="#C6F4CC";
    }
    if(count==2){
        container[0].style.backgroundColor="#C6F4C9";
    }
    if(count==3){//사진 갯수
    	count=0;
    	slideIndex=0;
    }
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}

//이벤트 배너
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
}
