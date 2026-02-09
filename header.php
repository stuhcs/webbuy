<?php
	if($_SESSION['id'] == null || $_SESSION['id'] == ""){
		header('Location:http://10.11.39.220/~r2a12514/index.php');
	exit();
	}
?>

<div>

	チキ商店
	<?= $_SESSION['dname']; ?>
	<input type="submit" onclick="location.href='./main.php'" value="トップ">
	<input type="submit" onclick="location.href='./logout.php'" value="ログアウト">
</div>
