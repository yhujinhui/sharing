<?php 
    require_once('lib/header_php.php'); 
    require_once("conn.php");
    require_once("lib/logchk.php");
    $url="cookbread.php";
    $kinds='';
    if(isset($_SESSION['user_id'])){
        $escaped_user_id=mysqli_real_escape_string($conn,$_SESSION['user_id']);
    }
    if(isset($_GET['kinds'])){
        $kinds=$_GET['kinds'];
    }
    $escaped_title='';
    $escaped_description='';
    $img_src='course';
    $formhref="cookbread_process.php";
    
    $page=$_GET['page'];

    switch($kinds){
        case 'all':$pagesql="select count(*) totalCount from content";break;
        case 'mine':$pagesql="select count(*) totalCount from content where user_id={$_SESSION['user_id']}";break;
        default : $pagesql="select count(*) totalCount from content where kinds='{$kinds}'";break;
    }

    $pageresult=mysqli_query($conn,$pagesql);
    $pagerow=mysqli_fetch_array($pageresult);
    $total_article=$pagerow['totalCount'];//게시물 총 개수
    // print_r($total_article);

    $view_article=3;//페이지당 게시물 개수
    if(!$page)$page=1;
    $start=($page-1)*$view_article;

    $id='';
    $option='';

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
<html>
    <head>
        <meta charset="UTF-8">
        <title>빵 굽기 화면</title>
        <link href="css/cookbread.css" rel="stylesheet"> 
        <style type = "text/css">
            /* @import url("css/header.css"); */
        </style>
    </head>

    <body onload="clickpost('<?=$kinds?>')">
                <div class="over" id="over" style="display:none" onclick="clickover('<?=$url?>')" >
                    <div class="post" id="post" style="display:none">
                        <div class="list">
                            <div>
                                <?=$content?>
                            </div>
                            <br>
                            <hr>
                            <br>
                            <div class="number">
                                <span class="numberPrev"><?=$prev_group?> </span>
                                <span class="numberPaging"><?=$paging?> </span>
                                <span class="numberNext"><?=$next_group?> </span>            
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="breadlist">
                    <img src="images/course.png" onclick="clickpost('course'); clickLocation('course');">
                    <img src="images/family.png" onclick="clickpost('family'); clickLocation('family');">
                    <img src="images/friend.png" onclick="clickpost('friend'); clickLocation('friend');">
                    <img src="images/love.png" onclick="clickpost('love'); clickLocation('love');">
                    <img src="images/other.png" onclick="clickpost('other'); clickLocation('other');">
                </div>
                <?php
                    require_once("lib/write.php");
                ?>
                <input type="hidden" name="user_id" value="<?=$escaped_user_id?>">
                <input type="submit" id="submitButton" name="submit" alt="빵 굽기!" value="빵 굽기">
            </div>
        </form>
        <script src="js/cookbread.js"></script>
    </body>
</html>