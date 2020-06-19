

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
        container[0].style.backgroundColor="#f4e0e3";
    }
    if(count==2){
    	container[0].style.backgroundColor="#c6e2da";
    }
    if(count==3){
        container[0].style.backgroundColor="#d5d7d4";
    }
    if(count==3){//사진 갯수
    	count=0;
    	slideIndex=0;
    }
    setTimeout(showSlides, 4000); // Change image every 2 seconds
}

//이벤트 배너
var slideEventIndex = 1;
showEventSlides(slideEventIndex);

function plusSlides(n) {
  showEventSlides(slideEventIndex += n);
}

function currentSlide(n) {
  showEventSlides(slideEventIndex = n);
}

function showEventSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideEventIndex = 1}
  if (n < 1) {slideEventIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[slideEventIndex-1].style.display = "block";
}

function openEvent(){
  window.open("popupEvent.html", "popup01", "width=400, height=360");
}
