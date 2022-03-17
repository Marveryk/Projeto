<body background="Background.jpg">
	<font align="center" color="red"><h1>Quimera Filmes</h1><h2>Personagem Actualizado</h2></font>
<?php
	$actualiza=$_GET['Id_personagem'];
	$nome=$_POST["nome"];
	include("ligarBD.php");
	$sqlatualiza="update personagem set id_personagem='".$actualiza."',nome='".$nome."' where id_personagem='".$actualiza."'";
	$atualizado=mysqli_query($liga,$sqlatualiza);
	echo '<center><font color="red">Personagem com o id '.$actualiza.' foi atualizado com sucesso.<br></font>';
	echo '<a href="Pagina.html">Voltar</a></center>';
?>
</body>
