<?php

	include("../../connection/connection.php");
	
	$groupName = $_REQUEST["group"];
 	$date= $_REQUEST["date"];
 	$studentName = $_REQUEST["student"];
 	$attended = $_REQUEST["attended"];

	$q = "SELECT `studentName` FROM `attendance` WHERE  `studentName` = '$studentName' and `groupName` = '$groupName' and `date` = '$date'";
	$result = mysqli_query($connection,$q);
	$data = mysqli_fetch_array($result);

	if(isset($data['studentName']))
		$q = "UPDATE `attendance` SET  `attended` = '$attended' WHERE `groupName` = '$groupName' and `studentName` = '$studentName' and `date` = '$date'";
	else
		$q = "INSERT INTO `attendance` (`groupName`, `studentName`, `date`, `attended`) VALUES ('$groupName', '$studentName', '$date', '$attended')";

	mysqli_query($connection,$q);
	
	header("Location: ../../content/attendance.php");
?>