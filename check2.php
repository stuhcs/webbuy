<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
<p>こちらの情報でよろしいですか？</p>
<form action="ok.php" method="post">
<?php
$name=htmlspecialchars($_POST['name']);
$pass=htmlspecialchars($_POST['pass']);
$dname=htmlspecialchars($_POST['dname']);
?>
<table>
	<tr>
		<th>氏名</th>
		<td><?= $name?></td>
	</tr>
	<tr>
		<th>パスワード</th>
		<td><?= $pass?></td>
	</tr>
	<tr>
		<th>ニックネーム</th>
		<td><?= $dname?></td>
	</tr>
	<input type="hidden" name="name" value="<?= $name?>">
	<input type="hidden" name="pass" value="<?= $pass?>">
	<input type="hidden" name="dname" value="<?= $dname?>">
	<th><td><input type="submit" value="登録"></td></th>
	
</table>
</form>
</body>
</html>