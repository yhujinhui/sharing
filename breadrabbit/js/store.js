
 var modal = document.querySelector(".modal"); 
 var trigger = document.querySelector(".trigger"); 
 var closeButton = document.querySelector(".close-button"); 
 var cancelButton = document.querySelector("#cancel");
//console.log(modal);

function toggleModal() { 
     modal.classList.toggle("show-modal"); 
 }

function windowOnClick(event) { 
     if (event.target === modal) { 
         toggleModal(); 
     } 
 }

trigger.addEventListener("click", toggleModal); 
 closeButton.addEventListener("click", toggleModal); 
 cancel.addEventListener("click", toggleModal); 
 window.addEventListener("click", windowOnClick); 

 function alert_select_value(select,id){
    var selected_index = select.selectedIndex; // selectbox에서 선택된 index를 찾음 
    var selected_value = select.options[selected_index].value;     // 선택된 index의 value를 찾음 
    var index;
    if(selected_value=="all"){
        index=1;
    }
    else if(selected_value=="course"){
        console.log("course 선택됨");
        index=2;
    } else if(selected_value=="family"){
        index=3;
        console.log("family 선택됨");
    } else if(selected_value=="friend"){
        index=4;
        console.log("friend 선택됨");
    } else if(selected_value=="love"){
        index=5;
        console.log("love 선택됨");
    } else if(selected_value=="other"){
        index=6;
        console.log("other 선택됨");
    }   else if(selected_value=="mine"){
        index=7;
        console.log("mine 선택됨");
    }    
    if(!id){
        location.href="store.php?page=1"+"&kinds="+index;
    }else location.href="store.php?page=1&id="+id+"&kinds="+index;
}

 function alert_selected_value(kinds){
    document.getElementById("select").options[kinds-1].selected=true;
 }

