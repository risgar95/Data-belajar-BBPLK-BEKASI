<!DOCTYPE html>
<html>
<head>
	<title>hasil</title>
</head>
<body>
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