<?php 
require_once("conn.php");

$filtered=array(
	'comment'=>mysqli_real_escape_string($conn,$_POST['comment']),
	'user_id'=>mysqli_real_escape_string($conn,$_POST['user_id'])
);
$sql="select count(*) from event_winning";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if($row[0]>=1){
	echo ('<script>
	alert("이미 이벤트를 추첨하였습니다");
	location.href="admin.php";
	</script>');

}else{
	$sql="insert into event_winning values
	('{$filtered['user_id']}','{$filtered['comment']}')";

	$result=mysqli_query($conn,$sql);
	$dateString = date("Y-m-d");
	//print_r($dateString);
	//$dateString = date("Y-m-d",strtotime ("+1 days"));

	$sql="delete from event where DATE_FORMAT(created, '%Y-%m-%d')='{$dateString}' 
	AND user_id!='{$filtered['user_id']}'
	";

	$result=mysqli_query($conn,$sql);

	if($result==false){
        echo '에러';
        echo mysqli_error($conn);

    }else{
       header("Location: admin.php");
    }
}
?>