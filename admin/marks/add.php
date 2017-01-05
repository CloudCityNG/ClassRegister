<?php

	include("../../connection/connection.php");
	
	$studentName = $_REQUEST["student"];
	$mark = $_REQUEST["mark"];
	$groupName = $_REQUEST["group"];
 
	$q = "SELECT `studentName` FROM `marks` WHERE  `studentName` = '$studentName'";
	$result = mysqli_query($connection,$q);
	$data = mysqli_fetch_array($result);

	if(isset($data['studentName']))
		$q = "UPDATE `marks` SET  `marks` = CONCAT(`marks`, ' ', '$mark') WHERE `studentName` = '$studentName' and `groupName` = '$groupName'";

	else
		$q = "INSERT INTO `marks` (`groupName`, `studentName`, `marks`) VALUES ('$groupName', '$studentName', '$mark')";

	mysqli_query($connection,$q);
	header("Location: ../../content/marks.php");
	
?>