<?php include("../connection/connection.php"); 
	if($_REQUEST['groupName'] != ""){
		$chosenGroup = $_REQUEST['groupName'];
		$q = "SELECT * FROM `groups` WHERE `name` = '$chosenGroup'";
		$result = mysqli_query($connection,$q);
		$data = mysqli_fetch_array($result);

		if(!$data)
			echo "<li>Некорректный логин.</li>";
	}
	
?>
