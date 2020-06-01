
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

 function alert_select_value(select){
    var selected_index = select.selectedIndex; // selectbox에서 선택된 index를 찾음 
    var selected_value = select.options[selected_index].value;     // 선택된 index의 value를 찾음 
    location.href="store.php?page=1"+"&kinds="+selected_value;
}

 function alert_selected_value(kinds){
    document.getElementById("select").value=kinds;
 }

