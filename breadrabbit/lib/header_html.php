<header>
  <link href="https://fonts.googleapis.com/css?family=Gothic+A1&display=swap" rel="stylesheet">
  
  <div class="nav">
    <div class="logo"><a href="first.php"><img width="220" height="60"src="images/logo.PNG" alt=""></a></div>
    <div class="menu">
      <ul>
        <li class="menu-items">
          <a href="chatIntro.php">채팅</a>
        </li>
        <li class="menu-items">
          <a href="ChooseTrialTest.php">심리검사</a>
        </li>
        <li class="menu-items">
          <a href="speech.php">연설</a>
        </li>
        <li class="menu-items">
          <a href="<?=$store_href?>">빵집</a>
        </li>
        <li class="menu-items">
          <a href="<?=$cookbread_href?>" onclick="<?=$logchk?>">빵</a>
        </li>
        <li class="menu-items" style="margin-left: 40px;">
          <a href='account.php' id="name"><?=$escaped_header_name?></a>
        </li>
        <li class="menu-items">
          <?=$message?>
        </li>
        <li class="menu-items">
           <a href="<?=$log_href?>" id="log" onclick="javascript:return logoutchk();" ><?=$log?></a>
        </li>
      </ul>
    </div>
  </div>
</header>