
<?php
	$editar=$_GET["Id_personagem"];
	include("ligarBD.php");
	$sqledita="Select * from personagem where Id_personagem='".$editar."'";
	$edita=mysqli_query($liga,$sqledita);
	$registo=mysqli_fetch_array($edita);
?>
<html>
<title>Quimera Filmes</title>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
	<script language="JavaScript">
		function confirmar(alterar)
		{
			if (alterar.nome.value=="")
			{
				alert("Nome esta em branco");
				alterar.nome.style.background="red";
				alterar.nome.style.color="#ffffff";
				alterar.nome.focus();
				return false;
			}
			if (alterar.nome.value<>"")
			{
				alert("Está seguro de fazer a alteração");
				alterar.nome.focus();
				return false;
			}
			return false;
		}
	</script>
</head>
<body background="Background.jpg">
	<div class="container">
		<font align="center" color="red"><h1>Quimera Filmes</h1>
		<h2>Editar Personagem</h2></font>
		<br>
		<form name="alterar" onsubmit="return confirmar (this);" action="atualizarPersonagem.php?Id_personagem=<?php echo $editar; ?>" method="POST">
			<center><table border="0" bgcolor="white">
				<tr>
					<td>Nome: </td>
					<td><input type="text" name="nome" value='<?php echo $registo['nome']; ?>'></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><a href="javascript:document.querySelector('form').submit();" data-confirm='Tem certeza de que quer editar o registo selecionado?'><input type="submit" name="atualizar" value="Atualizar"></a></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><a href="Pagina.html">Voltar</a></td>
				</tr>
			</table></center>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
	<script src="js/personalizado2.js"></script>
</body>
</html>
