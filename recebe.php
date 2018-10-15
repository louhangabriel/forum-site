<?php
	include "usuarios.php";
	include "conexao.inc";

	//REGISTRANDO USUARIOS
	$nome_f=$_POST['nome'];
	$sobrenome_f=$_POST['sobrenome'];
	$email_f=$_POST['email'];
	$nick_f=$_POST['nickname'];
	$senha_f=$_POST['senha'];
	$tam=strlen($senha_f);
	$gen_f=$_POST['genero'];
	//print $tam;

	//testando dados no bd
	$sql="SELECT * FROM usuarios WHERE email='$email_f'";
	$consulta=mysqli_query($con, $sql);
	$linhas=mysqli_affected_rows($con);
	//nick
	$sql2="SELECT * FROM usuarios WHERE nickname='$nick_f'";
	$consulta2=mysqli_query($con, $sql2);
	$linhas2=mysqli_affected_rows($con);
	

	//print $linhas;
	if($linhas2 > 0 || $linhas > 0 || $tam < 6 )
	{
		if($linhas2>0)
			{
				$nick_cad="nickname ja cadastrado.";
			}
		if($linhas > 0)
		{
			$email_cad="Email inserido esta sendo usado por outro usuario.</br>";
		}
		if ($tam < 6)
		{
			$senha_cad="</br>Insira uma senha com mais de 6 digitos no minimo.</br>";
		}		
		header("location:cadastro_usuario.php?erro='er'&nick=$nick_cad&em=$email_cad&se=$senha_cad",TRUE, 307);
	}

	
	elseif($tam >= 6)
	{
		$user= new usuario($nome_f, $sobrenome_f, $email_f, $senha_f, $nick_f, $gen_f);	
		print "usuario cadastrado";
	}

	

?>