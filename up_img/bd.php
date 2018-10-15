<?php
	$con=mysqli_connect("localhost", "root", "");
	$sel=mysqli_select_db($con, "forum");

	$imagem = $_FILES["imagem"];
	$msg = false;
	
?>