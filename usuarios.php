<?php
	interface interface_user
	{
		function cadastro_bd();
		function comentar();
		function criar_topico();
		function resp_comentario();
		function vizu_perfil();
		function alterar_perfil();
		function del_conta();
		function recuperar_senha();
	}

	abstract class usuario_abs implements interface_user
	{
		private $nome, $sobrenome, $email, $senha, $nick, $genero;
		function cadastro_bd()
		{
			
		}
		function comentar(){}
		function criar_topico(){}
		function resp_comentario(){}
		function vizu_perfil(){}
		function alterar_perfil(){}
		function del_conta(){}
		function recuperar_senha(){}
	}

	class usuario extends usuario_abs
	{
		function usuario($n, $s, $em, $se, $ni, $gen)
		{
			$this->nome=$n;
			$this->sobrenome=$s;
			$this->email=$em;
			$this->nick=$ni;
			$this->senha=$se;
			$this->genero=$gen;
			include "conexao.inc";
			$sql = "INSERT INTO usuarios (nome, sobrenome, email, senha, nickname, gen) 
			values('$this->nome', '$this->sobrenome', '$this->email', '$this->senha', '$this->nick', '$this->genero')";
			$consulta=mysqli_query($con, $sql);


		}
	}

	
?>