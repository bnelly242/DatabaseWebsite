<html>
	<head>
	<title>AddEmployeeForm</title>
	<link rel="stylesheet" type="text/css" href="StyleSheet.css">

	</head>
	<body>
		<?php
		include ("Connection.php");
		echo "<br>";
			$efname=$_GET["nameField1"];
			$elname=$_GET["nameField2"];
			$ephone=$_GET["phoneField"];
			$eaddress1=$_GET["streetField"];
			$eaddress2=$_GET["townField"];
			$eaddress4=$_GET["zipField"];
			$eaddress3=$_GET["stateField"];
			$epay=$_GET["Amount"];

            $sql=("INSERT INTO Employee VALUES ($eIDCount, '$efname', '$elname', '$ephone','$eaddress1', '$eaddress2', '$eaddress3', '$eaddress4', '$epay')");
           if (mysqli_query($con, $sql)){
            	echo "insert succesful";
			}
			$eIDCount=$eIDCount+1;
		?>

	
	</body>
</html>