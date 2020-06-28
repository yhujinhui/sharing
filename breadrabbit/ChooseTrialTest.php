<?php  
require_once("lib/header_php.php");
?>
<!DOCTYPE html>
<html lang="ko">
<html>
    <head>
        <meta charset="UTF-8">
        <title>심리 검사</title>
        <link href="css/header.css" rel="stylesheet"> 
        <link href="css/choosetrialTest.css" rel="stylesheet"> 
    </head>
    <body>
        <?php  
        require_once("lib/header_html.php");
        ?>
            <div>
                <div class="banner">
                <div class="title"><br><br><br><br><br>동물 유형으로 알아보는 심리검사<br><br> </div>
                <div class="desc"> 고민 해결 방안을 제시합니다<br>
                질문의 답변은 수정할 수 없으니 신중하게 대답해주세요<br>
                검사 질문은 총 8~10가지 입니다
                    </div>
                    <button class="trial_one" onclick="window.location.href='trialTest.php'">성향 알아보기</button>
                    <button class="trial_two" onclick="window.location.href='trialTest2.php'">연애스타일 알아보기</button>

                </div>

            <div class="banner2">
            <div class="title2"><br><br><br><br><br>유명인의 연설<br><br> </div>
                <div class="desc2"> 유명인의 연설을 들으며 마음가짐을 바로 하고 목표를 세워보세요<br>
                            다른 사람의 경험담을 바탕으로 <br>
                            자신을 발전시킬 수 있는 좋은 기회입니다
                    </div>

                <button class="trial_three" onclick="window.location.href='speech.php'">연설 보러가기</button>
</div>

                   
    
                
            
    </body>
</html>