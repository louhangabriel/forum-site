<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="menu_nn_cadastrado.css">
</head>
<body>
	<div id='menu'>	
	<a href="cadastro_usuario.php"> Cadastrar</a>
	<center>
	<h2>MENU NAO CADASTRADOS</h2>
	<form method="POST" action='login.php'>
		<input type="email" name="email_log" value="email">
		<input type="password" name="senha_log">
		<input type="submit" value="login">
	</form>
	</center>
	</div>	
</body>
</html>