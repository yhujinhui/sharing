function alert_select_value(selectBread){
    var selected_index = selectBread.selectedIndex; // selectbox에서 선택된 index를 찾음 
    var selected_value = selectBread.options[selected_index].value;     // 선택된 index의 value를 찾음 
    document.getElementById("breadImg").src="images/"+selected_value+".png";  
}   
function alerted_selected_value(kinds){
    document.getElementById("selectKinds").value=kinds;
}

// 빵 종류 유효성 검사
function chkBreadKinds(){
    var bread = document.getElementById("selectKinds");
    var breadvalue = bread.options[bread.selectedIndex].value;
    console.log("value값 : "+breadvalue);

    if(breadvalue == "none"){        
        alert("빵 종류를 선택해주세요");
        return false;

    }else{
        return true;
    }
}



function clickpost(kinds){
        if(kinds!=''){
            document.getElementById("over").style.display="block";
            document.getElementById("post").style.display="block";
        }
}
function clickLocation(kinds){
    location.href="cookbread.php?kinds="+kinds;
}
function clickover(url){
    document.getElementById("over").style.display="none";
    document.getElementById("post").style.display="none";
    history.back();
}

//배너
var slideEventIndex = 1;
showSlides(slideEventIndex);

function plusSlides(n) {
  showSlides(slideEventIndex += n);
}

function currentSlide(n) {
  showSlides(slideEventIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideEventIndex = 1}
  if (n < 1) {slideEventIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[slideEventIndex-1].style.display = "block";
}

// 팝업창 가운데 띄우기
function openPopupCourse() {
    var _width = '500';
    var _height = '600';
    // 팝업을 가운데 위치시키기 위해 아래와 같이 값 구하기
    var _left = (window.screen.width / 2) - (_width / 2);
    // 만들 팝업창 width 크기의 1/2 만큼 보정값으로 빼주었음
    var _top= (window.screen.height / 2) - (_height / 2);
    window.open('cookbread_content.php?kinds=course', '_blank', 'width='+ _width +', height='+ _height +', left=' + _left + ', top='+ _top );
}
function openPopupFamily() {
    var _width = '500';
    var _height = '600';
    // 팝업을 가운데 위치시키기 위해 아래와 같이 값 구하기
    var _left = (window.screen.width / 2) - (_width / 2);
    // 만들 팝업창 width 크기의 1/2 만큼 보정값으로 빼주었음
    var _top= (window.screen.height / 2) - (_height / 2);
    window.open('cookbread_content.php?kinds=family', '_blank', 'width='+ _width +', height='+ _height +', left=' + _left + ', top='+ _top );
}
function openPopupFriend() {
    var _width = '500';
    var _height = '600';
    // 팝업을 가운데 위치시키기 위해 아래와 같이 값 구하기
    var _left = (window.screen.width / 2) - (_width / 2);
    // 만들 팝업창 width 크기의 1/2 만큼 보정값으로 빼주었음
    var _top= (window.screen.height / 2) - (_height / 2);
    window.open('cookbread_content.php?kinds=friend', '_blank', 'width='+ _width +', height='+ _height +', left=' + _left + ', top='+ _top );
}
function openPopupLove() {
    var _width = '500';
    var _height = '600';
    // 팝업을 가운데 위치시키기 위해 아래와 같이 값 구하기
    var _left = (window.screen.width / 2) - (_width / 2);
    // 만들 팝업창 width 크기의 1/2 만큼 보정값으로 빼주었음
    var _top= (window.screen.height / 2) - (_height / 2);
    window.open('cookbread_content.php?kinds=love', '_blank', 'width='+ _width +', height='+ _height +', left=' + _left + ', top='+ _top );
}
function openPopupOther() {
    var _width = '500';
    var _height = '600';
    // 팝업을 가운데 위치시키기 위해 아래와 같이 값 구하기
    var _left = (window.screen.width / 2) - (_width / 2);
    // 만들 팝업창 width 크기의 1/2 만큼 보정값으로 빼주었음
    var _top= (window.screen.height / 2) - (_height / 2);
    window.open('cookbread_content.php?kinds=other', '_blank', 'width='+ _width +', height='+ _height +', left=' + _left + ', top='+ _top );
}

/* Demo purposes only */
$(".hover").mouseleave(
    function() {
        $(this).removeClass("hover");
    }
);