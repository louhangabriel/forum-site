<?php
	session_start();
	include "conexao.inc";
	if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['login']) == true))
	{
		include "menu_nao_cadastrados.inc";
		header("location:home.php");
	}else
	{
		include "menu_cadastrados.inc";
	}
	$login=$_SESSION['login'];
	//session_destroy();

	$sql="SELECT * FROM usuarios WHERE email='$login'";
			$consul=mysqli_query($con, $sql);
			$linhas=mysqli_num_rows($consul);
			while ($reg=mysqli_fetch_row($consul)) {
				$id_p=$reg[0];
				$nome_p=$reg[1];
				$sobrenome_p=$reg[2];
				$email_p=$reg[3];
				$nick_p=$reg[5];
				$genero_p=$reg[6];
				$arquivo_p=$reg[7];
				}
				
?>
<!DOCTYPE html>
<html>
<head>
	<title>Perfil</title>
	<link rel="stylesheet" type="text/css" href="estilo_perfil.css">
	<link rel="stylesheet" type="text/css" href="perfil_style">
</head>
<body>
	<h1 class="detalhe">DETALHES DA CONTA</h1>
	<style type="text/css">
	
			.detalhe
			{
				position: relative; top:160px; left: 350px; font-family: verdana; 
				-webkit-text-stroke-width: 2px;
				-webkit-text-stroke-color: #000;
				font-size: 3em; color: #e77542;
				 font-weight: bolder;
			}
			#redonda1
			{	z-index: 10;
				position: absolute;
			 	top: -200px; 
			 	width:200px; 
			 	height:200px; 
			 	  
			 	left:130px;
			 	border-radius: 50%;
			 }
			 #redonda
			{	z-index: 10;
				position: absolute;
			 	top: 10px; 
			 	width:200px; 
			 	height:200px; 
			 	background-color:#e77542;  
			 	left:-17px;
			 	border-radius: 50%;
			 }

			 .oi{position: relative; top: 10px; left:-8px; width: 200px; height: 175px; }
			 .oi2{ width: 200px; height: 175px; border-radius: 50%}
			
			#img
			{	
				font-family: verdana;
				position: absolute;
			 	top: 210px; 
			 	left:210px; z-index: 5}

			
			#info
			{
				position:relative; top: 130px	
			} 
			.sb{position: relative; left: 100px; color:#ffffff;}	
			.idd{position: relative; top:40px; color:#ffffff;}
			.emm{position: relative; top:40px; left: 100px; color:#ffffff;}
			.gg{position: relative; top:95px; left: 150px; color:#ffffff;}
			.nn{position: relative; top:95px; color:#ffffff;}
			.no{position: relative;  color:#ffffff;}
			#box
			{
				position: absolute;
			 	top: 250px; 
			 	width:900px; 
			 	height:700px; 
			 	background-color:#323232;  
			 	left:220px;}
			}

			
		}				
			}
		</style>
	<div id='box'>
		<div id='img'>
			<label><center>Alterar foto de perfil</center></label>
			<center><form method="POST" action="perfil.php" enctype="multipart/form-data">
			</br><input type="file" name="imagem" ">
			<input type="submit" value="Carregar"></center>
			
	</form>
		</div>
	</div>
	<div id='detal'>
			
		<?php

				if(isset($_FILES['imagem']))
				{
					if(isset($_GET['nf']))
					{

					}
					$imagem = $_FILES["imagem"];
					$extensao=strtolower(substr($_FILES['imagem'] ['name'], -4));
					$novo_nome= rand("10000", "90000") . $extensao;
					$diretorio="upload/";
					move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome);
					$sq="UPDATE usuarios SET arquivo='$novo_nome' WHERE id='$id_p'";
					$co=mysqli_query($con, $sq);
					$msg="Imagem Atualizada com sucesso!";
					//header("location:perfil.php?nf='$msg'");
					//print $novo_nome;
					

				}	

				print "<div id ='info'>
				<table>
					<td class='no'>NOME: $nome_p</td>
					<td class='sb'>SOBRENOME: $sobrenome_p</td>
					<tr>
						<td class='idd'>(ID) DE USUÁRIO: $id_p</td>
						<td class='emm'>EMAIL: $email_p</td>
					</tr>
					<tr>
						<td class='nn'>NICKNAME: $nick_p</td>
						<td class='gg'>GÊNERO: $genero_p</td>
					</tr>
				</table>
				</div>";
				 
			
			
		?>
		<div id='redonda1'>
			<?php
				while ($reg=mysqli_fetch_row($consul)) {
				$id_p=$reg[0];
				$nome_p=$reg[1];
				$sobrenome_p=$reg[2];
				$email_p=$reg[3];
				$nick_p=$reg[5];
				$genero_p=$reg[6];
				$arquivo_p=$reg[7];
				}
				if($arquivo_p != NULL)
				{	
					
					print "<img src='upload/$arquivo_p' class='oi2'";
				}else
				{
					
					print "<div id='redonda'><img src='upload/usuario.png' class='oi'></div>";
					
				}
			?>	
		</div>
	</div>
	
	
	
	
</body>
</html>