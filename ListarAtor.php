<?php
	$pesquisa=$_GET["pesquisa"];
	include("ligarBD.php");
	$sqllista="select * from ator where Nome like'%".$pesquisa."%'";
	$lista=mysqli_query($liga,$sqllista);
	$numreg=mysqli_num_rows($lista);
	if($numreg==0)
	{
		echo'<center><font color="red">Não existem registos com '.$pesquisa.' ';
		echo'<a href="Pagina.html">voltar</a></center>';exit;
		}
	echo '<font color="red">numero total de registos encontrados= '.$numreg.'<br>';
?>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
</head>
<body background="Background.jpg">
	<div class="container">
		<center><table border="1" bgcolor="white"><font color="red">Ator</font>
			<tr><th>ID</th><th>Nome</th><th>Nacionalidade</th><th>Data de Nascimento</th></tr>
		<?php
		for ($i=1;$i<=$numreg;$i++)
		{
			$registo=mysqli_fetch_array($lista);
			echo'<tr>';
			echo'<td>'.$registo['Id_ator'].'</td>';
			echo'<td>'.$registo['Nome'].'</td>';
			echo'<td>'.$registo['Nacionalidade'].'</td>';
			echo'<td>'.$registo['DataNascimento'].'</td>';
			echo "<td>"."<a href='apagarAtor.php?Id_ator=".$registo['Id_ator']."' data-confirm='Tem certeza de que quer apagar o registo selecionado?'>Apagar</a>"."</td>";
			echo'<td>'.'<a href="editarAtor.php?Id_ator='.$registo['Id_ator'].'">Editar</a>'.'<td>';
			echo'</tr>';
			}
		?>
		</table></center>

		<center><table border="0" bgcolor="White">
			<tr>
				<td><a href="Pagina.html">voltar ao menu principal</a></td>
			</tr>
		</center></table>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
	<script src="js/personalizado.js"></script>
</body>
