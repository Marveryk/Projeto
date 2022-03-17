<?php
	$editar=$_GET["Id_ator"];
	include("ligarBD.php");
	$sqledita="Select * from ator where Id_ator='".$editar."'";
	$edita=mysqli_query($liga,$sqledita);
	$registo=mysqli_fetch_array($edita);
?>
<body background="Background.jpg">
	<font align="center" color="red"><h1>Quimera Filmes</h1><h2>Ator Actualizado</h2></font>
<?php
	if($_GET['Id_ator'] == $editar)
	{
		$atualiza=$_GET["Id_ator"];
		$nome=$_POST['Nome'];
		$nacionalidade=$_POST['Nacionalidade'];
		$dataNascimento=$_POST['DataNascimento'];
		include("ligarBD.php");
		$sqlatualiza="update ator set Id_ator='".$atualiza."', Nome='".$nome."', Nacionalidade='".$nacionalidade."', DataNascimento='".$dataNascimento."' where Id_ator='".$atualiza."'";
		$atualizado=mysqli_query($liga,$sqlatualiza);
		echo '<center><font color="red">Ator com o id '.$atualiza.' atualizado com sucesso.</font><br></center>';
		echo '<center><a href="Pagina.html">Voltar</a></center>';
	}
?>
</body>
