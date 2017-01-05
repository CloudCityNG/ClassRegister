<?php include("../layouts/header.php"); ?>
<!-- Content -->
<div class = "content">	
	<h1 class = "text-xs-center" >
		<i class="fa fa-sign-in" aria-hidden="true"></i> 
		Авторизация
	</h1>
	<br>
	<div class = "row">
		<div class = "col-xs-4">
		</div>
		<form class = "col-xs-4" action="login.php">
			<div class="input-group ">
			 	<input type="text" name = "groupName" class="form-control" placeholder="Логин" aria-describedby="basic-addon2">
			</div>
			<div class="input-group">
			 	 <input type="password" name = "password" class="form-control" placeholder="Пароль" aria-describedby="basic-addon2">
			</div>
			<br>
			<input type="submit" name = "submit" value="Войти" class = "btn btn-primary" >				
		</form>
	</div>
</div>
<!-- Content End -->
<?php include("../layouts/footer.php"); ?>