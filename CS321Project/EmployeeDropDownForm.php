<html>
<head>
<title>EmployeeDropDown</title>
<link rel="stylesheet" type="text/css" href="StyleSheet.css">

</head>
<body>
	<div id="header">
		<h1 id="headertext">Restoration Roofing Co., Inc.</h1>
	</div>
	<h3 id="title">EmployeeDropDownForm</h3>
	<?php
	include ("Connection.php");
echo '<br/>'; 
echo '<br/>';

$ID = $_POST['employee'];
echo "The amount of shifts this employee has is:"; 
echo '<br/> <br/>';

$result = mysqli_query($con,"SELECT count(*) FROM Shifts WHERE eID = '$ID';") or die('Could not run query: '. $con->error);

echo $result;


//Close conection
mysqli_close($con); 

?>

</body>

</html>