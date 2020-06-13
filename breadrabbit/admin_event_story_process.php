<?php 
require_once("conn.php");

$filtered=array(
	'comment'=>mysqli_real_escape_string($conn,$_POST['comment']),
	'user_id'=>mysqli_real_escape_string($conn,$_POST['user_id'])
);
$sql="select count(comment) from story_evt";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if($row[0]>=1){
	echo ('<script>
	alert("이미 이벤트를 추첨하였습니다");
	location.href="admin.php";
	</script>');

}else{
	$sql="
	update story_evt set
	comment='{$filtered['comment']}'
	where user_id='{$filtered['user_id']}'
	";

	$result=mysqli_query($conn,$sql);
	$dateString = date("Y-m-d");
	//print_r($dateString);
	//$dateString = date("Y-m-d",strtotime ("+1 days"));

	// $sql="delete from story_evt where DATE_FORMAT(created, '%Y-%m-%d')='{$dateString}' 
	// AND user_id!='{$filtered['user_id']}'
	// ";

	// $result=mysqli_query($conn,$sql);

	if($result==false){
        echo '에러';
        echo mysqli_error($conn);

    }else{
       header("Location: admin.php");
    }
}
?>