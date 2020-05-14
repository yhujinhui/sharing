<?php  
require_once("conn.php");


// $filtered=array(
//     'name' => mysqli_real_escape_string($conn,$_POST['name']),
//     'id' => mysqli_real_escape_string($conn,$_POST['id']),
//     'password' => mysqli_real_escape_string($conn,$_POST['password']),
//     'tel' => mysqli_real_escape_string($conn,$_POST['tel']),
//     'profile' => mysqli_real_escape_string($conn,$_POST['profile']),

// );
//$filtered_user_id=mysqli_real_escape_string($conn,$_GET['id']);
$user_id = $_POST['id'];
echo $user_id;

// $sql="DELETE FROM sign WHERE id=$user_id;";
$sql= "delete from sign where user_id={$user_id}";

  	$result = mysqli_query($conn, $sql);
    if($result==false){
        echo '에러';
        echo mysqli_error($conn);

    }else{
        header("Location: first.php");
    }
    
$sql= "delete from comment where user_id={$user_id}";

    $result = mysqli_query($conn, $sql);
    if($result==false){
        echo '에러';
        echo mysqli_error($conn);

    }else{
        header("Location: first.php");
    }

$sql= "delete from content where user_id={$user_id}";

  	$result = mysqli_query($conn, $sql);
    if($result==false){
        echo '에러';
        echo mysqli_error($conn);

    }else{
        header("Location: first.php");
    }



?>