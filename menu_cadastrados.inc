<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="menu_cadastrados.css">
</head>
<body>
	<style type="text/css">
		a:link {
			text-decoration:none;
		}
		
		a { color: inherit; }
		a:active {
		    color: blue;
		} 
		a:hover {
    color: #999999;
}
		#menu{position: fixed; top: 0px; width:100%; height:15%; background-color:#9e2a2a; z-index: 24;}
		.icon1{position: fixed; top: 10px; left: 1000px; width:40px; height:40px; z-index: 24; border-radius: 50%;}
		.icon2{position: fixed; top: 0px;left: 1000px;width:60px; height:50px; z-index: 24; border-radius: 50%}
		.user{position: fixed; top: 50px; z-index: 24; font-family: verdana; left: 1000px; }
		.sair{position: fixed; top: 50px; z-index: 24; font-family: verdana; left: 1200px;}
		.icon_sair{position: fixed; top: 10px; z-index: 24; left: 1200px; width:40px; height:30px;}
		.icon_home{position: fixed; top: 20px; z-index: 24; left: 30px; width:40px; height:30px;}
		.home{position: fixed; top: 55px; z-index: 24; left: 30px; width:40px; height:30px; font-family: verdana}
		
		#divBusca{
			  background-color:#E0EEEE;
			  border:solid 2px #5F9EA0;
			  border-radius:10px;
			  width:300px;
			  height:32px;
			  position: relative;
			  left: 400px;
			  top:30px;
			}
			 
			#txtBusca{
			  float:left;
			  background-color:transparent;
			  padding-left:5px; 
			  font-size:18px;
			  border:none;
			  height:32px;
			  width:191px;
			}
			 
			#btnBusca{
			 position: relative;
			 top:-32px;
			 left: 190px;	
			  border:none;
			  float:left;
			  height:32px;
			  border-radius:0 7px 7px 0;
			  width:70px;
			  font-weight:bold;
			  background:#5F9EA0;
			}
			 
			#divBusca img{
			  float:left;
			}
			.busc
			{
			position: relative;
			 top:-2px;
			 left: 0px;	
			 width: 40px;
			 height: 35px;
			 opacity: 0.5;	
			}

		
	</style>
	

	<div id='menu'>	
	<?php
		include "conexao.inc";
		$login=$_SESSION['login'];

		$imp="SELECT * FROM usuarios WHERE email='$login'";
		$consultar=mysqli_query($con, $imp);
		$linhas_af=mysqli_num_rows($consultar);
		if($linhas_af > 0 )
		{
			while ($reg2=mysqli_fetch_row($consultar)) 
			{
				$id=$reg2[0];
				$nome=$reg2[1];
				$sobrenome=$reg2[2];
				$email=$reg2[3];
				$nick=$reg2[5];
				$gen=$reg2[6];
				$arq=$reg2[7];
				
			}
			
		}
		if($arq != NULL)
		{
			print "<a href='perfil.php'><img src='upload/$arq' class='icon1'></a>";	
		}else
		{
			if($gen == 'M')
			{
				print "<a href='perfil.php'><img src='upload/icon_homem.png' class='icon2'></a>";	
			}elseif($gen == 'F')
			{
				print "<a href='perfil.php'><img src='upload/icon_mulher.png' class='icon2'></a>";
			}elseif ($gen == 'O') {
				print "<a href='perfil.php'><img src='upload/icon_outro.png' class='icon2'></a>";
			}
			
		}
		print "<a href='perfil.php' class='user'>$nick</td>";
	?>
	<a href="logoff.php"><img src="upload/logof.png" class='icon_sair'></a>
	<a href="logoff.php" class='sair'>Sair</a>
	<a href="home.php"><img src="upload/home_icon.png" class='icon_home'></a>
	<a href="home.php" class='home'>Home</a>

	<div id="divBusca">
  <img src="imagens/botão/search3.png" alt="Buscar..." class='busc'/>
  <input type="text" id="txtBusca" placeholder="Buscar..."/>
  <button id="btnBusca">Buscar</button>
</div>
	
	</div>	
</body>
</html>