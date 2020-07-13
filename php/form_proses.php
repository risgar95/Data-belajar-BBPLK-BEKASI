<!DOCTYPE html>
<html>
<head>
	<title>Form Proses</title>
</head>
<body>
	<?php
	$email = $_POST["email"];
	$katasandi = $_POST["katasandi"];

	if ($email== 'siregariski@gmail.com') {
		if ($katasandi=='adam') {
			echo "anda berhasil login";
		}else {
			echo "password anda salah";
		}
	}else {
		echo "email salah";
	}
	  ?><br>
	  <?php 
	$x = 1; 
	while ($x<12){
		if ($x !=5) {
			echo "<br>The number is: $x";
		}
		$x = $x+2;
	}
	?><br>
	<?php
	for ($a=1; $a<=$_POST["angka"]; $a++) { 
		for ($b=1; $b<=$a ; $b++) {
			echo "*"; 
		}echo "<br>";
	}
	  ?>
	  <a href="form_login.php">kembali</a>
</body>
</html>