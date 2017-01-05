<?php

	include("../../connection/connection.php");
	
	$groupName = $_REQUEST["group"];
 	$day= $_REQUEST["day"];
 	$schedule = $_REQUEST["schedule"];

	$q = "SELECT `groupName` FROM `schedule` WHERE  `groupName` = '$groupName'";
	$result = mysqli_query($connection,$q);
	$data = mysqli_fetch_array($result);

	if(isset($data['groupName']))
		$q = "UPDATE `schedule` SET  `$day` = '$schedule' WHERE `groupName` = '$groupName'";
	else
		$q = "INSERT INTO `schedule` (`groupName`, `$day`) VALUES ('$groupName', '$schedule')";

	mysqli_query($connection,$q);
	header("Location: ../../content/schedule.php");

?>