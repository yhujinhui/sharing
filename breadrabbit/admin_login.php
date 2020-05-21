 <!DOCTYPE html>
 <html lang="ko">
 <head>
 	<meta charset="UTF-8">
 	<title>관리자 로그인</title>
 	<link href="css/admin_login.css" rel="stylesheet">   
 </head>
 <body>
 	<div class="container">
		<form action="admin.php" method="post">
	 		<table border="1">
	 			<tr>
	 				<td>아이디</td>
	 				<td><input type="text" name="id" size="11"></td>
	 			</tr>
	 			<tr>
	 				<td>비밀번호</td>
	 				<td><input type="password" name="password" size="11"></td>
	 			</tr>
	 			<tr>
	 				<td colspan="2"><input type="submit" value="로그인"></td>
	 			</tr>
	 		</table>
 		</form>	
	</div>
 </body>
 </html>