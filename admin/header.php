<?php 
include 'conn.php';

session_start();
if (!isset($_SESSION['loginUsername'])) {
	header("location:http://localhost/srms/index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Result Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"/>
 
       <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
       <script type="text/javascript" 
               src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

       <script src="index.js"></script>
	
</head>
<body>
	<div class="navbar">
		<a href="index.php">HOME</a>
		<a href="class.php">CLASS</a>
		<a href="subject.php">SUBJECT</a>
		<a href="students.php">STUDENTS</a>
		<a href="result.php">RESULT</a>
		<a href="logout.php">LOGOUT</a>
	</div>

