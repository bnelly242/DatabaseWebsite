<html>
	<head>
	<title>UpdatePayrollForm</title>
	<link rel="stylesheet" type="text/css" href="StyleSheet.css">

	</head>
	<body>
		<?php
		include ("Connection.php");
		echo "<br>";
		$eID=$_GET["selectionFeild"];
		$pay=$_GET["Amount"];
		
		$sql="UPDATE Job SET Hourly_Rate='$pay' WHERE eID='$eID'";
		if(mysqli_query($con, $sql)){
			echo "update complete";
		}
		?>

	</body>
</html>