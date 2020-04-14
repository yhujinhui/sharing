
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
      @import url("css/sign.css");
    </style>
  </head>
  <body class="text-center">
    <div class="container">
      <script src="js/sign.js"></script> 
      <header>
        <a href="sign.php" id='title'><h2 style="margin-top:170px;">회원가입</h2></a>
      </header>
        <!-- onSubmit="return checkPw(this)" -->
      <article>
        <form name="check_form" method="post" action="sign_process.php" autocomplete='off' id="form" onSubmit="return checkPw()">
          <div class="fieldlabel"><label for="input_name">이름</label></div>
          <div class="formfield"><input type="text" name='name' placeholder="ex)유진희" id="input_name"  
          required></div>
          <div class="fieldlabel"><label for="input_id">이메일</label></div>
          <div class="formfield"><input type="email" name='id' placeholder="ex)example@example.com" id="input_id" required></div>
            
          <div class="fieldlabel"><label for="input_password">비밀번호</label></div>
          <div class="formfield"><input type="password" name='password' placeholder="ex)********" id="input_password" oninput="checkPw()" required></div>
          
          <div class="fieldlabel"><label for="check_password">비밀번호 재입력</label></div>
          <div class="formfield"><input type="password" name='check_password' placeholder="ex)********" id="check_password" oninput="checkPw()" required></div>
          <div id="passwordCheckText"></div>
          <div class="fieldlabel"><label for="input_tel">휴대폰</label></div>
          <div class="formfield"><input type="tel" name='tel' placeholder="ex)010-0000-0000" id="input_tel" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" onKeyup="inputPhoneNumber(this);" maxlength="13"required></div>       
          <div class="btnfield"><input type="submit" value="가입" style="font-size:2rem; width:595px; height: 65px"></div>
        </form>  
        <hr width="400px"color="gray" size="1">
      </article>
    </div>
    <!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요합니다) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
   <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  </body>
</html>