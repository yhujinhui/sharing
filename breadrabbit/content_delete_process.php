<!-- 선택한 빵 삭제하기 -->
<?php 
	$prevPage = $_SERVER['HTTP_REFERER'];

    require_once('conn.php');
    
    $delete_id = $_REQUEST['id'];
    $delete_user_id = $_REQUEST['user_id'];


    $sql = "DELETE FROM content WHERE id=$delete_id;";
    //echo $sql;
    $result = mysqli_query($conn,$sql);
    print_r(mysqli_error($conn));

    if($result==false){
        echo '에러';
        echo mysqli_error($conn);

    }else{
        
        //header('location:'.$prevPage);
        echo("<script>location.replace('store.php?id=$delete_user_id');</script>"); 
    }
?>