
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
      <?php
        require_once("urls/header.html");
      ?>
        <main>
            <link href="https://fonts.googleapis.com/css?family=Gothic+A1&display=swap" rel="stylesheet">
            <p>입 밖으로 꺼내지 못하는 고민이 있거나
                <br> <br>
             주변에 고민을 털어놓을 사람이 없었던 경험이 있으신가요?
                <br> <br>
             이제 걱정없이 고민을 털어놓으세요
                <br><br>
           <span>빵 굽는 토끼</span>가 여러분의 고민을 들어드립니다
                <br> <br> <br> <br>
               그럼 빵을 구우러 가볼까요?</p>
               <div id="rabbit"> </div>
               <div id="iconbaking" onclick="location.href='cookbread.php';">
                
                <img src = "images/iconbaking.png"  width = "170px" height = "50px" onmouseover="this.src='images/iconbaking2.png'" onmouseout="this.src='images/iconbaking.png'">
               </div>
               <div id="iconstore" onclick="location.href='store.php';">
                <img src = "images/iconstore.png"  width = "170px" height = "50px" onmouseover="this.src='images/iconstore2.png'" onmouseout="this.src='images/iconstore.png'" >
            </div>
        </main>
    </body>
</html>