function accountdeletechk(){
	if(confirm("계정을 삭제하시겠습니까?")){
		history.back();
		return true;
	} else {
    	return false;
	}
}