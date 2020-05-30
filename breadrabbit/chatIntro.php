<?php  
require_once("lib/header_php.php");
?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <title>상담</title>
        <style type = "text/css">
          @import url("css/header.css");
          @import url("css/footer_bottom.css");
        </style>
        <link href="css/chatIntro.css" rel="stylesheet"> 
    </head>
    <body>
        <?php  
        require_once("lib/header_html.php");
        ?>

      <div class="container">
        <div class="Intro">
            <div class="title">
                실시간으로 고민을 상담하고 공감 해보세요
            </div>
            <div class="content">
                다양한 사람들에게 고민을 공유하며 새로운 솔루션을 찾아보세요<br>
                당신의 마음속에 있는 고민을 털어놓을 수 있는 공간입니다
            </div>
            <button class="chattingButton">채팅<br>참여하기</button>
            <div class="content2">
                익명으로 채팅에 참여할 수 있습니다 
            </div>
        </div>

      </div>
      <?php 
        require_once("lib/footer_bottom.php");
      ?>
    </body>
</html>