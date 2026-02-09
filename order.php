<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="style.css">
</head>
<body>


<title>注文手続き</title>
<p>配送先を入力してください</p>


<form action="check.php" method="post">
<table>
	<tr>
		<th>氏名</th><td><input type="text" name="name" maxlength="20"></td>
	</tr>
	<tr>
		<th>郵便番号</th><td><input type="text" name="postcode"></td></th>
	</tr>
	<tr>
		<th>住所</th><td><input type="text" name="address" maxlength="40"></td></th>
	</tr>
	<tr>
		<th>電話番号</th><td><input type="text" name="phone"></td></th>
	</tr>
	<tr>
		<th>支払方法</th><td><input type="radio" name="pay" value="1">代引き<input type="radio" name="pay" value="2">振込</td></th>

	</tr>
	<tr>
		<th><td><input type="submit" value="確認"></td></th>
	</tr>
</table>
</form>


<?php require 'header.php'; ?>
<h1>カートの内容一覧</h1>
<p>カートの内容の一覧です</p>

<table border="1">


<?php 
$sum;
?>


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
	<?php $sum = $sum + $row['p_price'] * $value; ?>
</tr>

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