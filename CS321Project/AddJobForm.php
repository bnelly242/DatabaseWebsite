<html>
	<head>
	<title>AddJobForm</title>
	<link rel="stylesheet" type="text/css" href="StyleSheet.css">

	</head>
	<body>
		<?php
		include ("Connection.php");
		echo "<br>";
		$jaddress1=$_GET["streetField"];
		$jaddress2=$_GET["townField"];
		$jaddress4=$_GET["zipField"];
		$jaddress3=$_GET["stateField"];
		$jpay=$_GET["costField"];
		$jdate=$_GET["startField"];
		$descr=$_GET["descriptionField"];
		$cID=$_GET["cIDField"];
		
		$sql="INSERT INTO Job($jIDCount, '$jaddress1', '$jaddress2', '$jaddress3', '$jaddress4', '$cID', '$jpay', '$jdate', '$descr')";
		if(mysqli_query($con, $sql)){
			echo "insert successful";
		}
		$jIDCount++;
		?>

	</body>
</html>