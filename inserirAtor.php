<?php
	include ("ligarBD.php");
	$sqllista="Select Id_ator,Nome from ator";
	$query= mysqli_query($liga,$sqllista);
?>
<html>
	<head><title>Inserir Ator</title></head>
	<meta http-equiv="content-type" content="text/hml;charset=utf.8" />
<body background="Background.jpg"><font align="center" color="RED"><h1>Quimera Filme</h1></font>
<font align="center" color="RED"><h2>Introdução do Ator</h2></font>
<?php
	$Nome=$_POST['Nome'];
	$nacionalidade=$_POST['Nacionalidade'];
	$datanasc=$_POST['DataNascimento'];
	if (!$Nome || !$nacionalidade || !$datanasc)
	{ 	
		echo '<center><font color="red">Campos em falta. Preencha por favor todos os campos!</font></center>';
		echo '<center><p><a href="registarAtor.php">Voltar</a></p></center>';
	}
	else
	{	
		$Verificar="select Id_ator,Nome from ator where Nome like'%".$Nome."%'";
		$reg=mysqli_query($liga,$Verificar);
		$registo=mysqli_fetch_array($reg);
		$numreg=mysqli_num_rows($reg);
		if($numreg<>0)
		{
			echo '<font align="center" color="red">registos encontrados com o nome '.$Nome.' em total são: '.$numreg;
			$id_ator= $registo['Id_ator'];
			$Nome= $registo['Nome'];
		?>
		<table bgcolor="white">
		<?php
			echo '<font align="center" color="red">Este foi o ator recebido:</font><br><br>';
			echo '<tr><td><font align="center" color="red">Nome Do Ator: '.$Nome.'</font> <br></td></tr>';
			echo '<tr><td><font align="center" color="red">Nacionalidade do Ator: '.$nacionalidade.'</font><br></td></tr>';
			echo '<tr><td><font align="center" color="red">Data de nascimento do Ator: '.$datanasc.'</font><br></td></tr>';
			$liga= mysqli_connect("localhost","root","");
			if (!$liga)
			{ echo '<p> Erro: Falha de ligação.'; exit; }
			mysqli_select_db($liga,"filmes") or die ("Problemas na ligação ao MYSQL");
			$sql="insert into ator(Id_ator, Nome, Nacionalidade, DataNascimento) values ('$id_ator','$Nome','$nacionalidade','$datanasc')";
			?>
			</table>
			<?php
		}
		else
		{
			?>
			<table bgcolor="white">
			<?php
			echo '<font align="center" color="red">Este foi o ator recebido:</font><br><br>';
			echo '<tr><td><font align="center" color="red">Nome Do Ator: '.$Nome.'</font> <br></td></tr>';
			echo '<tr><td><font align="center" color="red">Nacionalidade do Ator: '.$nacionalidade.'</font><br></td></tr>';
			echo '<tr><td><font align="center" color="red">Data de nascimento do Ator: '.$datanasc.'</font><br></td></tr>';
			$liga= mysqli_connect("localhost","root","");
			if (!$liga)
			{ echo '<p> Erro: Falha de ligação.'; exit; }
			mysqli_select_db($liga,"filmes") or die ("Problemas na ligação ao MYSQL");
			$sql="insert into ator values ('','$Nome','$nacionalidade','$datanasc')";
			$result=mysqli_query($liga,$sql);
		}
		?>
		</table>
		<table bgcolor="white">
		<?php
		echo '<tr><td><p><a href="registarFilme.php">Seguinte</a></p></td></tr>';
	}
?>
</table>
</body>
</html>
