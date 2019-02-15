<?php
//db.php
$db_location = "localhost";
$db_username = "root";
$db_password = "root";
$db_database = "construction";
//$db_port = 80;

$eIDCount = 70006;
$jIDCount = 90007;
$cIDCount = 7;


$con= mysqli_connect($db_location, $db_username, $db_password) or die ("Error: Could not connect to MySQL Server". mysqli_connect_error());

$db = mysqli_select_db($con, $db_database) or die("Error: Could not open database");

if ($con)
	echo "DB ".$db_database. " is connected and active";

?>
