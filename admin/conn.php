<?php 
//error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$database = "srms_db";

$con = mysqli_connect($servername, $username, $password, $database);
if ($con) {
	//echo "Connect to dabase successfull. <br>";
}
else {
	echo "Connect error" . mysqli_error();
}


?>