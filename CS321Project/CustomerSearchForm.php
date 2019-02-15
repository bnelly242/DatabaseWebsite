<html>
	<head>
	<title>CustomerSearchForm</title>
	<link rel="stylesheet" type="text/css" href="StyleSheet.css">

	</head>
	<body>
		<div id="header">
			<h1 id="headertext">Restoration Roofing Co., Inc.</h1>
		</div>
		<h3 id="title">Customer Search Page</h3>
		<?php
		include ("Connection.php");
		$column=$_GET["column"];
		$info=$_GET["infoField"];
		
		$result=mysqli_query($con, "Select * From Customer Where $column like $info");
		?>

	</body>
</html>