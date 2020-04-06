<!-- 메인화면에서 입력한 정보를 mysql에 연동 -->
<?php 
require_once('conn.php');

$filtered=array(
'title'=>mysqli_real_escape_string($conn,$_POST['title']),
'description'=>mysqli_real_escape_string($conn,$_POST['description'])
);

$sql=
"insert into content(title,description,created)
values('{$filtered['title']}','{$filtered['description']}',now())";

$result=mysqli_query($conn,$sql);
print_r(mysqli_error($conn));
?>