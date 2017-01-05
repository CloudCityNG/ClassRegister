<?php

	include("../../connection/connection.php");
	
	$groupName = $_REQUEST["group"];
 	$password = $_REQUEST["password"];

	$q = "SELECT `name` FROM `groups` WHERE  `name` = '$groupName'";
	$result = mysqli_query($connection,$q);
	$data = mysqli_fetch_array($result);

	if(!isset($data['name']))
		$q = "INSERT INTO `groups` (`name`, `password`) VALUES ('$groupName', '$password')";

	mysqli_query($connection,$q);
	header("Location: ../admin.php");
	
?>