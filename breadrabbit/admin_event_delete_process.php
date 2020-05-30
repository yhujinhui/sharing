<?php 
require_once("conn.php");

if(!isset($_POST['chk'])){
	echo "<script>
	alert('하나 이상 체크해주세요');
	history.back();
	</script>";
}else{
$deleteBase = "eventImages/"; //업로드 경로
foreach($_POST['chk'] as $item){
		//echo $item;
		$sql="select * from event where id={$item}";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result);
		//echo $row['bannername'];
		//echo $row['exname'];
		unlink($deleteBase.$row['bannername']);
		$strTok =explode(';' , $row['exname']);
		$cnt = count($strTok);
		for($i = 0 ; $i < $cnt ; $i++){
			//echo($strTok[$i] . "<br/>");
			unlink($deleteBase.$strTok[$i]);
			//echo $deleteBase.$strTok[$i];
		}
		$sql="delete from event where id={$item}";
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