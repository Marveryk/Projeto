<body background="Background.jpg">
	<font align="center" color="red"><h1>Quimera Filmes</h1><h2>Personagem Apagado</h2></font>
<?php
	$apagar=$_GET['Id_personagem'];
	include("ligarBD.php");
	$sqlapaga="delete from Personagem where Id_personagem='".$apagar."'";
	$apagado=mysqli_query($liga,$sqlapaga);
	if ($apagado == 1)
	echo '<center><font color="red">O personagem com o Id '.$apagar.' foi apagado com sucesso.<br></center>';
	else
	echo '<center><font color="red">O personagem com o Id '.$apagar.' não foi apagado com sucesso.<br></font></center>';
	echo '<center><table border="0" bgcolor="white"><tr><td><a href="pagina.html">Voltar ao menu principal</a></td></tr></table></center>';
?>
</body>
