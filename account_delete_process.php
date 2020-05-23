<?php  
require_once("conn.php");

$user_id = $_POST['id'];
echo $user_id;

// $sql="DELETE FROM sign WHERE id=$user_id;";
$sql= "delete from sign where user_id={$user_id}";

  	$result = mysqli_query($conn, $sql);
    if($result==false){
        echo '에러';
        echo mysqli_error($conn);

    }else{
        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['password']);
        unset($_SESSION['user_id']);
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