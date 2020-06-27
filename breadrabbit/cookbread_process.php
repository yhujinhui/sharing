<!-- 빵굽기화면에서 입력한 정보를 mysql에 연동 -->
<?php 
    require_once('conn.php');
    session_start();

    //재료 개수 체크
    $sql= "select * from material where user_id='{$_SESSION['id']}'";
    $result=mysqli_query($conn,$sql);

    while($row=mysqli_fetch_array($result)){
        $total = $row['total'];
    }
    
    if($total>0){
        $total = $total-1;
        $query = "UPDATE material SET total=$total WHERE user_id='{$_SESSION['id']}'";
        $result2 = mysqli_query($conn, $query);

        if($result==false){
            echo '에러';
            echo mysqli_error($conn);
        }

        $filtered=array(
            'kinds' => mysqli_real_escape_string($conn,$_POST['Kinds']),
            'title' => mysqli_real_escape_string($conn,$_POST['breadName']),
            'description' => mysqli_real_escape_string($conn,$_POST['breadContents']),
            'user_id' => mysqli_real_escape_string($conn,$_POST['user_id'])
        );
        
        $query = 
        "insert into content(title, description, created, kinds,user_id,views) 
        values('{$filtered['title']}','{$filtered['description']}',now(),'{$filtered['kinds']}','{$filtered['user_id']}',0)";
    
        $result = mysqli_query($conn, $query);
    
        if($result==false){
            echo '에러';
            echo mysqli_error($conn);
    
        }else{
            header("Location: cookbread.phpS");
        }
    }else{
        echo
        '<script>
        alert("재료가 부족합니다.. 상점에서 재료를 모아주세요!");
        location.href="storeGame.php";
        </script>';
        
    }


    
?>