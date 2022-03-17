<?php
	include ("ligarBD.php");
	$sqllista="Select Id_filme,Titulo from filme";
	$query= mysqli_query($liga,$sqllista);
?>
<html>
	<head><title>Inserir Filme</title></head>
	<meta http-equiv="content-type" content="text/hml;charset=utf.8" />
<body background="Background.jpg"><font align="center" color="RED"><h1>Quimera Filme</h1></font>
<font align="center" color="RED"><h2>Introdução do Filme</h2></font>
<?php
	$Titulo=$_POST['Titulo'];
	$Realizador=$_POST['Realizador'];
	$Argumentista=$_POST['Argumentista'];
	$Tipo=$_POST['Tipo'];
	if (!$Titulo || !$Realizador || !$Argumentista || !$Tipo)
	{ 	
		echo '<center><font color="red">Campos em falta. Preencha por favor todos os campos!</font></center>';
		echo '<center><p><a href="registarFilme.php">Voltar</a></p></center>';
	}
	else
	{
		$Verificar="select Id_filme,Titulo from filme where Titulo like'%".$Titulo."%'";
		$reg=mysqli_query($liga,$Verificar);
		$registo=mysqli_fetch_array($reg);
		$numreg=mysqli_num_rows($reg);
		if($numreg<>0)
		{
			$id_filme= $registo['Id_filme'];
			$Titulo= $registo['Titulo'];
		?>
		<table bgcolor="white">
		<?php
			echo '<font align="center" color="red">Este foi o filme recebido:</font><br><br>';
			echo '<tr><td><font align="center" color="red">Titulo do Filme: '.$Titulo.'</font><br></td></tr>';
			echo '<tr><td><font align="center" color="red">Realizador: '.$Realizador.'</font><br></td></tr>';
			echo '<tr><td><font align="center" color="red">Argumentista: '.$Argumentista.'</font><br></td></tr>';
			echo '<tr><td><font align="center" color="red">Tipo de Filme: '.$Tipo.'</font><br></td></tr>';
			$liga= mysqli_connect("localhost","root","");
			if (!$liga)
			{ echo '<p> Erro: Falha de ligação.'; exit; }
			mysqli_select_db($liga,"filmes") or die ("Problemas na ligação ao MYSQL");
			$sql="insert into filme(Id_filme, Titulo, Realizador, Argumentista, Tipo) values ('$id_filme','$Titulo','$Realizador','$Argumentista','$Tipo')";
			?>
			</table>
			<?php
		}
		else
		{
			?>
			<table bgcolor="white">
			<?php
			echo '<font align="center" color="red">Este foi o filme recebido:</font><br><br>';
			echo '<tr><td><font align="center" color="red">Titulo do Filme: '.$Titulo.'</font><br></td></tr>';
			echo '<tr><td><font align="center" color="red">Realizador: '.$Realizador.'</font><br></td></tr>';
			echo '<tr><td><font align="center" color="red">Argumentista: '.$Argumentista.'</font><br></td></tr>';
			echo '<tr><td><font align="center" color="red">Tipo de Filme: '.$Tipo.'</font><br></tr>';
			$liga= mysqli_connect("localhost","root","");
			if (!$liga)
			{ echo '<p> Erro: Falha de ligação.'; exit; }
			mysqli_select_db($liga,"filmes") or die ("Problemas na ligação ao MYSQL");
			$sql="insert into filme(Id_filme, Titulo, Realizador, Argumentista, Tipo) values ('','$Titulo','$Realizador','$Argumentista','$Tipo')";
			$result=mysqli_query($liga,$sql);
		}
		
		?>
		</table>
		<table bgcolor="white">
		<?php
		echo '<tr><td><p><a href="registarPersonagem.php">Seguinte</a></p></td></tr>';
	}
?>	
</body>
</html>
