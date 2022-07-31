<?php 
session_start();
if (session_destroy()) {
	header('location:http://localhost/srms/index.php');
}

?>