<?php  

require_once("conn.php");
$filtered=array(
	'id'=>mysqli_real_escape_string($conn,$_GET['id']),
	// content id
);
$sql="select * from content where id={$filtered['id']}";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$escaped_title=htmlspecialchars($row['title']);
$escaped_description=htmlspecialchars($row['description']);

?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <link href="css/cookbread.css" rel="stylesheet">   
</head>
<body>
    <header>
        <a href=""></a>
    </header>
    <form action="update_process.php" method="post">
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
                <input type="text" name="breadName" id="breadText" placeholder="빵 이름을 지어주세요" required value="<?=$escaped_title?>">
            </p>
            <p>
                <textarea rows="10" cols="33" name="breadContents" id="breadTextArea" placeholder="고민을 적어주세요" required><?=$escaped_description?></textarea>
            </p>
            <input type="hidden" name="user_id" value="<?=$escaped_user_id?>">
                <input type="submit" id="submitButton" name="submit" alt="빵 굽기!" value="">
        </div>

    </form>

    <script src="js/cookbread.js"></script>
	</body>
</html>