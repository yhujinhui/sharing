<!-- content 수정/업데이트하기 -->
<?php 
    require_once('conn.php');
    
    $filtered=array(
        'kinds' => mysqli_real_escape_string($conn,$_POST['Kinds']),
        'title' => mysqli_real_escape_string($conn,$_POST['breadName']),
        'description' => mysqli_real_escape_string($conn,$_POST['breadContents']),
        'content_id' => mysqli_real_escape_string($conn,$_POST['content_id']),
        'user_id' => mysqli_real_escape_string($conn,$_POST['user_id']),

    );
    
    $query = 
    "update content set 
    	kinds='{$filtered['kinds']}',
    	title='{$filtered['title']}',
    	description='{$filtered['description']}' 
    	where id={$filtered['content_id']}
    	";

    $result = mysqli_query($conn, $query);

    if($result==false){
        echo '에러';
        echo mysqli_error($conn);

    }else{
        header("Location: store.php?page=1&id={$filtered['user_id']}&kinds=all");
    }
?>