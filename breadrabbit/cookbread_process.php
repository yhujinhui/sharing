<!-- 빵굽기화면에서 입력한 정보를 mysql에 연동 -->
<?php 
    require_once('conn.php');
    
    $filtered=array(
        'kinds' => mysqli_real_escape_string($conn,$_POST['Kinds']),
        'title' => mysqli_real_escape_string($conn,$_POST['breadName']),
        'description' => mysqli_real_escape_string($conn,$_POST['breadContents']),
        'user_id' => mysqli_real_escape_string($conn,$_POST['user_id'])
    );
    
    $query = 
    "insert into content(title, description, created, kinds,user_id) 
    values('{$filtered['title']}','{$filtered['description']}',now(),'{$filtered['kinds']}','{$filtered['user_id']}')";

    $result = mysqli_query($conn, $query);

    if($result==false){
        echo '에러';
        echo mysqli_error($conn);

    }else{
        header("Location: store.php?page=1&id={$filtered['user_id']}");
    }
?>