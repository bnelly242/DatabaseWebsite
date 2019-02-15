<html>
	<head>
	<title>AddCustomerForm</title>
	<link rel="stylesheet" type="text/css" href="StyleSheet.css">

	</head>
	<body>
		<?php
		include ("Connection.php");
		echo "<br>";
		$cID=$_GET["customerField"];
		$jobID=$_GET["jobField"];
		$date=$_GET["dateField"];
		$amount=$_GET["amountField"];
		
		$sql="INSERT INTO Payments('$cId', '$jobID', '$date', '$amount'";
		if(mysqli_query($con, $sql)){
			echo "insertion succesful"
		}
		?>

	</body>
</html>