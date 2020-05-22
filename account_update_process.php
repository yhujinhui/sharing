<?php  
require_once("conn.php");


$filtered=array(
    'name' => mysqli_real_escape_string($conn,$_POST['name']),
    'id' => mysqli_real_escape_string($conn,$_POST['id']),
    'password' => mysqli_real_escape_string($conn,$_POST['password']),
    'tel' => mysqli_real_escape_string($conn,$_POST['tel']),
    'profile' => mysqli_real_escape_string($conn,$_POST['profile']),

);
$filtered_user_id=mysqli_real_escape_string($conn,$_GET['id']);
$sql=
  "update sign set
	name='{$filtered['name']}',
	id='{$filtered['id']}',
	password='{$filtered['password']}',
	tel='{$filtered['tel']}',
	profile='{$filtered['profile']}'
	where user_id={$filtered_user_id}
  	";

  	$result = mysqli_query($conn, $sql);
    if($result==false){
        echo '에러';
        echo mysqli_error($conn);

    }else{
        header("Location: account.php?id={$filtered_user_id}");
    }
?>