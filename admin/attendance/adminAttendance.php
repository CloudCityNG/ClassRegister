<div class="card">

	<div class="card-header" role="tab" id="headingFour">
		<h5 class="mb-0">
			<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
			    Добавить Посещаемость
			</a>
		</h5>
	</div>

	<div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">

		<div class="card-block">

			<form action="attendance/add.php" class = "col-md-6">

				<select  name="group" class="custom-select col-md-12" >
			    	<option   selected disabled>Выберите группу</option>
			    		<?php 
						    $q = "SELECT * FROM `groups` WHERE `name` != 'admin' ORDER BY `name`";
							$result = mysqli_query($connection,$q);
							$data = mysqli_fetch_array($result);

			    			do{
			    		?>
					<option   value="<?php echo $data['name']; ?>"><?php echo $data['name']; ?></option>
						<?php
							}while($data = mysqli_fetch_array($result));
						?>
			   	</select>

				<input type="date" class="form-control" aria-describedby="basic-addon2" name = "date">
				<div class="input-group ">
			 		<input type="text" name = "student" class="form-control" placeholder="Студент" aria-describedby="basic-addon2" required>
				</div>
				<br>

				<fieldset class="form-group">
					<div class="form-check">
						<label class="form-check-label">
						<input type="radio" class="form-check-input" name="attended" id="optionsRadios1" value="1" checked>
							Присутствовал
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
						<input type="radio" class="form-check-input" name="attended" id="optionsRadios2" value="0">
							Отсутствовал
						</label>
					</div>
				</fieldset>

				<input type="submit" name = "addMark" value = "Сохранить" class = "btn btn-primary" >	
							
			</form>	

		</div>

	</div>

</div>