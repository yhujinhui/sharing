 <header>
  <link href="https://fonts.googleapis.com/css?family=Gothic+A1&display=swap" rel="stylesheet">
  <div class="location">
    <a href="<?=$store_href?>">상점 가기</a>
    <a href="<?=$cookbread_href?>" onclick="<?=$logchk?>">빵 굽기</a>
    <a href="introduce.html">개발자 소개</a>
    <a href='javascript:void(0);' onClick="top.location='javascript:location.reload()'" id="name"><?=$escaped_name?></a>
    <a href="<?=$log_href?>" id="log" onclick="javascript:return logoutchk();" ><?=$log?></a>
  </div>
  <div id=logo><a href="<?=$logo_href?>"><img src="images/logo.png" width="150px" height="150px"></a></div>
</header>