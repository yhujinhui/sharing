

<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>빵 굽는 토끼</title>

    <link href="css/wiseSaying.css" rel="stylesheet">   
  </head>
  <body onresize="parent.resizeTo(1000,700)" onload="parent.resizeTo(1000,700)">
          <?php

          require_once('conn.php');

          if(!$conn){
              echo "Faild to connect to MySQl: ".mysqli_connect_error();
          }


          $MAXNUMBER = 5;



          $number=mt_rand(1, $MAXNUMBER);

          $query = "select contents, source from saying where number=".$number.";";
          
          $result = mysqli_query($conn, $query);
          
          while($row = mysqli_fetch_array($result)){
            // echo "</br>".$row['contents']." ,  ".$row['source']."<br/>";
          ?>
            <div class="contents">
              <?php echo $row['contents']; ?>
            </div>
            <div class="source">
              <?php echo "- ".$row['source']." -"; ?>
            </div>
            
          <?php
          }
          ?>
          <input type="button" value="" id="closeButton" onclick="self.close();">
    <script src="jsWiseSaying.js"></script>
  </body>
</html>