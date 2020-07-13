<?php 
include_once 'myfunction.php';

if(isset($GET['jari'])){
	$r = $GET['jari'];
	$luas = hitungLuasLingkaran($r);
	$kel = hitungKelLingkaran($r);
}else{
	$luas = 0;
	$kel = 0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewpor" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="">
		jari-jari Lingkaran :<input type="number" name="jari" require><br>
		<input type="submit" value="Hitung">
	</form>
	<hr>
	Luas Lingkaran : <?=$luas;?>
	Keliling Lingkaran : <?=$kel?>
</body>
</html>