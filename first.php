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
    <body onload="javascript:showSlides();">
      <script src="js/first.js"></script>
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
      <div class="container-bottom">
        <h1>오늘의 사연입니다</h1>
        <div class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
        <div class="comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
      </div>
      <div class="footer">
        <footer>
          <span><a href="introduce.html">개발자소개</a></span>
          <span><a href="">이메일 문의</a></span>
      </footer>
      </div>
    </body>
</html>
