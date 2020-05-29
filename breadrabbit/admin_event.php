<?php 
	require_once("lib/admin_logchk.php");
?>

<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style>
      @import url("css/admin_account.css");
    </style>
</head>
<body>
	<script type="text/javascript" src="js/admin.js"></script>
	<?php 
		require_once("lib/admin_header.php");
	 ?>
	 <table border="1">
	 	<tr>
	 		<th><a href="admin_event_show.php">이벤트</a></th>
	 		<td>현재 진행중인 모든 이벤트를 볼수 있습니다</td>
	 	</tr>
	 	<tr>
	 		<th><a href="admin_event_add.php">이벤트 추가</a></th>
	 		<td>관리자가 직접 이벤트를 추가합니다</td>

	 	</tr>
	 </table>
</body>
</html>