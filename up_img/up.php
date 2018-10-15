<?php
	$con=mysqli_connect("localhost", "root", "");
	$sel=mysqli_select_db($con, "forum");

	
	
	if(isset($_FILES['imagem']))
	{
		$imagem = $_FILES["imagem"];
		$msg = false;
		$extensao=strtolower(substr($_FILES['imagem'] ['name'], -4));
		$novo_nome= md5(time()) . $extensao;
		$diretorio="upload/";
		move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome);
		$sql="INSERT INTO teste (codigo, arquivo, data1) values (NULL, '$novo_nome', NOW())";
		$co=mysqli_query($con, $sql);
	}	

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="up.php" enctype="multipart/form-data">
		<input type="file" name="imagem" ">
		<input type="submit" value="Carregar">
	</form>
</body>
</html>