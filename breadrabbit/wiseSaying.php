<?php
  $conn = mysqli_connect("localhost","root","mirim2","saying","3307");

  if(!$conn){
      echo "Faild to connect to MySQl: ".mysqli_connect_error();
  }else{
    echo "gljdksfksd";
  }

?>

<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>빵 굽는 토끼</title>

    <link href="wiseSaying.css" rel="stylesheet">   
  </head>
  <body>
     
    <script src="jsWiseSaying.js"></script>
  </body>
</html>