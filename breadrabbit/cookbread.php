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