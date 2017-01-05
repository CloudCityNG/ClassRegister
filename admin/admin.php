<?php 
	include("../connection/connection.php"); 
	include("../layouts/header.php"); 
?>

	<!-- Content -->
	<div class = "content">
		<h1 class="text-xs-center"><i class="fa fa-pencil" aria-hidden="true"></i> Редактирование сайта </h1>
		<br>

		<div class = "row">
			<div class = "col-xs-2">
			</div>
			<div class ="col-xs-8" id="accordion" role="tablist" aria-multiselectable="true">
				<?php 
					include("groups/adminGroup.php"); 
					include("marks/adminMark.php"); 
					include("schedule/adminSchedule.php"); 
					include("attendance/adminAttendance.php"); 
				?>
			</div>
		</div>
	</div>
	<!-- Content End -->

<?php 
	include("../layouts/footer.php"); 
?>



