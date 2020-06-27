function prepage(page){//현재페이지
	// alert(page);
	// alert(total);
	if(page>1){
		location.href="chat_group.php?page="+(page-1);
	}else{
	}
}
function nextpage(page,total){//현재페이지,총 페이지 수
	// alert(typeof(page));
	if(page<total){
		location.href="chat_group.php?page="+(page+1);
	}else{
	}
}
function pageButton(page,total){
	if(page==1&&total==1){
		// alert("dd");
		document.getElementById("right").style.display="none";
		document.getElementById("left").style.display="none";
	}else if(page==1){
		document.getElementById("left").style.display="none";
		document.getElementById("right").style.display="block";
	}else if(page==total){
		document.getElementById("right").style.display="none";
		document.getElementById("left").style.display="block";
	}
}
function primaryChk(key,id,title){
	// alert(key);
	if(key=="lock"){
		document.getElementById("pwddiv").style.display="block";
		document.getElementById("chatTitle").innerText=title;
		document.getElementById("idhidden").value=id;
	}else{
		location.href="chatting.php?id="+id;
	}
}
