<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ログイン　チキ商店</title>
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php require 'header.php'; ?>

<h2>ようこそ<?= $_SESSION['dname']?>さん。</h2>
<form action="cart.php" method="post">
<input type="hidden" name="pid" value="<?=$_GET['id']?>">
購入数<input type="text" name="count">
<input type="submit" value="カートに入れる">
</form>


<table>
<tr><th>商品番号</th><th>商品名</th><th>価格</th></tr>
<?php $pdo=new PDO('mysql:host=localhost;dbname=r2a12514;charset=utf8',
		'r2a12514','20050412');
$sql=$pdo->prepare('select * from products where p_id=?');
$sql->execute([$_GET['id']]);
foreach ($sql as $row){
?>
	<tr>
	<td><?= $row['p_id'] ?></td>
	<td><?= $row['p_name'] ?></td>
	<td><?= $row['p_price'] ?></td>
	</tr>
<?php
}
?>
</table>
<img src="img/<?=$_GET['id']?>" widht='150' height='150' /><br>
<a href="review.php">レビューはこちらからお書きください</a>
<p>レビュー内容</p>
<?php
$sql2=$pdo->prepare('select * from review where p_id=?');
$sql2->execute([$_GET['id']]);
foreach ($sql2 as $pow){
?>
	<table border="1">
	<tr>
	<td><?= $pow['r_id'] ?></td>
	<td><?= $pow['r_nai'] ?></td>
	</tr>
<?php
}
?>
</body>
</html>