<?php 
require_once('lib/header_php.php');

$page=$_GET['page'];

$pagesql="select count(*) totalCount from content";//게시물 총 개수
$pageresult=mysqli_query($conn,$pagesql);
$pagerow=mysqli_fetch_array($pageresult);
$total_article=$pagerow['totalCount'];//게시물 총 개수13
// print_r($total_article);

$view_article=12;//페이지당 게시물 개수2
if(!$page)$page=1;
$start=($page-1)*$view_article;

$user_id='';
$id='';
if(isset($_GET['id'])){
    $user_id="&user_id=".$filtered_user_id;
    $id="&id=".$filtered_user_id;
}
$sql=
"select * from content limit $start, $view_article";
$result=mysqli_query($conn,$sql);

$item='';
$content1='';
$content2='';
$content3='';
$breadlocation='';

// $datacnt = mysqli_num_rows($result);
$cnt=0;
while($row=mysqli_fetch_array($result)){
    $row_top='';
    $row_bottom='';
    $cnt++;
    // print_r($cnt);
    $escaped_bread=htmlspecialchars($row['kinds']);
    $escaped_id=htmlspecialchars($row['id']);
    if($escaped_bread=="course"){
        $breadlocation='images/bread1.png';
    }
    else if($escaped_bread=="family"){
        $breadlocation='images/bread2.png';
    }
    else if($escaped_bread=="friend"){
        $breadlocation='images/bread3.png';
    }
    else if($escaped_bread=="love"){
        $breadlocation='images/bread4.png';
    }
    else if($escaped_bread=="other"){
        $breadlocation='images/bread5.png';
    }
    
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
include("page.php");

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
<body>
    <script src="js/first.js"></script>
    <script src="script/store.js"></script>
    <?php  
      require_once("lib/header_html.php");
    ?>
    <main>
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