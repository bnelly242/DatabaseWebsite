<html>
	<head>
	<title>AddCustomerForm</title>
	<link rel="stylesheet" type="text/css" href="StyleSheet.css">

	</head>
	<body>
		<?php
		include ("Connection.php");
		echo "<br>";
		$eID=$_GET["idField"];
		
		$sql="Delete From Employees Where eID='$eId'"
		if(mysqli_query($con, $sql)){
			echo "removed from table";
		}
		?>

	</body>
</html>