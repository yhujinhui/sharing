<?php 
    require_once('conn.php');
    session_start();
    
    $total;

    $sql= "select * from material where user_id='{$_SESSION['id']}'";
    $result=mysqli_query($conn,$sql);

    while($row=mysqli_fetch_array($result)){
        $total = $row['total'];
    }

    $total = $total+3;

    $query = "UPDATE material SET total=$total WHERE user_id='{$_SESSION['id']}'";
    $result2 = mysqli_query($conn, $query);

    if($result==false){
        echo '에러';
        echo mysqli_error($conn);
    }else{
        header("Location: storeGame.php");
    }
?>