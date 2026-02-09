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
unset ($_SESSION['id']);
$pdo=new PDO('mysql:host=localhost;dbname=r2a12514;charset=utf8',
		'r2a12514','20050412');
$sql=$pdo->prepare('select * from users where u_name=? and u_pass=?');
$sql->execute([$_POST['user'],$_POST['pass']]);
foreach($sql as $row){
	$_SESSION['id']=$row['u_id'];
	$_SESSION['dname']=$row['u_dname'];
}
if(isset($_SESSION['id'])){
	header('Location:http://10.11.39.220/~r2a12514/main.php');
	exit();
}else{
	header('Location:http://10.11.39.220/~r2a12514/index.php');
	exit();
}
?>
</body>
</html>