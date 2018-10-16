<?php
	session_start();
	if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['login']) == true))
	{
		include "menu_nao_cadastrados.inc";
	}else
	{
		include "menu_cadastrados.inc";
	}
	//session_destroy();	
?>
<html>
<head>

<link rel="stylesheet" type="text/css" href="estilo.css">	
<body>
	<style type="text/css">
		#box1{
		position: absolute;
	 	top: 300px; 
	 	width:600px; 
	 	height:900px; 
	 	background-color:#323232;  
	 	left:350px;}
	</style>
<div id='box1'>
	<table border="1px">
		<td>oi</td>		
	</table>
</div>
</body>
</html>
