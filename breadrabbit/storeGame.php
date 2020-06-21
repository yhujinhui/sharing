<?php  
//require_once("lib/header_php.php");
//require_once("lib/logchk.php");

?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
       
        <script src="js/fullpage.js"></script>
        <script src="js/storeGame.js"></script>
        <!-- <link href="css/storeGame.css" rel="stylesheet">  -->
        <link href="css/header.css" rel="stylesheet"> 
        <link href="css/fullpage.css" rel="stylesheet"> 
        <link href="css/storeGame.css" rel="stylesheet"> 
        <title>상점</title>
    </head>
    <body>
        
        <!-- <div class="center">
            <div class="game1">
                <a href="store_in_game_1.html"><img src="images/store/game1.png" alt="game1" width="500" height="400"></a>
            </div>
            <div class="game2">
                <a href="store_in_game_2.html"><img src="images/store/game2.png" alt="game2" width="500" height="400"></a>
            </div>
            <div class="game3"> 
                <a href="store_in_game_3.html"><img src="images/store/game3.png" alt="game3" width="500" height="400"></a>
            </div>
        </div> -->
        <div id="fullpage">
            <div class="section">
                <div class="game1">
                    <button class="cookbread" onclick = "location.href = 'cookbread.php' " >빵 구우러 가기</button>
                        <!-- <p class="title">Shop road</p> -->
                        <!-- <p class="subtext">상점에 방문하면 게임을 통해 빵굽기에 필요한 재료를 획득할 수 있습니다!</p> -->
                    <div class="image">
                    <a href="store_in_game_1.php"><img class="image1" src="images/store/game1.png" alt="game1"></a>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="game2">
                    <div class="image">
                    <a href="store_in_game_2.php"><img class="image2" src="images/store/game2.png" alt="game2"></a>
                    </div>                
                </div>  
            </div>
            <div class="section"> 
                <div class="game3">
                    <div class="image">
                    <a href="store_in_game_3.php"><img class="image3" src="images/store/game3.png" alt="game3"></a>
                    </div>                
                </div>
            </div>       
        </div>
    </body>
</html>