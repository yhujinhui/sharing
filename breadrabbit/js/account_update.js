animal="";
function checkedprofile(profile){
	var clickprofile=document.getElementById(profile);
	var color;
	if(profile==="rabbit"){
		color="#F94373";
	}else if(profile==="mouse"){
		color="#F97C28";
	}else if(profile==="monkey"){
		color="#21CE67";
	}else if(profile==="giraffe"){
		color="#F9BD00";
	}
	animal=profile;
	clickprofile.style.border="3px dashed"+color;
}

function updateimageChecked(profile){ 
  if(!animal){
  animal=profile;
  }
  document.getElementById("profile").value=animal;
}