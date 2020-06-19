<?php  
require_once("conn.php");

$filtered=array(
        'description' => mysqli_real_escape_string($conn,$_POST['description']),
        'tel' => mysqli_real_escape_string($conn,$_POST['tel']),
);

$sql = 
"insert into event_review(description,tel, created) 
values('{$filtered['description']}','{$filtered['tel']}',now())";

$result=mysqli_query($conn,$sql);

if($result==false){
        echo '에러';
        echo mysqli_error($conn);

}else{
    header("Location: event_review.php");
}
?>