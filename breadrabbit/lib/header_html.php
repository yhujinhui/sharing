 <header>
  <link href="https://fonts.googleapis.com/css?family=Gothic+A1&display=swap" rel="stylesheet">
  <div class="location">
  	<a href="<?=$logo_href?>"  class="logo"><img src="" alt="">로고</a>
	<a href="<?=$store_href?>">상점 가기</a>
    <a href="<?=$cookbread_href?>" onclick="<?=$logchk?>">빵 굽기</a>
    <a href="introduce.html"><?=$introduce?></a>
	<a href="<?=$log_href?>" id="log" onclick="javascript:return logoutchk();" ><?=$log?></a>
	<a href='account.php?id=<?=$filtered_user_id?>' id="name"><?=$escaped_name?></a>
  </div>
</header>