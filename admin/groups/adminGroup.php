<div class="card">

	<div class="card-header" role="tab" id="headingOne">
		<h5 class="mb-0">
			<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			    Добавить Группу
			</a>
		</h5>
	</div>
	
	<div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
		<div class="card-block">
			<form class = "col-md-6" action="groups/add.php">
				<div class="input-group ">
			 		<input type="text" name = "group" class="form-control" placeholder="Введите название новой группы" aria-describedby="basic-addon2">
				</div>
				<div class="input-group">
			 		<input type="text" name = "password" class="form-control" placeholder="Введите пароль для новой группы" aria-describedby="basic-addon2">
				</div>
				<br>
				<input type="submit" name = "submit" value = "Подтвердить" class = "btn btn-primary" >				
			</form>
		</div>
	</div>

</div>