 <header>
  <link href="https://fonts.googleapis.com/css?family=Gothic+A1&display=swap" rel="stylesheet">
  <div class="nav-log">
  	<a href="<?=$log_href?>" id="log" onclick="javascript:return logoutchk();" ><?=$log?></a>
	<a href='account.php' id="name"><?=$escaped_name?>
  </div>
  <div class="nav">
  	<a href=""  class="logo"><img src="" alt="">로고</a>
  	<a href="first.php">홈</a>
  	<a href="<?=$event_href?>">이벤트</a>
  	<a href="">상담</a>
  	<a href="trialTest.php">심리검사</a>
	<a href="speech.php">연설</a>
  	<a href="<?=$store_href?>">상점 가기</a>
    <a href="<?=$cookbread_href?>" onclick="<?=$logchk?>">빵 굽기</a>
  </div>
  <!-- <div class="location">
  	<a href="<?=$logo_href?>"  class="logo"><img src="" alt="">로고</a>
	<a href="<?=$store_href?>">상점 가기</a>
    <a href="<?=$cookbread_href?>" onclick="<?=$logchk?>">빵 굽기</a>
	<a href="<?=$log_href?>" id="log" onclick="javascript:return logoutchk();" ><?=$log?></a>
	<a href='account.php?id=<?=$filtered_user_id?>' id="name"><?=$escaped_name?></a>
  </div> -->
</header>