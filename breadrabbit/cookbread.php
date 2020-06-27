<?php 
    require_once("conn.php");
    require_once("lib/logchk.php");
   
    if(isset($_SESSION['user_id'])){
        $escaped_user_id=mysqli_real_escape_string($conn,$_SESSION['user_id']);
    }
    $escaped_title='';
    $escaped_description='';
    $img_src='course';
    $formhref="cookbread_process.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>빵 굽기 화면</title>
        <link href="css/cookbread.css" rel="stylesheet">
        <script src="js/cookbread.js"></script> 
    </head>
<<<<<<< HEAD
     <body>
    <?php
        require_once("lib/write.php");
=======

    <body style="overflow-x:hidden" onload="clickpost('<?=$kinds?>'); javascript:showSlides();" >
    <div class="over" id="over" style="display:none" onclick="clickover('<?=$url?>')" >
    
        <div class="post" id="post" style="display:none; overflow:auto; width:700px; height:400px">
            <div class="list">

                <!-- <div class="post">게시물 <span class="totalNum">(<?=$total_article?>)</span></div> -->
                <div class="top">
                    <div class="top-title">제목</div>
                    <div class="top-views">조회수</div>
                </div>
                <div class="contentBox">
                    <?=$content?>
                </div>
                <!-- <div class="number">
                    <span class="numberPrev"><?=$prev_group?> </span>
                    <span class="numberPaging"><?=$paging?> </span>
                    <span class="numberNext"><?=$next_group?> </span>            
                </div> -->
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="logo">
            <a href="first.php"><img src="images/logo.PNG" alt=""></a>
        </div>
        <hr width="1100px">
        <div class="explain">
            <div class="mySlides demo cursor">
                <img src="images/cookslide1.png">
            </div>
            <div class="mySlides demo cursor">
                <img src="images/cookslide2.png">
            </div>
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
        </div>
        <div class="mid">
            <div class="cookBread">
                <div onmouseout="this.innerText='빵굽기'" onmouseover="this.innerText='재료 개수 : <?= $total?>'"
                onclick="window.open('cookbreadform.php', '_blank', 'width=700px,height=700px,toolbars=no,scrollbars=no'); return false;">
                    빵굽기
                </div>
            </div>
        </div>
        <div class="container">
            <div class="item">
                <img src="images/course.png" onclick="openPopupCourse()">
                <hr width="250px">
                <div class="title">
                    진로
                </div> 
            </div>
            <div class="item">
                <img src="images/family.png" onclick="openPopupFamily()">
                <hr width="250px">
                <div class="title">
                    가족
                </div>
            </div>
            <div class="item">
                <img src="images/friend.png" onclick="openPopupFriend()">
                <hr width="250px">
                <div class="title">
                    친구
                </div>
            </div>
            <div class="item">
                <img src="images/love.png" onclick="openPopupLove()">
                <hr width="250px">
                <div class="title">
                    사랑
                </div>
            </div>
            <div class="item">
                <img src="images/other.png" onclick="openPopupOther()">
                <hr width="250px">
                <div class="title">
                    기타
                </div>
            </div>
            <div class="item">
                <img src="images/soldout.png" alt="">
                <hr width="250px">
                <div class="title">
                    SOLD OUT
                </div>
            </div>
        </div>
    </div>          
    <!--  <?php
        // require_once("lib/header_html.php");
        //require_once("lib/write.php");
>>>>>>> 14c170f17b6553c5df4eda3876df2d0f39649369
    ?>
    <input type="hidden" name="user_id" value="<?=$escaped_user_id?>">
    <input type="submit" id="submitButton" name="submit" alt="빵 굽기!" value="">
    </div>
    </form>
</body>
</html>