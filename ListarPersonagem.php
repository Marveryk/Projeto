<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <style>
            body{
                background-image: url(Background.jpg);
                background-repeat:no-repeat;
                background-size:cover;
                background-position: center center;
                background-attachment: scroll;
              
    }
        section:nth-of-type(1){
            background-image: url(Background.jpg)
             
        }
    </style>
</head>
<body background="Background.jpg">
<?php
	$pesquisa=$_GET["pesquisa"];
	include("ligarBD.php");
	$sqllista="select distinct * from personagem where nome like'%".$pesquisa."%'";
	$lista=mysqli_query($liga,$sqllista);
	$numreg=mysqli_num_rows($lista);
	if($numreg==0)
	{
		echo'<center><font align="center" color="red">Não existem registos com '.$pesquisa.' ';
		echo'<a href="Pagina.html">voltar</a></center>';exit;
		}
	echo '<font align="center" color="red">numero total de registos encontrados= '.$numreg.'<br>';
?>

	<div class="container">
		<center><table border="1" bgcolor="white"><font color="red">Personagem</font>
			<tr><th>id personagem</th><th>id ator</th><th>id filme</th><th>nome</th></tr>
		<?php
		for ($i=1;$i<=$numreg;$i++)
		{
			$registo=mysqli_fetch_array($lista);
			echo'<tr>';
			echo'<td>'.$registo['Id_personagem'].'</td>';
			echo'<td>'.$registo['Id_ator'].'</td>';
			echo'<td>'.$registo['Id_filme'].'</td>';
			echo'<td>'.$registo['nome'].'</td>';
			echo "<td>"."<a href='apagarPersonagem.php?Id_personagem=".$registo['Id_personagem']."' data-confirm='Tem certeza de que quer apagar o registo selecionado?'>Apagar</a>"."</td>";
			echo'<td>'.'<a href="editarPersonagem.php?Id_personagem='.$registo['Id_personagem'].'">Editar</a>'.'<td>';
			echo'</tr>';	
			}
		?>
		</table></center>

		<center>
            <table border="0" bgcolor="White">
			<tr>
				<td><a href="Pagina.html">voltar ao menu principal</a></td>
			</tr>
		</table></center>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
	<script src="js/personalizado.js"></script>
</body>
