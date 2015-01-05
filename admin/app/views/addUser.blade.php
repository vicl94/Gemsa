<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	{{HTML::style('assets/css/bootstrap.css')}}
	{{HTML::style('assets/css/custom.css')}}
</head>
<body>

	<div class="container">
		<h1>Agregar Usuario</h1><br>
		<div class="login-form">
			<form action="" method="POST" class="col-md-4">
			
				<input class="form-control" name="txtName" type="text" placeholder="Nombre" required><br>
				<input class="form-control" name="txtEmail" type="email" placeholder="Email" required><br>
				<input class="form-control" name="txtPassword" type="password" placeholder="Contraseña" required><br>
				<select class="form-control" name="cbType" >
					<option value="1">Administrador</option>
					<option value="2">Usuario Comun</option>
				</select><br>
				<input class="btn btn-info col-md-12" type="submit" value="Agregar">

			</form>
		</div>
	</div>
	{{HTML::script('assets/js/jquery-1.11.1.min.js')}}
	{{HTML::script('assets/js/bootstrap.min.js')}}
</body>
</html>
