<?php
	include("../connection/connection.php");
	unset($_SESSION['logged_user']);
	header('Location: ../index.php');
?>