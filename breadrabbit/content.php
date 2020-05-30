<?php 
require_once("conn.php");
session_start();
$filtered=array(
	'id'=>mysqli_real_escape_string($conn,$_GET['id']),
	'user_id'
);
$logchk='';
$update='';
$delete='';

if(isset($_SESSION['user_id'])){
	$filtered['user_id']=mysqli_real_escape_string($conn,$_SESSION['user_id']);
	
}else{
	$logchk='return logchk()';
}
$sql_content=
"select * from content left join sign on content.user_id=sign.user_id where content.id={$filtered['id']}";
$result_content=mysqli_query($conn,$sql_content);
$row_content=mysqli_fetch_array($result_content);
// print_r($row_content);
$escaped_profile=htmlspecialchars($row_content['profile']);
// print_r($escaped_profile);
$escaped_created=htmlspecialchars($row_content['created']);
$escaped_title=htmlspecialchars($row_content['title']);
$escaped_description=htmlspecialchars($row_content['description']);
$escaped_kinds=htmlspecialchars($row_content['kinds']);
$escaped_name=htmlspecialchars($row_content['name']);
if(isset($filtered['user_id'])){
	if($filtered['user_id']==$row_content['user_id']){
		$update=
		"<a href='update.php?id={$row_content[4]}'>수정하기</a>";
		// content_id
		$delete=
		"<form action='content_delete_process.php' method='post'>
		<input type='hidden' name='user_id' value='".$filtered['user_id']."'>
		<input type='hidden' name='id' value='".$row_content[4]."'>
		<input type='submit' class='submit' value='빵제거하기' onclick='return contentdeletechk()'></form>";
	}
}

$comment='';
$sql_comment=
"select * from content left join comment on comment.content_id =content.id where comment.content_id= {$filtered['id']}";

$result_comment=mysqli_query($conn,$sql_comment);

while($row_comment=mysqli_fetch_array($result_comment)){
	$comment_delete='';	
	// print_r($row_comment);
	
	$escaped_comment=htmlspecialchars($row_comment['comment']);
	$escaped_comment_created=htmlspecialchars($row_comment['created']);
	$escaped_comment_id=htmlspecialchars($row_comment['id']);
	$escaped_comment_user_id=htmlspecialchars($row_comment['user_id']);
	$sql_user=
	"select * from sign left join comment on sign.user_id = comment.user_id where sign.user_id='$escaped_comment_user_id'";
	$result_user=mysqli_query($conn,$sql_user);
	$row_user=mysqli_fetch_array($result_user);
	$escaped_user_profile=htmlspecialchars($row_user['profile']);
	$escaped_user_name=htmlspecialchars($row_user['name']);
	if(isset($filtered['user_id'])){
		if($filtered['user_id']==$row_comment['user_id']){
			$comment_delete=
			"<form action='comment_delete_process.php' method='post'>
			<input type='hidden' name='user_id' value='".$filtered['user_id']."'>
			<input type='hidden' name='id' value='".$escaped_comment_id."'>
			  <input type='submit' class='submit' value='삭제하기' onclick='return deletechk()'></form>";
		}
	}
	$comment_report="";
	if($filtered['user_id']!=$row_comment['user_id']){
		$comment_report=
		"<form action='comment_report_process.php' method='post'>
		<input type='hidden' name='id' value='".$escaped_comment_id."'>
		<input type='submit' class='submit' value='신고하기' onclick='return reportchk()'></form>";
	}
	
	$comment=$comment.
	'
	<div class="comment">
		<div class="comment-profile">
		<img src="images/'.$escaped_user_profile.'profile.png" class="profileimg">
		</div>
		<div class="comment-update">
			'.$comment_delete.'
			'.$comment_report.'
		</div>
		<div class="comment-name">
			'.$escaped_user_name.'
		</div>
		<div class="comment-description">
			'.$escaped_comment.'
		</div>
		<div class="comment-date">
			'.$escaped_comment_created.'
		</div>
	</div>
	';
}

?>

<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="css/content.css" rel="stylesheet">
	<script src="js/content.js"></script>
</head>
<body onload="backcolorchange(0,9)">
	
	<div class="warraper">
		<div class="offButton">
			<a href="store.php?page=1&kinds=all"><img src="images/offButton.png" style="width:40px; height:40px"></a>
		</div>
		<div class="container">
			<div class="header">
				<div class="profile">
					<img src='images/<?=$escaped_profile?>profile.png' class="profileimg">
				</div>
				<div class="update">
					<?=$update?>
					<?=$delete?>
				</div>
				<div class="user-name">
					<?=$escaped_name?>	
				</div>
				<div class="date">
					<?=$escaped_created?>
				</div>
			</div>
			
			<div class="main">
				<div class="title">
					<?=$escaped_title?>
				</div>
				<div class="description">
					 <?=$escaped_description?> 
				</div>
			</div>
			<div class="footer">
				<div class="comment-title">댓글</div>
				<?=$comment?>
				<div class="post-comment">
					<form action="content_process.php" method="post">
						<div><textarea name="comment" id="comment" cols="33" required></textarea></div>
						<input type="hidden" name=content_id value="<?=$filtered['id']?>">
						<input type="hidden" name=user_id value="<?=$filtered['user_id']?>">
				        <input type="submit" id="submitButton" name="submit" alt="" value="댓글달기" onclick="<?=$logchk?>">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>