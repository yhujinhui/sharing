<?php  
//define('ALLOWED', true); 
require_once("lib/header_php.php");
?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <title>빵 굽는 토끼🐰</title>
        <style type = "text/css">
          @import url("css/header.css");
          @import url("css/first.css");
        </style>
    </head>
    <body>
      <script src="js/first.js"></script>
     <?php  
      require_once("lib/header_html.php");
     ?>
      <div class="container">
        <span class="containerleft">
          <div id="containerlogo">로고</div>
          <div><h1 id="title">빵 굽는 토끼</h1></div> 
            <p id="description">
              여러분의 고민을 들어드립니다<br> 
              입 밖으로 꺼내지 못하는 고민이 있거나<br> 
              주변에 고민을 털어놓을 사람이 없었던 경험이 있으신가요?<br> 
              이제 걱정없이 고민을 털어놓으세요
            </p>  
        </span>
        <span class="containerright">
          <div class="containerimg"><img src="images/backbaking01.png" class="backbaking01" ></div>
        </span>
      </div>
    </body>
</html>
