<?php include("../connection/connection.php"); 
	if($_REQUEST['groupName'] != "" && $_REQUEST['password'] != ""){
		$chosenGroup = $_REQUEST['groupName'];
		$password = $_REQUEST['password'];
		$q = "SELECT * FROM `groups` WHERE `name` = '$chosenGroup' AND `password` = '$password'";
		$result = mysqli_query($connection,$q);
		$data = mysqli_fetch_array($result);

		if(!$data)
			echo "Неверное имя пользователя или пароль.";
	}
?>
