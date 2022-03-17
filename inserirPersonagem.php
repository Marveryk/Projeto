<?php
	include ("ligarBD.php");
	$sqllista="Select personagem.Id_personagem, ator.Id_ator, ator.nome, filme.Id_filme, filme.Titulo from ator, filme, personagem";
	$query= mysqli_query($liga,$sqllista);
?>
<html>
	<head><title>Inserir Personagem</title></head>
	<meta http-equiv="content-type" content="text/hml;charset=utf.8" />
<body background="Background.jpg"><font align="center" color="RED"><h1>Quimera Filme</h1></font>
<font align="center" color="RED"><h2>Introdução do Personagem</h2></font>
<?php
	$nome=$_POST['nome'];
	$Titulo=$_POST['Titulo'];
	$Nome=$_POST['Nome'];
	if (!$nome)
	{ 	
		echo '<center><font color="red">Campo em falta. Preencha por favor o campo!</font></center>';
		echo '<center><p><a href="registarPersonagem.php">Voltar</a></p></center>';
	}
	else
	{
		$Ver2="select Id_ator,Nome from ator where Nome like'%".$Nome."%'";
		$reg2=mysqli_query($liga,$Ver2);
		$registo2=mysqli_fetch_array($reg2);
		if ($registo2['Nome'] == $Nome)
		{
			$id_ator= $registo2['Id_ator'];
		}
		$Ver="select Id_filme,Titulo from filme where Titulo like'%".$Titulo."%'";
		$reg=mysqli_query($liga,$Ver);
		$registo=mysqli_fetch_array($reg);
		if ($registo['Titulo'] == $Titulo)
		{
			$Id_filme= $registo['Id_filme'];
		}
		?>
		<table bgcolor="white">
		<?php
		echo '<font align="center" color="red">Este foi o Personagem recebido:</font><br><br>';
		echo '<tr><td><font align="center" color="red">Nome do Personagem: '.$nome.'</font><br></td></tr>';
		$liga= mysqli_connect("localhost","root","");
		if (!$liga)
		{ echo '<p> Erro: Falha de ligação.'; exit; }
		mysqli_select_db($liga,"filmes") or die ("Problemas na ligação ao MYSQL");
		$sql="insert into personagem values ('','$id_ator','$Id_filme','$nome')";
		$result=mysqli_query($liga,$sql);
		?>
</table>		
<table bgcolor="white">
		<?php
		echo '<tr><td><p><a href="Pagina.html">Voltar ao Menu Principal</a></p></td></tr>';
	}
?>
</body>
</html>
