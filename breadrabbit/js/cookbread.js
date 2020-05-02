function alert_select_value(selectBread){
    var selected_index = selectBread.selectedIndex; // selectbox에서 선택된 index를 찾음 
    var selected_value = selectBread.options[selected_index].value;     // 선택된 index의 value를 찾음 
    document.getElementById("breadImg").src="images/"+selected_value+".png";  
}   
function alerted_selected_value(kinds){
    document.getElementById("selectKinds").value=kinds;
 }
function chkBreadKinds(){
    var bread = document.getElementById("selectKinds");
    var breadvalue = bread.options[bread.selectedIndex].value;
    console.log("value값 : "+breadvalue);

    if(breadvalue == "none"){        
        alert("빵 종류를 선택해주세요");
        return false;

    }else{
        showWiseSaying();
        return true;
    }
}

function showWiseSaying(){
    window.open("wiseSaying.php","책 속의 한줄","width=600, height=500, left=100, top=50");
}