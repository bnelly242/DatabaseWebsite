<html>
	<head>
	<title>EmployeeSearchForm</title>
	<link rel="stylesheet" type="text/css" href="StyleSheet.css">

	</head>
	<body>
		<?php
			include ("Connection.php");
			echo "<br>";
			$column=$_GET["column"];
			$info=$_GET["infoField"];
			$sql="Select * From Employee Where $column like $info";
			if(mysqli_query($con, $sql)){
			
			}
			
		?>

	</body>
</html>