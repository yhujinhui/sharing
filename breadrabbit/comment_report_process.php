<!-- 댓글 신고 -->
<?php 
	$prevPage = $_SERVER['HTTP_REFERER'];
	// 변수에 이전페이지 정보를 저장
    require_once('conn.php');
    session_start();

    $filtered=array(
        'id' => mysqli_real_escape_string($conn,$_POST['id']),
    );
    print_r($filtered['id']);
    //warning - 신고받은 횟수3번이상
    //report - 신고한사람
    $query="select warning from comment where id={$filtered['id']}";
    $result=mysqli_query($conn, $query);
    $row=mysqli_fetch_array($result);
    $cnt=$row['warning'];
    $cnt++;

    $query = 
    "update comment set 
    warning={$cnt}
    where id={$filtered['id']}
    ";

    $result = mysqli_query($conn, $query);

    if($result==false){
        echo '에러';
        echo mysqli_error($conn);

    }else{
        // header("Location: content.php?id={$filtered['user_id']}&user_id={$filtered['user_id']}");
		header('location:'.$prevPage);
    }
?>