<?php
	session_start();
	include "conexao.inc";
	//LOGIN DE USUARIOS
	
	$email_l=$_POST['email_log'];
	$senha_l=$_POST['senha_log'];
	$ver="SELECT * FROM usuarios WHERE email='$email_l' and senha='$senha_l'";
	$verificando=mysqli_query($con, $ver);
	$linhas=mysqli_num_rows($verificando);
	if($linhas > 0 )
	{
		$_SESSION['login'] = $email_l;
		$_SESSION['senha'] = $senha_l;
		header('location:home.php');
	}
	else
	{
  		unset ($_SESSION['login']);
  		unset ($_SESSION['senha']);
 	    header('location:home.php');
   	}	

?>