<?php 
require_once('conn.php');

$log='로그인';
$escaped_name='';
$user_id='';
$log_href="login.html";
$cookbread_href="login.html";

if(isset($_GET['id'])){
  $filtered_user_id=mysqli_real_escape_string($conn,$_GET['id']);
  $user_id="&user_id=".$filtered_user_id;
  $sql=
  "select name from sign where user_id={$filtered_user_id}";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($result);
  print_r(mysqli_error($conn));
  $log_href="#";
  $cookbread_href="cookbread.php?id={$filtered_user_id}";
  $log='로그아웃';
  $escaped_name=htmlspecialchars($row['name']).'님';
}

$sql=
"select * from content";
$result=mysqli_query($conn,$sql);

$item='';
$content1='';
$content2='';
$content3='';
$breadlocation='';

// $datacnt = mysqli_num_rows($result);
$cnt=0;
while($row=mysqli_fetch_array($result)){
    $row_top='';
    $row_bottom='';
    $cnt++;
    // print_r($cnt);
    $escaped_bread=htmlspecialchars($row['kinds']);
    $escaped_id=htmlspecialchars($row['id']);
    if($escaped_bread=="course"){
        $breadlocation='images/bread1.png';
    }
    else if($escaped_bread=="family"){
        $breadlocation='images/bread2.png';
    }
    else if($escaped_bread=="friend"){
        $breadlocation='images/bread3.png';
    }
    else if($escaped_bread=="love"){
        $breadlocation='images/bread4.png';
    }
    else if($escaped_bread=="other"){
        $breadlocation='images/bread5.png';
    }
    
    $item=$item.
    "<span class='item'>
        <a href='content.php?id={$escaped_id}".$user_id."'>
            <img class='breadimg' src={$breadlocation}>
        </a>
    </span>"
    ;
    if($cnt<=4){
        $content1=$content1.$item;
        $item='';
    }else if($cnt<=8){
        $content2=$content2.$item;
        $item='';
    }else if($cnt<=12){
        $content3=$content3.$item;
        $item='';
    }
}
?>
<!DOCTYPE html>
</html>
<html>
<head>
    <meta charset="UTF-8">
    <title>빵 굽는 토끼🐰</title>
    <style type = "text/css">
        @import url("css/store.css");
    </style>
</head>
<body>
    <script src="js/first.js"></script>
    <script src="script/store.js"></script>
    <header>
    <link href="https://fonts.googleapis.com/css?family=Gothic+A1&display=swap" rel="stylesheet">
    <div class="location">
        <a href="store.php">상점 가기</a>
        <a href="<?=$cookbread_href?>">빵 굽기</a>
        <a href='javascript:void(0);' onClick="top.location='javascript:location.reload()'" id="name"><?=$escaped_name?></a>
        <a href="<?=$log_href?>" id="log" onclick="javascript:return logoutchk();" ><?=$log?></a>
    </div>
       <div id="logo" onclick="location.href='store.php'"> <img src="images/logo.png" width="10%" heigh="10%"></div>
    </header>
    <main>
        <img id="storeimg" src="images/store.png">
        <div class="container">
            <div class="row1">
                <?=$content1?>
            </div>
             <div class="row2">
                <?=$content2?>
            </div>
             <div class="row3">
                <?=$content3?>
            </div>
        </div>
    </main>
</body>
</html>