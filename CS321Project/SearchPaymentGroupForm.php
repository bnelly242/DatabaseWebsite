<html>
	<head>
	<title>PaymentSearchForm</title>
	<link rel="stylesheet" type="text/css" href="StyleSheet.css">

	</head>
	<body>
		<?php
		include ("Connection.php");
		
		$group=$_GET["group"];
		$amount=$_GET["amount"];
		$sql= "Select '$group' From Payments Group by '$group' Having avg('amount') > '$amount'";
		$result=mysqli_query($con, $sql);
		echo '<br>';
		echo " <center> <table border='1'> ";
		echo "<tr> <th> Customer ID </th> <th> Job ID </th> <th> PayDate</th> <th> Amount</th> </tr>";
		while ( $row = mysqli_fetch_array ($result) ) {
			echo '<tr>';
			echo '<td>'.$row["cID"].'</td>';
			echo '<td>'.$row["jobID"].'</td>';
			echo '<td>'.$row["paydate"].'</td>';
			echo '<td>'.$row["amount"].'</td>';
			echo '</tr>';
		}
		?>

	</body>
</html>