<!-- 댓글 삭제하기 -->
<?php 
	$prevPage = $_SERVER['HTTP_REFERER'];
	// 변수에 이전페이지 정보를 저장

    require_once('conn.php');
    
    $filtered=array(
        // 'user_id' => mysqli_real_escape_string($conn,$_POST['user_id']),
        'id' => mysqli_real_escape_string($conn,$_POST['id']),
    );
    print_r($filtered['id']);
    $query = 
    "delete from comment where id={$filtered['id']}";

    $result = mysqli_query($conn, $query);

    if($result==false){
        echo '에러';
        echo mysqli_error($conn);

    }else{
        // header("Location: content.php?id={$filtered['user_id']}&user_id={$filtered['user_id']}");
		header('location:'.$prevPage);
    }
?>