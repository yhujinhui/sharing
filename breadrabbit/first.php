<?php  
require_once("lib/header_php.php");
$sql="select * from story_evt left join event_winning on story_evt.user_id=event_winning.user_id where story_evt.user_id=event_winning.user_id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$escaped_description=htmlspecialchars($row['description']);
$escaped_comment=htmlspecialchars($row['comment']);

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
    <body style="overflow-x:hidden" onload="javascript:openEvent(); javascript:showSlides(); javascript:showEventSlides();">
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
      <div class="trialTest">
        <div class="title">
          <span style="color: #1D6A96">다양한 </span>심리검사
        </div>
        <div class="explain">
          심리검사를 통해서 본인의 고민 해결 성향을 알아보세요.
        </div>
        <hr width="500">
        <div class="tests">
          <div class="left">
            <a href="">
              <div class="animal-test">
                <div class="left">
                  <div class="animal-test-title">
                    동물 유형<br>
                    <span style="color: #1D6A96; font-size: 1.6rem;">심리검사</span>
                  </div>
                  <div class="animal-test-explain">
                    고민 해결 방법을<br>
                    제시합니다.
                  </div>
                </div>
                <div class="right">
                  <img src="images/animal_test_dog.png">
                </div>
              </div>
            </a>
          </div>
          <div class="right">
            <a href="">
              <div class="love-test">
                <div class="love-test-title">연애 성향 심리검사</div>
                <div class="love-test-explain">
                  연애 스타일을 알아보고<br>
                  연인간의 일어나는 문제를<br>
                  해결할 수 있는 방법을 제공
                </div>
                <div class="img">
                  <img src="images/love_test_heart.png">
                </div>
              </div>
            </a>
            <a href="">
              <div class="speech">
                <div class="speech-title">
                  유명인의<br>
                  <span style="font-size: 2rem">연설</span>
                </div>
                <div class="bottom">
                  <div class="left">
                    <img src="images/test_speech_stevenJobs.png">
                  </div>
                  <div class="right">
                    누구나 한번쯤은 겪을<br>
                    인생고민은 연설 영상으로<br>
                    해결해보세요.
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
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
