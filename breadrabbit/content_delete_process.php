<!-- 선택한 빵 삭제하기 -->
<?php 
	$prevPage = $_SERVER['HTTP_REFERER'];

    require_once('conn.php');
    
    $filtered=array(
        'user_id' => mysqli_real_escape_string($conn,$_POST['user_id']),
        'id' => mysqli_real_escape_string($conn,$_POST['id']),
    );

    $contentsql = "delete from content where id={$filtered['id']}";
    //echo $sql;
    $contentresult = mysqli_query($conn,$contentsql);

    $commentsql = "delete from comment where content_id={$filtered['id']}";
    $commentresult = mysqli_query($conn,$commentsql);

    if($contentresult==false||$commentresult==false){
        echo '에러';
        echo mysqli_error($conn);

    }else{
       header("Location: store.php?id={$filtered['user_id']}");
    }
?>