<?php 
require_once('lib/header_php.php');

$introduce="";
$page=$_GET['page'];
$kinds=$_GET['kinds'];

switch($kinds){
    case 'all':$pagesql="select count(*) totalCount from content";break;
    case 'mine':$pagesql="select count(*) totalCount from content where user_id={$_GET['id']}";break;
    default : $pagesql="select count(*) totalCount from content where kinds='{$kinds}'";break;
}

$pageresult=mysqli_query($conn,$pagesql);
$pagerow=mysqli_fetch_array($pageresult);
$total_article=$pagerow['totalCount'];//게시물 총 개수
// print_r($total_article);

$view_article=12;//페이지당 게시물 개수2
if(!$page)$page=1;
$start=($page-1)*$view_article;

$user_id='';
$id='';
$option='';

if(isset($_GET['id'])){
    $user_id="&user_id=".$filtered_user_id;
    $id="&id=".$filtered_user_id;
    $option='<option value="mine">내빵</option>';
}

switch ($kinds) {
    case 'all':$sql="select * from content limit $start, $view_article";break;
    case 'mine':$sql= "select kinds,id from content where user_id={$_GET['id']} limit $start, $view_article";break;
    default:$sql= "select * from content where kinds='{$kinds}' limit $start, $view_article";break;
}

$result=mysqli_query($conn,$sql);

$item='';
$content1='';
$content2='';
$content3='';
$breadlocation='';

$cnt=0;
while($row=mysqli_fetch_array($result)){
    $row_top='';
    $row_bottom='';
    $cnt++;
    // print_r($row);
    $escaped_bread=htmlspecialchars($row['kinds']);
    $escaped_id=htmlspecialchars($row['id']);
    $breadlocation='images/'.$escaped_bread.'.png';
    
    $item=$item.
    "<span class='item'>
        <a href='content.php?id={$escaped_id}".$user_id."'>
            <img class='breadimg' src={$breadlocation}>
        </a>
    </span>"
    ;
    if($cnt<=4){
        $content1=$content1.$item;
        $item='';
    }else if($cnt<=8){
        $content2=$content2.$item;
        $item='';
    }else if($cnt<=12){
        $content3=$content3.$item;
        $item='';
    }
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
        @import url("css/store.css");
    </style>
</head>
<body onload="alert_selected_value('<?=$kinds?>')">
    <script src="js/first.js"></script>
    <script src="js/store.js"></script>
    <?php  
      require_once("lib/header_html.php");
    ?>
    
    <main>
        <span class="select">
            <select id="select" name="select" onchange="alert_select_value(this,<?=$filtered_user_id?>)">
                <option value="all">모든고민</option>
                <option value="course">진로고민</option>
                <option value="family">가족고민</option>
                <option value="friend">친구고민</option>
                <option value="love">사랑고민</option>
                <option value="other">기타</option>
                <?=$option?>
            </select>
        </span>
        <img id="storeimg" src="images/store.png">

        <div class="container">
            <div class="row1">
                <?=$content1?>
            </div>
             <div class="row2">
                <?=$content2?>
            </div>
             <div class="row3">
                <?=$content3?>
            </div>
        </div>
    </main>
    <div class="footer">
        <?=$prev_group?>
        <?=$paging?>
        <?=$next_group?>
    </div>
</body>
</html>