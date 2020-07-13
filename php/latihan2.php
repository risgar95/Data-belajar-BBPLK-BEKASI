<!DOCTYPE html>
<html>
<head>
	<title>Latihan Conditional Statement</title>
</head>
<body>
	<?php

	$a=$_POST['angka'];
	if($a>80){
		$grade = "grade a";
	}elseif ($a>70) 
	{
		$grade = "grade b";
	}elseif ($a>50) 
	{
		$grade = "grade c";
	}else {
		$grade = "grade d";
	}
	echo "nilai anda:$a<br>";
	echo "grade: $grade";

	?>
	<a href="form_latihan.php">
		<?php
		echo "klik";
		  ?>
	</a>

</body>
</html>