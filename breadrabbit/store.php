<?php 
require_once('lib/header_php.php');

$page=$_GET['page'];
$kinds=$_GET['kinds'];

switch($kinds){
    case 'all':$pagesql="select count(*) totalCount from content";break;
    case 'mine':$pagesql="select count(*) totalCount from content where user_id={$_SESSION['user_id']}";break;
    default : $pagesql="select count(*) totalCount from content where kinds='{$kinds}'";break;
}

$pageresult=mysqli_query($conn,$pagesql);
$pagerow=mysqli_fetch_array($pageresult);
$total_article=$pagerow['totalCount'];//게시물 총 개수
// print_r($total_article);

$view_article=1;//페이지당 게시물 개수2
if(!$page)$page=1;
$start=($page-1)*$view_article;

$id='';
$option='';

if(isset($_SESSION['user_id'])){
    $id="&id=".$filtered_user_id;
    $option='<option value="mine">내빵</option>';
}
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
    ';
}
include("lib/page.php");
?>

<!DOCTYPE html>
</html>
<html>
<head>
    <meta charset="UTF-8">
    <title>빵 굽는 토끼🐰</title>
    <style type = "text/css">
        @import url("css/header.css");
        @import url("css/store.css");
    </style>
    <script src="js/header.js"></script>
    <script src="js/store.js"></script>
</head>
<body onload="alert_selected_value('<?=$kinds?>')">
    <?php  
      require_once("lib/header_html.php");
    ?>

    <div class="wraaper">
        <div class="header">
            <div class="post">게시물 <span class="totalNum">(<?=$total_article?>)</span></div>
            <div class="selects">
                <select id="select" name="select" onchange="alert_select_value(this)">
                    <option value="all">모든고민</option>
                    <option value="course">진로고민</option>
                    <option value="family">가족고민</option>
                    <option value="friend">친구고민</option>
                    <option value="love">사랑고민</option>
                    <option value="other">기타</option>
                    <?=$option?>
            </select>
            </div>
        </div>
        <div class="top">
            <div class="top-title">제목</div>
            <div class="top-views">조회수</div>
        </div>
        <div class="contentBox">
            <?=$content?>
        </div>
        <div class="breadBox">
            <button class="breadButton" onclick="window.location.href='login.php'">빵 굽기</button>
        </div>
    </div>
    <div class="footer">
        <div class="number">
            <span class="numberPrev"><?=$prev_group?> </span>
            <span class="numberPaging"><?=$paging?> </span>
            <span class="numberNext"><?=$next_group?> </span>            
        </div>
    </div>
</body>
</html>