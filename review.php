<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>PHP Sample Programs</title>
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="style1.css">
</head>
<body>
<title>レビューをお書きください</title>
<form action="review2.php" method="post">
<table>
	<tr>
		<th>商品ID</th><td><input type="text" name="id" maxlength="20"></td>
	</tr>
	<tr>
		<th>レビュー内容</th><td><input type="text" name="review" maxlength="500" size="50"></td>
	</tr>
	<tr>
		<td><input type="submit" value="登録"></td>
	</tr>
</table>
</form>
</body>
</html>