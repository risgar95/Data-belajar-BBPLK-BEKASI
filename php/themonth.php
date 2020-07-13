<!DOCTYPE html>
<html>
<head>
	<title>Month</title>
</head>
<body>
<?php
	$Month = date ('F');
	switch ($Month) {
		case 'January':
			$Bulan = "Januari";
			break;
		case 'February':
			$Bulan = "Februari";
			break;
		case 'March':
			$Bulan = "Maret";
			break;
		case 'April':
			$Bulan = "April";
			break;
		case 'May':
			$Bulan = "Mei";
			break;
		case 'June':
			$Bulan = "Juni";
			break;
		case 'July':
			$Bulan = "Juli";
			break;
		case 'August':
			$Bulan = "Agustus";
			break;
		case 'September':
			$Bulan = "September";
			break;
		case 'October':
			$Bulan = "Oktober";
			break;
		case 'November':
			$Bulan = "November";
			break;
		case 'December':
			$Bulan = "Desember";
			break;		
		default:
			echo "January, February, March, April, May, June, July, August, September, October, November, December";
			break;
	}
	echo "Month <br>";
	echo "Bulan";
?>

</body>
</html>