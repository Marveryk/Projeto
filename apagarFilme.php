<body background="Background.jpg">
	<font align="center" color="red"><h1>Quimera Filmes</h1><h2>Ator Apagado</h2></font>
<?php
	$apagar=$_GET["Id_filme"];
	include("ligarBD.php");
	$sqlapaga="delete from filme where Id_filme='".$apagar."'";
	$apagado=mysqli_query($liga,$sqlapaga);
	if ($apagado == 1)
	echo '<center><font color="red">O filme com o Id '.$apagar.' foi apagado com sucesso.</font><br></center>';
	else
	echo '<center><font color="red">O filme com o Id '.$apagar.' não foi apagado com sucesso.</font><br></center>';
	echo '<center><table border="0" bgcolor="white"><tr><td><a href="pagina.html">Voltar ao menu principal</a></td></tr></table></center>';
?>
</body>
