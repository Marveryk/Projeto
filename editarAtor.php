<?php
	$editar=$_GET["Id_ator"];
	include("ligarBD.php");
	$sqledita="Select * from ator where Id_ator='".$editar."'";
	$edita=mysqli_query($liga,$sqledita);
	$registo=mysqli_fetch_array($edita);
?>
<?php
	  
?>
<html>
<title>Quimera Filmes</title>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
	<script language="JavaScript">
		function confirmar(url){
			event.preventDefault();  
			var resposta = confirm("Deseja mesmo sair da página?");
			if (resposta == true){
				location.top.href = url;
			}
		} 
		function Validar(alterar)
		{
			if (alterar.Nome.value == "")
			{
				alert("Nome esta em branco");
				alterar.Nome.style.background="red";
				alterar.Nome.style.color="#ffffff";
				alterar.Nome.focus();
				return false;
			}
			if (alterar.Nacionalidade.value == "")
			{
				alert("Nome esta em branco");
				alterar.Nacionalidade.style.background="red";
				alterar.Nacionalidade.style.color="#ffffff";
				alterar.Nacionalidade.focus();
				return false;
			}
			if (alterar.DataNascimento.value == "")
			{
				alert("Data de Nascimento esta em branco");
				alterar.DataNascimento.style.background="red";
				alterar.DataNascimento.style.color="#ffffff";
				alterar.DataNascimento.focus();
				return false;
			}
		}
	</script>
</head>
<body background="Background.jpg">
	<div class="container">
		<font align="center" color="red"><h1>Quimera Filmes</h1>
		<h2>Editar Ator</h2></font>
		<br>
		<form name="alterar" onsubmit="return Validar (this);" action="atualizarAtor.php?Id_ator=<?php echo $editar; ?>" method="POST">
			<center><table border="0" bgcolor="white">
				<tr>
					<td>Nome: </td>
					<td><input type="text" name="Nome" value='<?php echo $registo['Nome']; ?>'></td>
				</tr>
				<tr>
					<td>Nacionalidade: </td>
					<td><input type="text" name="Nacionalidade" value='<?php echo $registo['Nacionalidade']; ?>'></td>
				</tr>
				<tr>
					<td>Data de nascimento: </td>
					<td><input type="text" name="DataNascimento" value='<?php echo $registo['DataNascimento']; ?>'></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><a href="javascript:document.querySelector('form').submit();" data-confirm='Tem certeza de que quer editar o registo selecionado?'><input type="submit" name="atualizar" value="Atualizar"></a></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><a href="Pagina.html" onclick="Confirmar('form')">Voltar ao menu principal</a></td>
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
