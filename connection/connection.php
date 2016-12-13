<?php
	$connection = mysqli_connect("localhost", "root","","classRegister");
	if(!$connection){
		echo "Ошибка при подключении к базе данных.";
		exit();
	}
	session_start();
 ?>