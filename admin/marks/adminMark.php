<div class="card">

	<div class="card-header" role="tab" id="headingTwo">
		<h5 class="mb-0">
			<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
			    Добавить Отметку
			</a>
		</h5>
	</div>
	
	<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
		<div class="card-block">
			<form action="marks/add.php" class = "col-md-6">
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
				<div class="input-group ">
				 	<input type="text" name = "student" class="form-control" placeholder="Студент" aria-describedby="basic-addon2" required>
				</div>
				<div class="input-group">
				 	<input type="number" name = "mark" class="form-control" min = "0" max = "5" placeholder="Отметка" aria-describedby="basic-addon2" required>
				</div>
				<br>
				<input type="submit" name = "addMark" value = "Внести отметку" class = "btn btn-primary" >				
			</form>		      
		</div>
	</div>

</div>