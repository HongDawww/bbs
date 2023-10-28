<?php
include ("config_inc.php");
include ("lib.php");
$conn =  dbconn();


?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="style.css">
	<title>PHP 멀티게시판</title>
</head>
<body>
	<h2 align=center>멀티 게시판</h2>
	<form action="write.php" method="post" enctype=multipart/form-data>
	<table border=0 cellpadding=0 cellspacing=0 width=770 align=center>
		<tr>
			<td> 
						
			<td bgcolor=#f7f7f2>
			<table border=0 width=100% cellspacing=3 cellpadding=1>
				<tr bgcolor=#74adfd>
					<td colspan=5 height=1></td>
				</tr>
			
				<tr bgcolor=#e6f0fe height=20>
					<td colspan=2 align=center>글쓰기</td>
				</tr>
				<tr bgcolor=#74adfd>
					<td colspan=5 height=1></td>
				</tr>
				<tr>
					<td height=3></td>
				</tr>
				<tr>
					<td width=60>제목</td>
					<td><input type="text" name="table_subject" size=60></td>
					
				</tr>
				<tr>
					<td>이름</td>
					<td><input type="text" name="w_name" size=30></td>
					
				</tr>
				<tr>
					<td>이메일</td>
					<td><input type="text" name="email" size=30></td>
					
				</tr>
				<tr>
					<td>비밀번호</td>
					<td><input type="text" name="passwd" size=30></td>
					
				</tr>
				<tr>
					<td>내용</td>
					<td><textarea name="content" cols="80" rows="8"></textarea>
					</td>
					
				</tr>
				<tr>
					<td>링크</td>
					<td><input type="text" name="url" size=60></td>
					
				</tr>
				<tr>
					<td>첨부파일</td>
					<td><input type="file" name="w_file" size=50></td>
					
				</tr>
				<tr>
					<td height=3></td>
				</tr>
				<tr bgcolor=#74adfd>
					<td colspan=5 height=1></td>
				</tr>
				
			<td>
		</tr>
		</td>
</table>
<table align=center>
<tr>
	<td height=30 colspan=2 align=center><input type="submit" value="글쓰기"></td>
</tr>
</table>
</form>

