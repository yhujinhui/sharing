function checksubmit(){
    var chk = document.test;
    var checked_items = 0;
    for (i=0;i<chk.elements.length;i++) //특정 영역을 체크 할때는 숫자로 대신 한다 예: for(i=3;i<21;i++)
    {
        if (chk.elements[i].checked)
            checked_items++;
    }
    if(checked_items < 8){
        alert("선택하지 않은 항목이 있습니다.");
        return false;
    }
        return true;

        
}