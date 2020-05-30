<?php 
require_once("conn.php");
$evtname=$_POST['evtname'];
//$eximg=basename($_FILES['eximg']['name']);
$eximgstr="";

// if(!isset($evename)||!isset($bannerimg)||isset($eximg)){
// 	echo "<script>
// 	alert('체크해주세요');
// 	history.back();
// 	</script>";
// }
//echo $bannerimg;
$uploadBase = "eventImages/"; //업로드 경로
foreach($_FILES['eximg']['name'] as $f => $name){
	$name= $_FILES['eximg']['name'][$f];
	$uploadname = $_FILES['eximg']['name'][$f];
    $uploadFile = $uploadBase.$uploadname;

    if(move_uploaded_file($_FILES['eximg']['tmp_name'][$f],$uploadFile)){
        //echo 'success';
    }else{
       // echo 'error';
    }
}

$bannerimg=$_FILES['eximg']['name']['0'];

for($i=1; $i<=3; $i++){
    if($i==3){
        $eximgstr=$eximgstr.$_FILES['eximg']['name'][$i];
    }else{
        $eximgstr=$eximgstr.$_FILES['eximg']['name'][$i].";";
    }
}
print_r($eximgstr); // 확인용	


$sql=
"insert into event(evtname,bannername,exname) values(
'{$evtname}','{$bannerimg}','{$eximgstr}')
";
$result=mysqli_query($conn,$sql);

if($result==false){
    echo '에러';
    echo mysqli_error($conn);

}else{
   header("Location: admin_event.php");
}
?>