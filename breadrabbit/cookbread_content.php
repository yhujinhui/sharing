<?php
    require_once("conn.php");

    if(isset($_GET['kinds'])){
        $kinds=$_GET['kinds'];
    }

    $start=0;
    $view_article=20;//페이지당 게시물 개수
    
    switch ($kinds) {
        case 'all':$sql="select * from content limit $start, $view_article";break;
        case 'mine':$sql= "select * from content where user_id={$_SESSION['user_id']} limit $start, $view_article";break;
        default:$sql= "select * from content where kinds='{$kinds}' limit $start, $view_article";break;
    }
    $result=mysqli_query($conn,$sql);
    $content='';
    while($row=mysqli_fetch_array($result)){
        $content=$content.
        '
            <a href="content.php?id='.$row['id'].'">
                <div class="content">
                    <div class="title">'.$row['title'].'</div>
                    <div class="views">'.$row['views'].'</div>
                </div>
            </a>
            <br>
        ';
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>빵 굽기 화면</title>
        <link href="css/cookbread_content.css" rel="stylesheet"> 
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="js/header.js"></script>
        <script src="js/message.js"></script>
        <!-- <script src="js/cookbread_content.js"></script> -->
    </head>
    <body>
        <div class="list">
            <div class="top">
                <div class="top-title">제목</div>
                <div class="top-views">조회수</div>
            </div>
            <div class="contentBox" style="overflow:auto; <!--height:400px;-->">
                <?=$content?>
            </div>
        </div>
        <div>
            <buttton class="close" onclick="window.close()">닫기</button>
        </div>
    </body>
</html>