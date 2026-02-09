<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div>
	<title>新規会員登録</title>
	<p>個人情報を入力してください</p>
	<form action="check2.php" method="post">
<table>
	<tr>
		<th>氏名</th><td><input type="text" name="name" maxlength="20"></td>
	</tr>
	<tr>
		<th>パスワード</th><td><input type="text" name="pass"></td></th>
	</tr>
	<tr>
		<th>ニックネーム</th><td><input type="text" name="dname" maxlength="40"></td></th>
	</tr>
	<tr>
		<th><td><input type="submit" value="確認"></td></th>
	</tr>
</table>
</div>
</body>
</html>