<head>

<link rel="stylesheet" type="text/css" href="estilo.css">	
<script type="text/javascript">
function slide1(){
document.getElementById('id').src="imagens/series/prison.jpg";
setTimeout("slide2()", 3000)
document.getElementById('aId').href="link1.html"
}
  
function slide2(){
document.getElementById('id').src="imagens/series/twd.jpg";
setTimeout("slide3()", 3000)
document.getElementById('aId').href="link2.html"
}
  
function slide3(){
document.getElementById('id').src="imagens/series/stranger.jpg";
setTimeout("slide1()", 3000)
document.getElementById('aId').href="link3.html"
}
</script>
<body onLoad="slide1()">
<a id="aId"><img id="id" width="800px" height="300px"></a>
<div id='box1'>
	<table border="1px">
		<td>oi</td>		
	</table>
</div>