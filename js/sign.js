
function inputPhoneNumber(obj) {

  var number = obj.value.replace(/[^0-9]/g, "");
  var phone = "";

  if(number.length < 4) {
      return number;
  } else if(number.length < 7) {
      phone += number.substr(0, 3);
      phone += "-";
      phone += number.substr(3);
  } else if(number.length < 11) {
      phone += number.substr(0, 3);
      phone += "-";
      phone += number.substr(3, 3);
      phone += "-";
      phone += number.substr(6);
  } else {
      phone += number.substr(0, 3);
      phone += "-";
      phone += number.substr(3, 4);
      phone += "-";
      phone += number.substr(7);
  }
  obj.value = phone;
}//전화번호 하이픈 처리

function checkPw() {
  pw1 = document.getElementById("input_password").value;
  pw2 = document.getElementById("check_password").value; 

  if (pw1 != pw2) {
    document.getElementById("passwordCheckText").innerHTML="패스워드가 일치하지 않습니다.";
    return false;
    
  }else {
    document.getElementById("passwordCheckText").innerHTML="패스워드가 일치합니다.";
    return true;
  }
}//패스워드 일치하는지 확인

function mouseover(){ 
  document.getElementById("container-right").style.width="1200px";
  document.getElementById("container-right").style.display="block";
}//container에 마우스가 올려져 있을시
function mouseleave(){
  document.getElementById("container-right").style.display="none";
}//container에 마우스가 벗어나 있을시

animal="";
function imageClicked(a){
  // alert(1);
  rabbit=document.getElementById("rabbit");
  mouse=document.getElementById("mouse");
  monkey=document.getElementById("monkey");
  giraffe=document.getElementById("giraffe");

  if(a==="rabbit"){
      rabbit.style.border="3px dashed #F94373";
      mouse.style.border="0";
      monkey.style.border="0";
      giraffe.style.border="0";
  }
  else if(a==="mouse"){
      mouse.style.border="3px dashed #F97C28";
      rabbit.style.border="0";
      monkey.style.border="0";
      giraffe.style.border="0";

  }
  else if(a==="monkey"){
      monkey.style.border="3px dashed #21CE67";
      mouse.style.border="0";
      rabbit.style.border="0";
      giraffe.style.border="0";

  }
  else if(a==="giraffe"){
      giraffe.style.border="3px dashed #F9BD00";
      mouse.style.border="0";
      monkey.style.border="0";
      rabbit.style.border="0";
  }
  animal=a;
}

function imageChecked(){ 
  if(!animal){
  animal="rabbit";
  }
  document.getElementById("profile").value=animal;
}