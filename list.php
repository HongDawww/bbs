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

	<table border=0 cellpadding=0 cellspacing=0 width=770 align=center>
		<tr>
			<td> <b>멀티 게시판</b>
			<br>
			<br>
			<table border=0 width=100% cellspacing=0 cellpadding=0>
				<tr bgcolor=#74adfd>
					<td colspan=5 height=2></td>
				</tr>
				<tr bgcolor=#ffffff>
					<td colspan=5 height=2></td>
				</tr>
				<tr bgcolor=#e6f0fe height=25>
					<td>번호</td>
					<td>제목</td>
					<td>글쓴이</td>
					<td>작성일</td>
					<td>조회</td>
				</tr>
			
				
				<tr bgcolor=#ffffff>
					<td colspan=5 height=2></td>
				</tr>
				<tr bgcolor=#74adfd>
					<td colspan=5 height=2></td>
				</tr>
			</table>
			</td>
		</tr>
	</table>
	<table border=0 cellpadding=0 cellspacing=0 width=770 align=center>
		<tr bgcolor=#e6f0fe>
			<td align=right height=40><a href="write_form.php"><img src="img/i_write.gif" border=0 alt=""></a>

			</td>
		</tr>
	</table>
</body>
</html>