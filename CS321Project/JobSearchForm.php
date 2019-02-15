<html>
	<head>
	<title>JobSearchForm</title>
	<link rel="stylesheet" type="text/css" href="StyleSheet.css">

	</head>
	<body>
		<?php
		include ("Connection.php");
		$stmt = $dbConnection->prepare('SELECT * FROM employees WHERE name = ?');
		$stmt->bind_param('s', $name);
		$column=$_GET["column"];
		$info=$_GET["infoField"];
		echo '<br>';
		$result=mysqli_query($con, "Select * From Job Where '$column' like '$info'");
		echo " <center> <table border='1'> ";
		echo "<tr> <th> Job ID </th> <th> Street </th> <th> Town</th> <th> State</th>  <th> Zip</th> <th> Customer ID</th> <th> Cost</th> <th> Start Date</th> <th> Description</th></tr>";
		while ( $row = mysqli_fetch_array ($result) ) {
			echo '<tr>';
			echo '<td>'.$row["jobID"].'</td>';
			echo '<td>'.$row["jStreet"].'</td>';
			echo '<td>'.$row["jTown"].'</td>';
			echo '<td>'.$row["jState"].'</td>';
			echo '<td>'.$row["jZip"].'</td>';
			echo '<td>'.$row["cID"].'</td>';
			echo '<td>'.$row["cost"].'</td>';
			echo '<td>'.$row["startDate"].'</td>';
			echo '<td>'.$row["Description"].'</td>';
			echo '</tr>';
		}
		?>

	</body>
</html>