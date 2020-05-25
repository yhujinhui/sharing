<?php 
 ?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 위 3개의 메타 태그는 *반드시* head 태그의 처음에 와야합니다; 어떤 다른 콘텐츠들은 반드시 이 태그들 *다음에* 와야 합니다 -->
    <title></title>
  
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- IE8 에서 HTML5 요소와 미디어 쿼리를 위한 HTML5 shim 와 Respond.js -->
    <!-- WARNING: Respond.js 는 당신이 file:// 을 통해 페이지를 볼 때는 동작하지 않습니다. -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      @import url("css/login.css");
  </style>
<!--  -->
    <script language="javascript">

  function showPopup() { window.open("find_id.php", "a", "width=500%, height=300%, left=510%, top=340%, resizable=yes"); }  //아이디찾기 시 팝업창
  function showPopup2() { window.open("find_password.php", "a", "width=500%, height=300%, left=510%, top=340%"); }  //비밀번호 찾기시 팝업창

  </script>

  </head>
  <body class="text-center" onload="document.querySelector('body').style.backgroundColor='#F5E5DE';">
    <a href="first.php"><img src="images/logo.png" alt="로고" height="200px" width="200px" id="logo"></a> 
    <!-- 로고 누르면 다시 첫 화면 -->
    <div id="content-center" class="text-center">
  		<header>
     		<a href="login.html" id='title'><h1>로그인</h1></a>
    	</header>
  		<article>
  			<form action="login_process.php" method="post" autocomplete='off'>
     			<label for="input_id">
        			<div><input type="text" name='id' placeholder="email" id="input_id" autocomplete='off'></div>
      			</label><br>
      			<label for="input_password">
        			<div><input type="password" name='password' placeholder="password" id="input_password" autocomplete='off'></div>
            </label><br>
      			<div><input type="submit" value="로그인" cols="30" style="font-size:2rem; background-color:#FCE6C3; border:0; outline: 0"></div>
    		</form>
        <p><a href="sign.php" id='sign' style="margin-top:8px;">회원가입</a></p>  
        <hr width="400px"color="gray" size="1">
        <nav id="nav" >
          <a href="" onclick="showPopup();">아이디찾기</a><!--이름과 전화번호 + 팝업창으로--> 
            <a href="" onclick="showPopup2();">비밀번호찾기 </span><!--이름과 아이디 + 팝업창으로-->
          </nav>
      </article>
      </div>
    <!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요합니다) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
   <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  </body>
</html>