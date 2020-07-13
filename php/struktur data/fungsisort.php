<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		//Memasukkan nilai ke dalam array
	$mobil=array("Volvo", "BMW","Toyota");

		//Array diurutkan secara Ascending
	sort($mobil);

		//Mendapatkan jumlah nilai dari array $mobil
	$length=count($mobil);

		//Dengan looping menampilkan tiap nilai dari array
	for ($x=0; $x < $length; $x++) { 
		echo "$mobil[$x]";
		echo "<br/>";
	}
	 ?>


</body>
</html
