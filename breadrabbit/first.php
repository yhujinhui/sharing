<?php  
require_once("lib/header_php.php");
$sql="select * from story_evt left join event_winning on story_evt.user_id=event_winning.user_id where story_evt.user_id=event_winning.user_id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$escaped_description=htmlspecialchars($row['description']);
$escaped_comment=htmlspecialchars($row['comment']);
$container_bottom="";

if($escaped_description&&$escaped_comment){
  $container_bottom=
  '
  <div class="container-bottom">
    <h1>이달의 사연입니다</h1>
    <div class="content">'.$escaped_description.'</div>
    <div class="comment">'.$escaped_comment.'</div>
  </div>
  ';
}

$sql="select count(*) from event";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$event_cnt=$row['count(*)'];

$sql="select * from event";
$result=mysqli_query($conn,$sql);
$banner=array();
$cnt=0;
$slide="";
while($row=mysqli_fetch_array($result)){
  //rint_r($row);
  $banner[$cnt]=$row['bannername'];
  //print_r($banner[$cnt]);
  $slide=$slide.
  '
  <div class="mySlides demo cursor">
        <div class="numbertext">'.($cnt+1).' / '.($event_cnt).'</div>
        <a href="event_explain.php?id='.$row['id'].'" class="event-href"><img src="eventImages/'.$banner[$cnt].'"></a>
  </div>
  ';
}


?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <title>빵 굽는 토끼🐰</title>
        <style type = "text/css">
          @import url("css/header.css");
          @import url("css/first.css");
          @import url("css/footer_bottom.css");
        </style>
        <script src="js/first.js"></script>
        <script src="js/header.js"></script>
    </head>
    <body onload="javascript:showSlides(); javascript:showEventSlides();">
      
     <?php  
      require_once("lib/header_html.php");
     ?>
      <div class="container">
        <footer>
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </footer>
      </div>
      <?=$container_bottom?>
      <div class="event">
        <div class="event-text">
          이벤트
        </div>
        <!-- <div class="mySlides demo cursor">
          <div class="numbertext">1 / 2</div>
          <a href="event_explain.php" class="event-href"><img src="images/slide1.png" class="event-img"></a>
        </div> -->
        <?=$slide?>
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
    </div>
    <?php  
        require_once("lib/footer_bottom.php");
    ?>
    </body>
</html>
