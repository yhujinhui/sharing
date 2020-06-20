<?
    require_once('conn.php');

?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="js/store_in_game_3.js"></script>
        <link href="css/store_in_game_3.css" rel="stylesheet"> 

        <title>상점</title>
    </head>
    <body>
       
        <div class="center">
            <div class='width500px'>
                <div>
                    <h2>퍼즐을 맞춰 재료를 획득하세요</h2>
                    <table id='menuTable'>
                        <!-- <tr>
                            <td class='alignLeft'>
                                <button id='startBtn'>start</button>
                            </td>
                            <td class='alignRight'>
                                <span>score : <span id='score'>0</span></span>
                            </td>
                        </tr> -->

                            <button id='startBtn'>start</button>

                    </table>
                </div>
                <div>
                    <div id='countDown'>
                        ready
                    </div>
                    <table id='cardTable'>
                    </table>
                    <div id='info'>
                        start 버튼을 눌러주세요<br>
                    </div>
                </div>
            </div>
            <div>
                <button id='backBtn' onclick="backPage()">뒤로가기</button>
            </div>
        </div>
        
    </body>
</html>