<?php 
	include("../connection/connection.php"); 
	include("../layouts/header.php");
	
	if(isset( $_REQUEST["date"]))
		$chosenDate = $_REQUEST["date"];
	else
		$chosenDate = date('Y-m-d');
	
	if(isset($_REQUEST["group"]))
		$chosenGroup = $_REQUEST["group"];
	else
		$chosenGroup = $_SESSION['logged_user'];

	$q = "SELECT * FROM `attendance` WHERE `groupName` = '$chosenGroup' AND `date` = '$chosenDate' ORDER BY `studentName`";
	$result = mysqli_query($connection,$q);
	$data = mysqli_fetch_array($result);
?>
<!-- Content -->
<div class = "content">

	<h1 class="text-xs-center"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Посещаемость группы <?php echo $data["groupName"];?></h1>
	<br>

	<div class = "row">
		<div class="col-xs-4"></div>
		<div class="col-xs-4">
			<form>  
			    <input type="date" class="form-control " aria-describedby="basic-addon2" name = "date">
					<?php 
						if($_SESSION['logged_user'] == "admin"){
					?>
						<select  name="group" class="custom-select col-md-12" >
							<option selected disabled>Выберите группу</option>
							<?php
								$adminQ = "SELECT * FROM `groups` WHERE `name` != 'admin' ORDER BY `name`";
								$adminResult = mysqli_query($connection,$adminQ);
								$adminData = mysqli_fetch_array($adminResult);

							  	do{
							?>
								<option  value="<?php echo $adminData['name'];?>"><?php echo $adminData["name"];?></option>
							<?php
								}while($adminData = mysqli_fetch_array($adminResult));
							?>
						</select><br><br>
					<?php
						}
					?>
				<br>
			    <input type="submit" class = "btn btn-primary " value = "Подтвердить">
			</form>
		</div>
	</div>

	<?php if(isset($data)){?>
		<br>
		<div class = "row">
			<div class = "col-xs-3">
			</div>		

			<ul class="list-group col-md-6">
				<li class="list-group-item list-group-item-info">
					Дата:
					<span class="tag tag-primary tag-pill float-xs-right ">
						<?php 
							$date = $data["date"];	
					  		echo $date;
						?>
					</span>
				</li>
				<?php 
					do{
						$attended = $data["attended"];
				?>
				
				<li class="list-group-item">
					<?php
					  	echo $data["studentName"];
					?>
					<span class="tag  tag-pill float-xs-right 	
															  	<?php 
																	if($attended)
																		echo "tag-success fa fa-check";
																	else
																		echo "tag-danger fa fa-close";
																?> ">
					</span>
				</li>
				<?php 
					}while($data = mysqli_fetch_array($result));
				?>
			</ul>
		</div>
		<?php 
			}
			else{
		?>
				<br><br><br>
				<p class = 'text-xs-center'>Для выбранной вами даты (<?php echo $chosenDate?>) информация отсутствует, пожалуйста, выберите другую.</p>
		<?php
			}
		?>
</div>
<!-- Content End -->
<?php include("../layouts/footer.php"); ?>