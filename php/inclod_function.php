<?php 
include_once 'myfunction.php';


//lingkaran

if (isset($_GET['jari'])) {
	$r = $_GET['jari'];
	$luas = hitungluaslingkaran($r);
	$kel = hitungkelilinglingkaran($r);	
}else{
	$luas = 0;
	$kel = 0;
}


//persegi
if (isset($_GET['segi1'])) {
	$s = $_GET['segi1'];
	$luassegi = luaspersegi($s);
	$kelsegi = klilingpersegi($s);	
}else{
	$luassegi = 0;
	$kelsegi = 0;
}

//persegi panjang



if (isset($_GET['panjang'])) {
	$p = $_GET['panjang'];
	$l = $_GET['panjang'];
	$luaspanjang = luaspanjang($p, $l);
	$kelpanjang = klilingpanjang($p, $l);	
}else{
	$luaspanjang = 0;
	$kelpanjang = 0;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>menyambungkan function</title>
</head>
<body>
	<!-- lingkaran -->
	<form action="" method="">
		lingkaran : <input type="number" name="jari" require><br>
		
		luas lingkaran : <?php  echo($luas); ?>
		keliling lingkaran : <?php  echo($kel); ?>
		<?php echo("<hr>") ?>

		<!-- persegi panjang -->

		<form action="" method="">
			persegi : <input type="number" name="segi1" require><br>
			

			luas persegi : <?php  echo($luassegi) ?>
			keliling persegi : <?php  echo($kelsegi) ?>


			<?php echo("<hr>") ?>

			<!-- persegi -->

			<form action="" method="">
				luas : <input type="number" name="panjang" require><br>
				panjang<input type="number" name="panjang" require><br>
				

				luas persegi : <?php  echo($luaspanjang) ?>
				keliling persegi : <?php  echo($kelpanjang) ?>
				<?php echo("<hr>") ?>
				<input type="submit" name="hitung" value="hitung">

			</form>

		</body>
		</html>