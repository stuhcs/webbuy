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
<h1>カートの内容一覧</h1>
<p>カートの内容の一覧です</p>

<table border="1">


<?php 
$sum;

 $_SESSION['cart'][$_POST['pid']]=$_POST['count'];?>

<tr><th>商品ID</th><th>商品名</th><th>価格</th><th>購入数</th><th>小計</th></tr>

<?php 	 
$pdo=new PDO('mysql:host=localhost;dbname=r2a12514;charset=utf8',
		'r2a12514','20050412');
	$sql=$pdo->prepare('select * from products where p_id=?');

foreach($_SESSION['cart'] as $key => $value){

	$sql->execute([$key]);

	foreach ($sql as $row){
?>

<tr>
	<td><?= $key ;?></td>
	<td><?= $row['p_name']; ?></td>
	<td><?= $row['p_price']; ?></td>
	<td><?= $value;?></td>
	<td><?= $row['p_price'] * $value; ?></td>
	
</tr>
<?php $sum = $sum + $row['p_price'] * $value; ?>
<?php
}
}
?>
<tr><th colspan="4">合計</th><th><?= $sum; ?></th></tr>
</table>
<a href="http://10.11.39.220/~r2a12514/main.php">mainに戻る</a><br>
<a href="http://10.11.39.220/~r2a12514/order.php">購入手続き</a><br>
<a href="#" onclick="history.back(); return false;">戻る</a>
</body>
</html>