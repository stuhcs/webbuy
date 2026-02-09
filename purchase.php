<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>PHP Sample Programs</title>
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
$pdo=new PDO('mysql:host=localhost;dbname=r2a12514;charset=utf8',
		'r2a12514','20050412');
	$sql=$pdo->prepare('insert into orders values(null,?,?,?,?,?,?,1)');
	$sql->execute([$_SESSION['id'],$_POST['postcode'],$_POST['address'],$_POST['name'],$_POST['phone'],$_POST['pay']]);

	$sql2=$pdo->prepare('insert into details values(?,?,?,?);');

foreach($_SESSION['cart'] as $key => $value){
		$ppap=$pdo->lastInsertId();
		$sql2->execute([$ppap,$key,$value,0]);
}
echo "購入が完了しました";
?>
<br><a href="http://10.11.39.220/~r2a12514/main.php">メインメニュー</a>
<?php unset ($_SESSION['cart']);?>
</body>
</html>
