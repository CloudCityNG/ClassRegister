<?php 
	include("../connection/connection.php");
	include("../template/header.php");

	if(isset($_REQUEST["group"]))
		$chosenGroup = $_REQUEST["group"];
	else
		$chosenGroup = $_SESSION['logged_user'];

	$q = "SELECT * FROM `marks` WHERE `groupName` = '$chosenGroup' ORDER BY `studentName`";
	$result = mysqli_query($connection,$q);
	$data = mysqli_fetch_array($result)
?>

<!-- Content -->
<div class = "content">
	<h1 class="text-xs-center"><i class="fa fa-check-square" aria-hidden="true"></i> Отметки группы <?php echo $data["groupName"];?></h1>
	<br>

	<div class = "row" >
		<div class = "col-xs-3">
		</div>

		<div class = "col-xs-6">
			<?php 
				if($_SESSION['logged_user'] == "admin"){
			?>				
			<form  class="text-xs-center" action = "marks.php">  
				<select  name="group" class="custom-select" >
					<option   selected disabled>Выберите группу</option>';
					<?php		
						$adminQ = "SELECT * FROM `groups` WHERE `name` != 'admin' ORDER BY `name`";
						$adminResult = mysqli_query($connection,$adminQ);
						$adminData = mysqli_fetch_array($adminResult);
	    	
						do{
					?>
						<option  value="<?php echo $adminData["name"];?>"><?php echo $adminData["name"];?></option>
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
			<ul class="list-group">
				<li class="list-group-item list-group-item-info">
					Студент
					<span class="float-xs-right ">Отметки</span>
				</li>
				<?php 
					do{
						$marks = explode(" ", $data["marks"]);
				?>
				<li class="list-group-item">
					<?php
					  	echo $data["studentName"];
					  	for($i = count($marks)-1; $i >= 0; $i--){
					?>
					<span class="tag  tag-pill float-xs-right 	
																<?php 
																	if($marks[$i] < 3)
																		echo "tag-danger";
																	else if($marks[$i] > 3)
																		echo "tag-success";
																	else
																		echo "tag-warning";
																?> ">
						<?php 	
							echo $marks[$i];
						?>
					</span>
					<?php 
						}
					?>
				</li>
					<?php 
					 	}while($data = mysqli_fetch_array($result));
					?>
			</ul>
			<?php
				}else
					echo "<br><p class = 'text-xs-center'>Отметки для выбранной вами группы ещё не выставлены.</p>";
			?>
		</div>
	</div>
</div>
<!-- Content End -->

<?php include("../template/footer.php"); ?>