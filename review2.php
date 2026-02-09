<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
<p>こちらのレビューでよろしいですか？</p>
<form action="review3.php" method="post">
<?php
$rid=htmlspecialchars($_POST['id']);
$rreview=htmlspecialchars($_POST['review']);
?>
<table>
	<tr>
		<th>商品ID</th>
		<td><?=$rid ?></td>
	</tr>
	<tr>
		<th>レビュー内容</th>
		<td><?=$rreview?></td>
	</tr>
	<td><input type="hidden" name="id" value="<?=$rid ?>"></td>
	<td><input type="hidden" name="review" value="<?= $rreview?>"></td>
	<th><td><input type="submit" value="OK"></td></th>
	
</table>
</form>
</body>
</html>