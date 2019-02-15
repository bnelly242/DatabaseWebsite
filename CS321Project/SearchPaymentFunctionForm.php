<html>
	<head>
	<title>PaymentSearchForm</title>
	<link rel="stylesheet" type="text/css" href="StyleSheet.css">

	</head>
	<body>
		<?php
		include ("Connection.php");
		$function=$_GET["function"];
		$sql= "Select '$function'('amount') From Payments";
		$result=mysqli_query($con, $sql);
		echo '<br>';
		echo "'$function' is $result";
		?>

	</body>
</html>