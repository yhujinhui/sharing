 <header>
  <link href="https://fonts.googleapis.com/css?family=Gothic+A1&display=swap" rel="stylesheet">
  
  <div class="nav">
    <div class="nav-log">
        <a href="<?=$log_href?>" id="log" onclick="javascript:return logoutchk();" ><?=$log?></a>
        <a href='account.php' id="name"><?=$escaped_header_name?>
   </div>
    <div class="logo"><a href=""><img src="" alt="">로고</a></div>
    <div class="menu">
      <ul>
        <li class="menu-items">
          <a href="first.php">홈</a>
        </li>
        <li class="menu-items">
          <a href="<?=$event_href?>">이벤트</a>
        </li>
        <li class="menu-items">
          <a href="chatIntro.php">상담</a>
        </li>
        <li class="menu-items">
          <a href="trialTest.php">심리검사</a>
        </li>
        <li class="menu-items">
          <a href="speech.php">연설</a>
        </li>
        <li class="menu-items">
          <a href="<?=$store_href?>">상점 가기</a>
        </li>
        <li class="menu-items">
          <a href="<?=$cookbread_href?>" onclick="<?=$logchk?>">빵 굽기</a>
        </li>
      </ul>
    </div>
  </div>
</header>