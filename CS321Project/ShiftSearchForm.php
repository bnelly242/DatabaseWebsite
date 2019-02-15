<html>
	<head>
	<title>ShiftSearchForm</title>
	<link rel="stylesheet" type="text/css" href="StyleSheet.css">

	</head>
	<body>
		<?php
		include ("Connection.php");
		$column=$_GET["column"];
		$info=$_GET["infoField"];
		$sql="Select * From Shifts Group by '$column'";
		$result=mysqli_query($con, $sql);
		echo '<br>';
		echo " <center> <table border='1'> ";
		echo "<tr> <th> Employee ID </th> <th> Job ID </th> <th> WorkDate</th> <th> WorkTime</th> </tr>";
		while ( $row = mysqli_fetch_array ($result) ) {
			echo '<tr>';
			echo '<td>'.$row["eID"].'</td>';
			echo '<td>'.$row["jobID"].'</td>';
			echo '<td>'.$row["workdate"].'</td>';
			echo '<td>'.$row["worktime"].'</td>';
			echo '</tr>';
		}
		?>

	</body>
</html>