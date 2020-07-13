<?php 
	function no1(){
		echo "Halo perkenalkan nama saya Riski<br>";
		echo "Senang berkenalan dengan Anda<br>";
		echo "Sampai berJumpa lagi<br>";
		echo "<hr>";
	}
	//function dengan parameter
	function perkenalanKedua($nama="Wulan", $salam="Selamat Malam"){
		echo "$salam,perkenalkan nama saya $nama <br>";
		echo "Senang berkenalan dengan Anda<br>";
		echo "Sampai berjumpa lagi<br>";
		echo "<hr>";
	}

	perkenalan();
	perkenalanKedua("Sony", "Selamat Pagi");
	perkenalanKedua("Nita", "Selamat Siang");
	perkenalanKedua("Sinta", "Salam Sukses");

 ?>


