<html>
	<head>
	<title>EmployeeDropDown</title>
	<link rel="stylesheet" type="text/css" href="StyleSheet.css">

	</head>
	<body>
		<div id="header">
			<h1 id="headertext">Restoration Roofing Co., Inc.</h1>
		</div>
		<h3 id="title">EmployeeDropDown</h3>
		<?php
		include ("Connection.php");

			//Execute query
			$result = mysqli_query($con,"SELECT eID FROM Employee;") or die('Could not run query: '.mysqli_error($con));

			//incorporate into drop down list
			echo ' <form method="post" action="EmployeeDropDownForm.php"> ';
			echo '  <p>Choose employee:  ';

			echo " <select name='employee'> ";
			while ( $row = mysqli_fetch_array ($result) ) {

				echo '<option value="'.$row["eID"].'">'.$row["eID"].'</option>';
			}
			echo '</select>    </br>';
			echo '<input type="submit" name="Submit" value="Submit"> ';
			echo '</p>';

			//Close conection
			mysqli_close($con);
			?>

	</body>
</html>