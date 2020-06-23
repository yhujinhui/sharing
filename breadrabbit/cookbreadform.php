<?php 
    require_once('lib/header_php.php'); 
    require_once("conn.php");
    require_once("lib/logchk.php");
    $url="cookbread.php";
    $kinds='';
    if(isset($_SESSION['user_id'])){
        $escaped_user_id=mysqli_real_escape_string($conn,$_SESSION['user_id']);
    }
    if(isset($_GET['kinds'])){
        $kinds=$_GET['kinds'];
    }
    $escaped_title='';
    $escaped_description='';
    $img_src='course';
    $formhref="cookbread_process.php";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>빵 굽기 화면</title>
        <link href="css/cookbread.css" rel="stylesheet"> 
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="js/header.js"></script>
        <script src="js/message.js"></script>
        <script src="js/cookbread.js"></script>
    </head>

    <body>

        <form action="<?=$formhref?>" method="post" name="formBread" onsubmit="return chkBreadKinds();" class="bread">
            
            <div>
                <div>
                    <img src="images/<?=$img_src?>.png" id="breadImg">
                </div>
                <div id="selectKinds">
                    <select name="Kinds" onchange="alert_select_value(this)" required>
                        <option value="none">빵 종류를 선택하세요</option>
                        <option value="course">진로</option>
                        <option value="family">가족</option>
                        <option value="friend">친구</option>
                        <option value="love">사랑</option>
                        <option value="other">기타</option>
                    </select>
                    <br/>
                </div>
                <p>
                    <input type="text" name="breadName" id="breadText" placeholder="빵 이름을 지어주세요" required value="<?=$escaped_title?>">
                </p>
                <p>
                    <textarea rows="10" cols="31" name="breadContents" id="breadTextArea" placeholder="고민을 적어주세요" required><?=$escaped_description?></textarea>
                </p>
                <input type="hidden" name="user_id" value="<?=$escaped_user_id?>">
                <input type="submit" id="submitButton" name="submit" alt="빵 굽기!" value="빵 굽기">
            </div>
        </form>


    </body>
</html>