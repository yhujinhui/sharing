<?php  
require_once("conn.php");


$log='로그인';
$escaped_name='';
$log_href="login.html";
$cookbread_href="login.html";
$store_href="store.php";
$logchk='return logchk()';
if(isset($_GET['id'])){
  $filtered_user_id=mysqli_real_escape_string($conn,$_GET['id']);
  $sql=
  "select name from sign where user_id={$filtered_user_id}";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($result);
  print_r(mysqli_error($conn));
  $log_href="#";
  $cookbread_href="cookbread.php?id={$filtered_user_id}";
  $store_href="store.php?id={$filtered_user_id}";
  $log='로그아웃';
  $logchk='';
  $escaped_name=htmlspecialchars($row['name']).'님';
}

?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <title>빵 굽는 토끼🐰</title>
        <style type = "text/css">
          @import url("css/first.css");
        </style>
    </head>
    <body>
      <script src="js/first.js"></script>
      <header>
        <link href="https://fonts.googleapis.com/css?family=Gothic+A1&display=swap" rel="stylesheet">
        <div class="location">
          <a href="<?=$store_href?>">상점 가기</a>
          <a href="<?=$cookbread_href?>" onclick="<?=$logchk?>">빵 굽기</a>
          <a href='javascript:void(0);' onClick="top.location='javascript:location.reload()'" id="name"><?=$escaped_name?></a>
          <a href="<?=$log_href?>" id="log" onclick="javascript:return logoutchk();" ><?=$log?></a>
        </div>
        <div id=logo><a href='javascript:void(0);' onClick="top.location='javascript:location.reload()'"><img src="images/logo.png" width="150px" height="150px"></a></div>
      </header>

      <div class="container">
        <span><h1 id="title">빵 굽는 토끼가<br>여러분의 고민을 들어드립니다</h1></span> 
         
        <p id="description">입 밖으로 꺼내지 못하는 고민이 있거나
                <br>
             주변에 고민을 털어놓을 사람이 없었던 경험이 있으신가요?
                <br>
             이제 걱정없이 고민을 털어놓으세요
        </p>      
     </main>
    </body>
</html>
