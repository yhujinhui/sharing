<?php 
require_once("conn.php");

$filtered=array(
	'id'=>mysqli_real_escape_string($conn,$_GET['id']),
	'user_id'
);
$logchk='';
$update='';
$delete='';

if(isset($_GET['user_id'])){
	$filtered['user_id']=mysqli_real_escape_string($conn,$_GET['user_id']);
	
}else{
	$logchk='logchk()';
}
$sql_content=
"select * from content left join sign on content.user_id=sign.user_id where content.id={$filtered['id']}";
$result_content=mysqli_query($conn,$sql_content);
$row_content=mysqli_fetch_array($result_content);
// print_r($row_content);
$escaped_created=htmlspecialchars($row_content['created']);
$escaped_title=htmlspecialchars($row_content['title']);
$escaped_description=htmlspecialchars($row_content['description']);
$escaped_kinds=htmlspecialchars($row_content['kinds']);
$escaped_name=htmlspecialchars($row_content['name']);
if(isset($_GET['user_id'])){
	if($filtered['user_id']==$row_content['user_id']){
		$update=
		"<a href='update.php?id={$row_content[4]}&user_id={$filtered['user_id']}'>수정하기</a>";
		// content_id
		$delete=
		"<a href='update.php?id={$row_content[4]}&user_id={$filtered['user_id']}'>삭제하기</a>";
		// a말고 버튼으로 수정해야함
	}
}
$comment='';
$sql_comment=
"select * from content left join comment on comment.content_id =content.id where comment.content_id= {$filtered['id']}";
$result_comment=mysqli_query($conn,$sql_comment);
while($row_comment=mysqli_fetch_array($result_comment)){

	// print_r($row_comment);
	$escaped_comment_name=htmlspecialchars($row_comment['name']);
	$escaped_comment=htmlspecialchars($row_comment['comment']);
	$escaped_comment_created=htmlspecialchars($row_comment['created']);
	$comment=$comment.
	"<div class='comment'>
		<span> 이름:".$escaped_comment_name."</span>
		<span> 댓글내용:".$escaped_comment."</span>
		<span> 댓글쓴 날짜:".$escaped_comment_created."</span></div>"
	;
	
}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<script src="js/content.js"></script>
	<div>이름:<?=$escaped_name?></div>
	<div>날짜:<?=$escaped_created?></div>
	<div>제목:<?=$escaped_title?></div>
	<div>본문:<?=$escaped_description?></div>
	<?=$update?>
	<?=$delete?>
	<br>
	<br>
	<div id="commentdiv">
		<div class="comment">
			<?=$comment?>
		</div>
	</div>
	<form action="content_process.php" method="post">
		<div>댓글:<textarea name="comment" id="comment" cols="30" rows="10" required></textarea></div>
		<input type="hidden" name=content_id value="<?=$filtered['id']?>">
		<input type="hidden" name=user_id value="<?=$filtered['user_id']?>">
        <input type="submit" id="submitButton" name="submit" alt="" value="댓글달기" onclick="<?=$logchk?>">
	</form>
</body>
</html>