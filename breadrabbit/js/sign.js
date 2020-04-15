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


}
function mouseleave(){
  document.getElementById("container-right").style.display="none";
}
