<?php  
require_once("conn.php");
session_start();

$filtered=array(
        'description' => mysqli_real_escape_string($conn,$_POST['description']),
        'id' => mysqli_real_escape_string($conn,$_SESSION['id'])
    );

$sql="select count(*) from story_evt where user_id={$filtered['id']}";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
//print_r($row);
if($row[0]>=1){
	echo "<script>
	alert('이미 이벤트에 참여하셨습니다');
	location.href='first.php';
	</script>";
}else{
	$sql = 
    "insert into story_evt(description, created, user_id) 
    values('{$filtered['description']}',now(),'{$filtered['id']}')";
$result=mysqli_query($conn,$sql);

if($result==false){
        echo '에러';
        echo mysqli_error($conn);

    }else{
        header("Location: event.php");
    }
}
?>