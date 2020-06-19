<?php  
require_once("lib/header_php.php");
$sql="select * from story_evt left join event_winning on story_evt.user_id=event_winning.user_id where story_evt.user_id=event_winning.user_id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$escaped_description=htmlspecialchars($row['description']);
$escaped_comment=htmlspecialchars($row['comment']);
$container_bottom="";

$sql="select count(*) from event";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$event_cnt=$row['count(*)'];
$event_title="";
$plusSlides='';
$sql="select * from event";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if($event_cnt>0){
  if($row['evtname']=="이달의 사연 이벤트"){
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
  }
  $event_title=
  '<div class="event-text">
      이벤트
  </div>';
  $plusSlides=
  '
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>
  ';
}
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
    <body onload="javascript:openEvent(); javascript:showSlides(); javascript:showEventSlides();">
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
        <?=$event_title?>
        <div class="mySlides demo cursor">
          <a href="event_explain.php?title=후기 이벤트" class="event-href"><img src="images/slide1.png" class="event-img"></a>
        </div>
        <?=$slide?>
        <?=$plusSlides?>
    </div>
    <?php  
        require_once("lib/footer_bottom.php");
    ?>
    </body>
</html>
