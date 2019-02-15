<html>
	<head>
	<title>AddShiftForm</title>
	<link rel="stylesheet" type="text/css" href="StyleSheet.css">

	</head>
	<body>
		<?php
		include ("Connection.php");
		echo "<br>";
		$eID=$_GET["eIDField"];
		$jID=$_GET["jIDField"];
		$workDate=$_GET["dateField"];
		$workTime=$_GET["timeField"];
		
		$sql="INSERT INTO Shifts('$eID', '$jID', '$workDate', '$workTime')";
		if(mysqli_query($con, $sql)){
			echo "insert succesful";
		}
		?>

	</body>
</html>