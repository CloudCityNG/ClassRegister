<?php 
	include("connection/connection.php"); 
 	if(!isset($_SESSION['logged_user']))
 		header("Location: log/authorization");
 	else
 		header("Location: content/schedule");
 ?>


