<?php session_start(); ?>
<?php 
$name=htmlspecialchars($_POST['name']);
$pass=htmlspecialchars($_POST['pass']);
$dname=htmlspecialchars($_POST['dname']);
$pdo=new PDO('mysql:host=localhost;dbname=r2a12514;charset=utf8',
		'r2a12514','20050412');
	$sql=$pdo->prepare('insert into users values(null,?,?,?,0)');
	$sql->execute([$name,$pass,$dname]);
?>
<?php echo 'ご登録ありがとうございます'; ?>
<br><a href="http://10.11.39.220/~r2a12514/index.php">こちらからログインお願いします</a>