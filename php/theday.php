<!DOCTYPE html>
<html>
<head>
	<title>The Day</title>
</head>
<body>
<?php
	$day = date ('l');
	switch ($day) {
		case 'Sunday':
			$hari = "Minggu";
			break;
		case 'Monday':
			$hari = "Senin";
			break;
		case 'Tuesday':
			$hari = "Selasa";
			break;
		case 'Wednesday':
			$hari = "Rabu";
			break;
		case 'Thursday':
			$hari = "Kamis";
			break;
		case 'Friday':
			$hari = "Jum'at";
			break;
		case 'Saturday':
			$hari = "Sabtu";
			break;
		
		default:
			echo "Sunday, Monday, Tuseday, Wednesday, Thursday, Friday, Saturday";
			break;
	}
	echo "$day <br>";
	echo "$hari";

  ?>
</body>
</html>