<?php 
    require_once('conn.php');
    session_start();

    echo "store_game_proc 호출";
    // $filtered=array(
    //     // 'kinds' => mysqli_real_escape_string($conn,$_POST['Kinds']),
    //     // 'title' => mysqli_real_escape_string($conn,$_POST['breadName']),
    //     // 'description' => mysqli_real_escape_string($conn,$_POST['breadContents']),
    //     'id' => mysqli_real_escape_string($conn,$_POST['id'])
    // );
    
    $total;

    $sql= "select * from material where user_id='{$_SESSION['id']}'";
    $result=mysqli_query($conn,$sql);
    // $total = $result['id'];


        while($row=mysqli_fetch_array($result)){
            $total = $row['total'];
        }

    echo "갯수".$total;


    $total = $total+1;

    $query = "UPDATE material SET total=$total WHERE user_id='{$_SESSION['id']}'";
    $result2 = mysqli_query($conn, $query);

    if($result==false){
        echo '에러';
        echo mysqli_error($conn);
    }else{
        header("Location: storeGame.php");
    }
?>