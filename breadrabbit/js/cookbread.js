function alert_select_value(selectBread){
    var selected_index = selectBread.selectedIndex; // selectbox에서 선택된 index를 찾음 
    var selected_value = selectBread.options[selected_index].value;     // 선택된 index의 value를 찾음 

    if(selected_value=="course"){
        console.log("course 선택됨");
        document.getElementById("breadImg").src = "images/bread1.png";
    } else if(selected_value=="family"){
        console.log("family 선택됨");
        document.getElementById("breadImg").src = "images/bread2.png";
    } else if(selected_value=="friend"){
        console.log("friend 선택됨");
        document.getElementById("breadImg").src = "images/bread3.png";
    } else if(selected_value=="love"){
        console.log("love 선택됨");
        document.getElementById("breadImg").src = "images/bread4.png";
    } else if(selected_value=="other"){
        console.log("other 선택됨");
        document.getElementById("breadImg").src = "images/bread5.png";
    }    
};