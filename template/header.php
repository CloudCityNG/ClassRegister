<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
	<!-- Font Awesome CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

	<style>	
		.container {
			margin-top: 10px;				
		}
		.jumbotron {
			margin-top: 40px;	
			padding: 15px;	
			margin-bottom: 50px	
		}
		html{
			height: 100%;
			zoom: 90%;
		}
		body {
		  	height: 98%;
		  	zoom: 90%;
		}
		body > .container {
	 		display: flex;
	  		flex-direction: column;
	  		height: 100%;
		}
		.content {
	  		flex: 1 0 auto;
		}
		footer {
			text-align: center;
			font-style:  italic;
	  		flex: 0 0 auto;
		}
	</style>
	
</head>
<body >
	<div class="container">
		<!-- Navigation Menu Start -->
		<?php 
		
			function active($page){
				if(strpos($_SERVER["SCRIPT_NAME"], $page) !== false){
					echo "active";			
				}
			}
		
		?>
		<ul class="nav nav-pills">
			<?php 
				if(!isset($_SESSION['logged_user'])){
			?>
			<li class="nav-item">
				<a class="nav-link <?php active("index.php"); ?>" href="../index.php"><i class="fa fa-home" aria-hidden="true"></i> Главная</a>
			</li>
			<?php 
				}
				if(isset($_SESSION['logged_user'])){
			?>
			<li class="nav-item">
				<a class="nav-link <?php active("schedule.php"); ?>" href="../content/schedule.php"><i class="fa fa-calendar" aria-hidden="true"></i> Расписание</a>
			</li>
			<li class="nav-item">
				<a class="nav-link  <?php active("attendance.php");  ?>" href="../content/attendance.php"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Посещаемость</a>
			</li>
			<li class="nav-item">
				<a class="nav-link  <?php active("marks.php");  ?>" href="../content/marks.php"><i class="fa fa-check-square" aria-hidden="true"></i> Оценки</a>
			</li>
			<?php if($_SESSION['logged_user'] === "admin"){ ?>
			<li class="nav-item">
				<a class="nav-link  <?php active("admin.php");  ?>" href="../admin/admin.php"><i class="fa fa-pencil" aria-hidden="true"></i> Администрирование</a>
			</li>
			<?php }
			?>
			<li class="nav-item float-xs-right ">
				<a class="nav-link " href="../log/logout.php"> Выход из <?php echo $_SESSION['logged_user']; ?> <i class="fa fa-sign-out" aria-hidden="true"></i></a>
			</li>
			<?php
					}
			 ?>
		</ul>
		<!-- Navigation Menu End -->
		<!-- Jumbotron -->
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h1 class="display-4"><i class="fa fa-book" aria-hidden="true"></i> Классный журнал НГУ</h1>
				<p class="lead">С помощью данного журнала вы можете проверить посещаемость студентов, их успеваемость, а также просмотреть расписание для групп.</p>
			</div>
		</div>		
		<!-- Jumbotron End -->
		