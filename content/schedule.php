<?php 
	include("../connection/connection.php"); 
	include("../template/header.php");
	
	if(isset($_REQUEST["group"]))
		$chosenGroup = $_REQUEST["group"];
	else
		$chosenGroup = $_SESSION['logged_user'];
	$q = "SELECT * FROM `schedule` WHERE `groupName` = '$chosenGroup'";
	$result = mysqli_query($connection,$q);
	$data = mysqli_fetch_array($result);

	$monday = explode("\n", $data["monday"]);
	$tuesday = explode("\n", $data["tuesday"]);
	$wednesday = explode("\n", $data["wednesday"]);
	$thursday = explode("\n", $data["thursday"]);
	$friday = explode("\n", $data["friday"]);
?>
<!-- Content -->
<div class = "content">

	<h1 class="text-xs-center"><i class="fa fa-calendar" aria-hidden="true"></i> Расписание группы <?php echo $data["groupName"];?></h1>
	<br>

	<?php 
		if($_SESSION['logged_user'] == "admin"){
	?>
		<form  class="text-xs-center" action = "schedule.php">  
			<select  name="group" class="custom-select" >
				<option   selected disabled>Выберите группу</option>
					<?php
						$adminQ = "SELECT * FROM `groups` WHERE `name` != 'admin' ORDER BY `name`";
						$adminResult = mysqli_query($connection,$adminQ);
						$adminData = mysqli_fetch_array($adminResult);
						do{
					?>
						<option value="<?php echo $adminData["name"]?>"><?php echo $adminData["name"] ?></option>
					<?php
						}while($adminData = mysqli_fetch_array($adminResult));
					?>
			</select>
			<input type="submit" class = "btn btn-primary" value = "Подтвердить"> 
		</form>
		<br>
	<?php
		}
		
		if(isset($data["groupName"])){
	?>
	<div class = "row" >
		<div class = "col-md-3">
		</div> 	
		<ul class="list-group col-md-6">
			
			<li class="list-group-item list-group-item-info">
				Понедельник
			</li>
			<?php for($i = 0; $i < count($monday); $i++){
				?>
			
			<li class="list-group-item">
				<?php
					echo $monday[$i];
				?>
			</li>

			<?php 
				}
			?>
			
			<li class="list-group-item list-group-item-info">
				Вторник
			</li>
			
			<?php 
				for($i = 0; $i < count($tuesday); $i++){
			?>
				<li class="list-group-item">
					<?php
						echo $tuesday[$i];
					?>
				</li>
			<?php 
				}
			?>
			
			<li class="list-group-item list-group-item-info">
				Среда
			</li>
			<?php 
				for($i = 0; $i < count($wednesday); $i++){
			?>
					<li class="list-group-item">
						<?php
						  	echo $wednesday[$i];
						?>
					</li>
			<?php 
				}
			?>
			
			<li class="list-group-item list-group-item-info">
				Четверг
			</li>
			<?php 
				for($i = 0; $i < count($thursday); $i++){
			?>
					<li class="list-group-item">
						<?php
						  	echo $thursday[$i];
						?>
					</li>
			<?php 
				}
			?>

			<li class="list-group-item list-group-item-info">
				Пятница
			</li>
			<?php 
				for($i = 0; $i < count($friday); $i++){
			?>
					<li class="list-group-item">
						<?php
						  	echo $friday[$i];
						?>
					</li>
			<?php 
				}
			?>	
		</ul>
	</div>
	<?php
		}
		else
			echo "<p class = 'text-xs-center'>Расписание для выбранной вами группы ещё не вывешено. Проверьте позже</p>"; 
		?>
	</div>
	<!-- Content End -->

<?php include("../template/footer.php"); ?>