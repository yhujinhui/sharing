<?php 
    require_once("conn.php");
    require_once("lib/logchk.php");
   
    if(isset($_SESSION['user_id'])){
        $escaped_user_id=mysqli_real_escape_string($conn,$_SESSION['user_id']);
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
    </head>
     <body>
    <?php
        require_once("lib/write.php");
    ?>
    <input type="hidden" name="user_id" value="<?=$escaped_user_id?>">
    <input type="submit" id="submitButton" name="submit" alt="빵 굽기!" value="">
    </div>
    </form>
    <script src="js/cookbread.js"></script>
</body>
</html>