<body background="Background.jpg">
	<font align="center" color="red"><h1>Quimera Filmes</h1><h2>Filme Actualizado</h2></font>
<?php
	$atualizar=$_GET["Id_filme"];
	$titulo=$_POST["Titulo"];
	$realizador=$_POST["Realizador"];
	$argumentista=$_POST["Argumentista"];
	$Tipo=$_POST["Tipo"];
	include("ligarBD.php");
	$sqlatualiza="update filme set Id_filme='".$atualizar."', Titulo='".$titulo."', Realizador='".$realizador."', Argumentista='".$argumentista."', Tipo='".$Tipo."' where Id_filme='".$atualizar."'";
	$atualizado=mysqli_query($liga,$sqlatualiza);
	echo '<center><font color="red">Filme com o id '.$atualizar.' foi atualizado com sucesso.<br></font></center>';
	echo '<center><a href="Pagina.html">Voltar</a></center>';
?>
</body>
