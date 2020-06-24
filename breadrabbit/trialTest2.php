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
    <link href="css/trialTest2.css" rel="stylesheet"> 

</head>
<body>

        <div class="container">
        


<div id="full-page">
<form name="test" method="post" action="trialTestProc2.php" onsubmit="return checksubmit();">
    <div class="section s0">
    <?php  
        require_once("lib/header_html.php");
        
        ?>
        
    <div class="Qone">종말이 다가왔습니다. 당신은 딱 한가지의 동물만 살릴 수 있습니다.<br>어떤 동물을 살리실건가요?<br><br></div>
    <div class="view_1">
                        <input type="radio" name="Q1" value="A"> 토끼 <br><br>
                        <input type="radio" name="Q1" value="B"> 양 <br><br>
                        <input type="radio" name="Q1" value="C"> 사슴 <br><br>
                        <input type="radio" name="Q1" value="D"> 말 <br><br>
                    </div>
    </div>
    <div class="section s1">
    <div class="Qtwo">당신이 아프리카 여행을 떠나 어떤 부족에 들르게 되었는데, <br>그 부족에서 떠날 때 동물 한마리를 데려가라고 합니다.
어떤 동물을 데려갈 것인가요?<br><br></div>
                        <div class="view_2">
                        <input type="radio" name="Q2" value="A"> 원숭이 <br><br>
                        <input type="radio" name="Q2" value="B"> 사자 <br><br>
                        <input type="radio" name="Q2" value="C"> 뱀 <br><br>
                        <input type="radio" name="Q2" value="D"> 기린 <br><br>
               
                        </div>
    </div>
    <div class="section s2">
    <div class="Qthree">당신이 큰 잘못을 해서, 신이 당신에게 인간이 되기 전에 동물로 먼저 환생하는 벌을 내렸습니다.<br>
동물을 선택할 수 있는데 어떤 동물로 태어날것인가요?<br><br> <br><br></div>
                        <div class="view_3">
                        <input type="radio" name="Q3" value="A"> 개  <br><br>
                        <input type="radio" name="Q3" value="B"> 고양이 <br><br>
                        <input type="radio" name="Q3" value="C"> 말 <br><br>
                        <input type="radio" name="Q3" value="D"> 뱀 <br><br>
                     
                    </div>
    </div>
    <div class="section s3">
    <div class="Qfour">당신에게 한가지 동물을 멸종시킬 수 있는 힘이 있다고 할 때<br>
어떤 동물을 멸종시킬 건가요? <br><br></div>
                        <div class="view_4">

                        <input type="radio" name="Q4" value="A"> 사자 <br><br>
                        <input type="radio" name="Q4" value="B"> 뱀 <br><br>
                        <input type="radio" name="Q4" value="C"> 악어<br><br>
                        <input type="radio" name="Q4" value="D"> 상어 <br><br>
                     
                    </div>
    </div>
    <div class="section s4">
    <div class="Qfive">어느날 당신이 인간의 말을 할 수 있는 동물을 만났습니다!<br>
그 동물은 무엇인가요?<br><br></div>
                        <div class="view_5">

                        <input type="radio" name="Q5" value="A"> 양 <br><br>
                        <input type="radio" name="Q5" value="B"> 말 <br><br>
                        <input type="radio" name="Q5" value="C"> 토끼 <br><br>
                        <input type="radio" name="Q5" value="D"> 새 <br><br>

                    </div>
    </div>

    <div class="section s5">
    <div class="view_6">
    <div class="Qsix">당신은 무인도에 고립되었습니다. 동반자로 한가지만 데려갈 수 있습니다. <br>어떤 것을 택할건가요? <br><br></div>

            <input type="radio" name="Q6" value="A"> 사람 <br><br>
            <input type="radio" name="Q6" value="B"> 돼지 <br><br>
            <input type="radio" name="Q6" value="C"> 소 <br><br>
            <input type="radio" name="Q6" value="D"> 새 <br><br>

</div>
    </div>

    <div class="section s6">
    <div class="view_7">
    <div class="Qseven">당신에겐 모든 종류의 동물을 길들일 수 있는 능력이 있습니다.<br>
어떤것을 충성심 있는 애완동물로 만들고싶나요? <br><br></div>

        <input type="radio" name="Q7" value="A"> 공룡 <br><br>
        <input type="radio" name="Q7" value="B"> 백호 <br><br>
        <input type="radio" name="Q7" value="C"> 북극곰 <br><br>
        <input type="radio" name="Q7" value="D"> 표범 <br><br>
 
</div>
    </div>

    <div class="section s7">
    <div class="view_8">
                <div class="Qeight">당신에게 5분간 특정 동물로 변신할 수 있는 능력이 있다면 어떤것으로 변해보고 싶나요? <br><br></div>

                        <input type="radio" name="Q8" value="A"> 사자 <br><br>
                        <input type="radio" name="Q8" value="B"> 고양이 <br><br>
                        <input type="radio" name="Q8" value="C"> 말 <br><br>
                        <input type="radio" name="Q8" value="D"> 비둘기 <br><br>
                    </div>
                    <div class="next"><input type="submit" value="결과 확인"> </div>
    </div>

</form>
</div>
    <script>
    new fullpage('#full-page',{});
    </script>
    <script src="js/trialTest2.js"></script>
</body>
</html>