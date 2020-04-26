<?php 
    require_once("conn.php");

    if(isset($_GET['id'])){
        $escaped_user_id=mysqli_real_escape_string($conn,$_GET['id']);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>빵 굽기 화면</title>
        <link href="css/cookbread.css" rel="stylesheet">   
    </head>

        <body>
            <header>
                <a href=""></a>
            </header>
            <form action="cookbread_process.php" method="post">
                <div>
                    <img src="images/bread1.png" id="breadImg">
                </div>
                <div class="selectKinds">
                    <select id="selectKinds" name="Kinds" onchange="alert_select_value(this)" required>
                        <option vlaue="none" disabled selected="selected">빵 종류를 선택하세요</option>
                        <option value="course">진로</option>
                        <option value="family">가족</option>
                        <option value="friend">친구</option>
                        <option value="love">사랑</option>
                        <option value="other">기타</option>
                    </select>
                    <br/>
                </div>

                <div>
                    <p>
                        <input type="text" name="breadName" id="breadText" placeholder="빵 이름을 지어주세요" required>
                    </p>
                    <p>
                        <textarea rows="10" cols="33" name="breadContents" id="breadTextArea" placeholder="고민을 적어주세요" required></textarea>
                    </p>
                    <input type="hidden" name="user_id" value="<?=$escaped_user_id?>">
                        <input type="submit" id="submitButton" name="submit" alt="빵 굽기!" value="">
                </div>

            </form>
        
            <script src="js/cookbread.js"></script>
        </body>
   
</html>