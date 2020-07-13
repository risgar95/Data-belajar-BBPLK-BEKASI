<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		//Memasukkan nilai kedalam array
	$mobil=array("Risgar"=>"Volvo", "Alim"=>"BMW", "Siregar"=>"Toyota");
		//Key atau kunci pada array diurutkan secara ascending
	ksort($mobil);

		//Dengan looping menampilkan tiap nilai dari array
	foreach($mobil as $x => $nilai_x){
		echo "Kunci=" . $x .", Nilainya=" . $nilai_x;
		echo "<br/>";
	}
	 
	
	 ?>
	
</body>
</html>