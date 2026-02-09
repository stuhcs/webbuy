<?php session_start(); ?>
<?php
$rid=htmlspecialchars($_POST['id']);
$rreview=htmlspecialchars($_POST['review']);
$pdo=new PDO('mysql:host=localhost;dbname=r2a12514;charset=utf8',
		'r2a12514','20050412');
	$sql=$pdo->prepare('insert into review values(null,?,?)');
	$sql->execute([$rid,$rreview]);
?>
<?php echo 'ご登録ありがとうございます'; ?>
<br><a href="http://10.11.39.220/~r2a12514/main.php">商品画面へ</a>