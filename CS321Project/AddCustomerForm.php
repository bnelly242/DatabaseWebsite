<html>
	<head>
	<title>AddCustomerForm</title>
	<link rel="stylesheet" type="text/css" href="StyleSheet.css">

	</head>
	<body>
		<?php
		include ("Connection.php");
		echo "<br>";
		$fName=$_GET["nameField1"];
		$lname=$_GET["nameField2"];
		$phone=$_GET["phoneField"];
		$street=$_GET["streetField"];
		$town=$_GET["townField"];
		$state=$_GET["stateField"];
		$zip=$_GET["zipField"];
		
		$sql="INSERT INTO Customers($cIDCount, '$lName', '$fName', '$phone', '$street', '$town', '$state', '$zip')"
		if(mysqli_query($con, $sql)){
			echo "insertion successful";
		}
		$cIDCount++;
		?>

	</body>
</html>