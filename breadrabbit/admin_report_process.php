<?php  
require_once("conn.php");

if(!isset($_POST['chk'])){
	echo "<script>
	alert('하나 이상 체크해주세요');
	history.back();
	</script>";
}else{
	$result="";
	foreach($_POST['chk'] as $item){
		echo $item;
		$sql="delete from comment where id={$item}";
		$result=mysqli_query($conn,$sql);
	}
	if($result==false){
        echo '에러';
        echo mysqli_error($conn);

    }else{
       header("Location: admin.php");
    }
}

?>