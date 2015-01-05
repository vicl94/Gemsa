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
		<h1>Iniciar Sesion</h1>
		<div class="login-form">
			<form action="" method="POST">
				<input class="form-control" name="email" type="email">
				<input class="form-control" name="password" type="password">
				<input class="btn btn-info" type="submit" value="Entrar">
			</form>
		</div>
	</div>
	{{HTML::script('assets/js/jquery-1.11.1.min.js')}}
	{{HTML::script('assets/js/bootstrap.min.js')}}
</body>
</html>
