<div class="card">

	<div class="card-header" role="tab" id="headingThree">
		<h5 class="mb-0">
			<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
			    Добавить Расписание
			</a>
		</h5>
	</div>

	<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
		<div class="card-block">
			<form action="schedule/add.php" class = "col-md-6">
				<select  name="group" class="custom-select col-md-12" >
			    	<option   selected disabled>Выберите группу</option>
			    	<?php 
						$q = "SELECT * FROM `groups` WHERE `name` != 'admin' ORDER BY `name` ";
						$result = mysqli_query($connection,$q);
						$data = mysqli_fetch_array($result);
			    		
			    		do{
			    	?>
					<option   value="<?php echo $data['name']; ?>"><?php echo $data['name']; ?></option>
						<?php
							}while($data = mysqli_fetch_array($result));
						?>
			   	</select>

			   	<select  name="day" class="custom-select col-md-12" >
			    	<option   selected disabled>Выберите день недели</option>
					<option   value="monday">Понедельник</option>
					<option   value="tuesday">Вторник</option>
					<option   value="wednesday">Среда</option>
					<option   value="thursday">Четверг</option>
					<option   value="friday">Пятница</option>
			   	</select>
				<div class="input-group ">
				 	<textarea name = "schedule" class="form-control" placeholder="Введите новое расписание в формате #ленты. пробел Название ленты" aria-describedby="basic-addon2" required></textarea>
				</div>
				<br>
				
				<input type="submit" name = "addMark" value = "Внести расписание" class = "btn btn-primary" >				
			</form>		      
		</div>
	</div>

</div>