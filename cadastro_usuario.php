<?php
	session_start();
	if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['login']) == true))
	{
		include "menu_nao_cadastrados.inc";
	}else
	{
		include "menu_cadastrados.inc";
		header("location:home.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastre-se</title>
	<link rel="stylesheet" type="text/css" href="estilo_cad.css">
</head>
<body>
	<?php
		if(isset($_GET['erro']))
		{
			print "
			<style>
				.erroc{font-family:verdana;color:red; width:600px; }
				#erros_cad{
					position: absolute;
 					top: 450px; 
 					width:600px; 
 					height:250px;  
 					left:350px;
 					border-radius: 10px 30px;
 					}
 				#el05 {border:2px dotted black} /* Border width, style and colour */	

			</style>";
			$se_err=$_GET['se'];
			$em_err=$_GET['em'];
			$nick_err=$_GET['nick'];
			print "<div id='erros_cad'>
			<fieldset class='erroc' id='el05'>
				<legend>Erros no cadastro</legend>
				$se_err</br>$em_err</br>$nick_err	

			</fieldset></div>";
			
			
		}
	?>

	<div id='box2'>
		<div id='cad'>
			CADASTRE-SE			
		</div>
		<div id='form_cad'>
			<form class='form1' method="POST" action='recebe.php'>
				<tr>
					<label>Nome:</label>
					<input type="text" name="nome" required>				
				</tr>
				<tr>
					<label>Sobrenome:</label>
					<input type="text" name="sobrenome" required>				
				</tr>
				<tr>
					<br><br><label>Email:</label>
					<input type="email" name="email" required>				
				</tr>
				<tr>
					<label>Senha:</label>
					<input type="password" name="senha" required>				
				</tr>
				<tr>
					<br><br><label>Nickname:</label>
					<input type="text" name="nickname" size='10' required>				
				</tr>
				
				<tr>
					<td>
						<label>Gênero:</label>
						<select name='genero'>
							<option value='M'>Masculino</option>
							<option value='F'>Feminino</option>
							<option value='O'>Outro</option>
						</select>
					</td>
				</tr>

				<tr>
					<td><input type="submit" value="CADASTRAR"><td>
				</tr>
				
			</form>
		</div>
	</div>
</body>
</html>