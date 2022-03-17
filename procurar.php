<body background="background.jpg">
<?php
	include ("ligarBD.php");
	$prod=$_POST["ator"];
	$sqllista="SELECT ator.Id_ator, ator.Nome, ator.Nacionalidade, ator.DataNascimento, personagem.nome, filme.Titulo  
			   FROM ator, personagem, filme 
			   WHERE ator.Id_ator like'".$prod."' and ((ator.Id_ator = personagem.Id_ator) and (personagem.Id_filme = filme.Id_filme)) ";
	$lista=mysqli_query($liga,$sqllista);
	$numreg=mysqli_num_rows($lista);
	if($numreg==0)
	{
		echo'<center><table border="0" bgcolor="White"><tr><td><a href="Pagina.html">voltar</a></td></tr></table></center>';exit;
	}
?>
<center><table bgcolor="white"><font color="red">Ator</font>
	<tr align="left" border="1"><th>Nome</th><th>&nbsp;&nbsp;Nacionalidade</th><th>&nbsp;&nbsp;Data de Nascimento</th><th>&nbsp;&nbsp;Nome Do Personagem</th><th>&nbsp;&nbsp;Filme</th></tr>
<?php
for ($i=1;$i<=$numreg;$i++)
{
	$registo=mysqli_fetch_array($lista);
	echo'<tr border="1">';
	echo'<td>'.$registo['Nome'].'</td>';
	echo'<td>&nbsp;&nbsp;'.$registo['Nacionalidade'].'</td>';
	echo'<td>&nbsp;&nbsp;'.$registo['DataNascimento'].'</td>';
	echo'<td>&nbsp;&nbsp;'.$registo['nome'].'</td>';
	echo'<td>&nbsp;&nbsp;'.$registo['Titulo'].'</td>';
	echo'</tr>';	
	}
?>
<tr border="0">
	<td></td>
	<td></td>
	<td><center><a href="Pagina.html">voltar</a></center></td>
	<td></td>
	<td></td>
</tr>
</body>
