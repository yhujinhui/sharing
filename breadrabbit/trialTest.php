<?php  
require_once("lib/header_php.php");
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compaatible" content="ie=edge"/>
    <link href="css/header.css" rel="stylesheet"> 
    <link rel="stylesheet" href="./css/fullpage.min.css"/>
    <script src="./js/fullpage.min.js"></script>
    <link href="css/trialTest.css" rel="stylesheet"> 

</head>
<body>

        <div class="container">
        


<div id="full-page">
<form name="test" method="post" action="trialTestProc.php" onsubmit="return checksubmit();">
    <div class="section s0">
    <?php  
        require_once("lib/header_html.php");
        
        ?>
        
    <div class="Qone">사람들이 당신 뒷담화하는 걸 들었을 때 어떻게 할건가요?<br><br></div>
    <div class="view_1">
                        <input type="radio" name="Q1" value="A"> 당황스럽고 눈물이 난다 <br><br>
                        <input type="radio" name="Q1" value="B"> 신경 쓰지 않는다 <br><br>
                        <input type="radio" name="Q1" value="C"> 뒷담화 한 사람들을 무시한다 <br><br>
                        <input type="radio" name="Q1" value="D"> 화가 나지만 참는다 <br><br>
                        <input type="radio" name="Q1" value="E"> 가서 따진다
                    </div>
    </div>
    <div class="section s1">
    <div class="Qtwo">당신은 주로 어떤 모임을 가지나요?<br><br></div>
                        <div class="view_2">
                        <input type="radio" name="Q2" value="A"> 대부분 가족 모임 <br><br>
                        <input type="radio" name="Q2" value="B"> 오랜 친구들 모임 <br><br>
                        <input type="radio" name="Q2" value="C"> 소수 가까운 친구 모임 <br><br>
                        <input type="radio" name="Q2" value="D"> 나는 외로운 늑대, 모임이 싫다 <br><br>
                        <input type="radio" name="Q2" value="E"> 새로운 친구 모임
                        </div>
    </div>
    <div class="section s2">
    <div class="Qthree">모임에서 친구가 같은 옷을 입고 왔습니다. 어떻게 할건가요? <br><br></div>
                        <div class="view_3">
                        <input type="radio" name="Q3" value="A"> 전혀 신경쓰지 않는다  <br><br>
                        <input type="radio" name="Q3" value="B"> 당혹스럽지만 어쩔 수 없다 <br><br>
                        <input type="radio" name="Q3" value="C"> 그냥 내가 옷을 갈아 입는다 <br><br>
                        <input type="radio" name="Q3" value="D"> 그냥 집으로 돌아간다 <br><br>
                        <input type="radio" name="Q3" value="E"> 게임을 해서 한명이 옷을 바꾼다
                    </div>
    </div>
    <div class="section s3">
    <div class="Qfour">모임에서 보통 당신의 행동은? <br><br></div>
                        <div class="view_4">

                        <input type="radio" name="Q4" value="A"> 있는 듯 없는 듯 조용히 있는다 <br><br>
                        <input type="radio" name="Q4" value="B"> 필요한 경우에는 의견을 말한다 <br><br>
                        <input type="radio" name="Q4" value="C"> 다른 사람 말에 호응을 잘 한다<br><br>
                        <input type="radio" name="Q4" value="D"> 화려한 입담으로 분위기를 주도 <br><br>
                        <input type="radio" name="Q4" value="E"> 리드하고 중심적인 역할
                    </div>
    </div>
    <div class="section s4">
    <div class="Qfive">다음 중 가장 안 좋은 것은? <br><br></div>
                        <div class="view_5">

                        <input type="radio" name="Q5" value="A"> 나는 너무 조용하다 <br><br>
                        <input type="radio" name="Q5" value="B"> 나는 게으르다 <br><br>
                        <input type="radio" name="Q5" value="C"> 나는 서툴다 <br><br>
                        <input type="radio" name="Q5" value="D"> 나는 불안정하다 <br><br>
                        <input type="radio" name="Q5" value="E"> 나는 완벽하다
                    </div>
    </div>

    <div class="section s5">
    <div class="view_6">
    <div class="Qsix">화를 자주내는 편인가요? <br><br></div>

            <input type="radio" name="Q6" value="A"> 화를 내는 건 좋지 않아요 <br><br>
            <input type="radio" name="Q6" value="B"> 웬만하면 화가 나지 않아요 <br><br>
            <input type="radio" name="Q6" value="C"> 가끔 화가 날 때가 있어요 <br><br>
            <input type="radio" name="Q6" value="D"> 주변에서 저를 화나게 하네요 <br><br>
            <input type="radio" name="Q6" value="E"> 생각만 해도 자주 화가 나요
</div>
    </div>

    <div class="section s6">
    <div class="view_7">
    <div class="Qseven">금요일이나 토요일 밤엔 주로 무엇을 하시나요? <br><br></div>

        <input type="radio" name="Q7" value="A"> 약속이 있을 때만 외출 <br><br>
        <input type="radio" name="Q7" value="B"> 무리를 모아 다같이 외출 <br><br>
        <input type="radio" name="Q7" value="C"> 뽐내기 위해 그냥 나감 <br><br>
        <input type="radio" name="Q7" value="D"> 가급적 집에 있음 <br><br>
        <input type="radio" name="Q7" value="E"> 혼자 밖에 나가 어슬렁거림
</div>
    </div>

    <div class="section s7">
    <div class="view_8">
                <div class="Qeight">하고 있거나, 앞으로 하고 싶은 운동은 무엇인가요? <br><br></div>

                        <input type="radio" name="Q8" value="A"> 테니스나 탁구 <br><br>
                        <input type="radio" name="Q8" value="B"> 볼링, 골프, 야구 <br><br>
                        <input type="radio" name="Q8" value="C"> 조깅, 마라톤 <br><br>
                        <input type="radio" name="Q8" value="D"> 축구나 농구 <br><br>
                        <input type="radio" name="Q8" value="E"> 권투나 격투기
                    </div>
    </div>

    <div class="section s8">
    <div class="view_9">
    <div class="Qnine">당신은 유럽에 도착했어요. 무얼 타고 여행하는 걸 선호하나요?<br><br> </div>

                        <input type="radio" name="Q9" value="A"> 버스 <br><br>
                        <input type="radio" name="Q9" value="B"> 자전거 <br><br>
                        <input type="radio" name="Q9" value="C"> 기차<br><br>
                        <input type="radio" name="Q9" value="D"> 비행기 <br><br>
                        <input type="radio" name="Q9" value="E"> 자동차
                    </div>
    </div>

    <div class="section s9">
    <div class="view_10">
    <div class="Qten">최근 당신 감정과 가장 가까운 것은 무엇인가요?<br><br> </div>

        <input type="radio" name="Q10" value="A"> 두려움 <br><br>
        <input type="radio" name="Q10" value="B"> 사랑<br><br>
        <input type="radio" name="Q10" value="C"> 용기 <br><br>
        <input type="radio" name="Q10" value="D"> 분노 <br><br>
        <input type="radio" name="Q10" value="E"> 증오
        </div>
        <div class="next"><input type="submit" value="결과 확인"> </div>

    </div>
</form>
</div>
    <script>
    new fullpage('#full-page',{});
    </script>
    <script src="js/trialTest.js"></script>
</body>
</html>