<html>
<title>Quimera Filmes</title>
<head>
	<script language="JavaScript">
		function Validar(registo)
		{
			if (registo.Nome.value=="")
			{
				alert("Nome esta em branco");
				registo.Nome.style.background="red";
				registo.Nome.style.color="#ffffff";
				registo.Nome.focus();
				return false;
			}
			if (registo.Nacionalidade.value=="")
			{
				alert("Nacionalidade esta em branco");
				registo.Nacionalidade.style.background="red";
				registo.Nacionalidade.style.color="#ffffff";
				registo.Nacionalidade.focus();
				return false;
			}
			if (registo.DataNascimento.value=="")
			{
				alert("Deve introduzir a sua idade (numeros)");
				registo.DataNascimento.style.background="red";
				registo.DataNascimento.style.color="#ffffff";
				registo.DataNascimento.focus();
				return false;
			}
		}
	</script>
</head>

<body background="Background.jpg">
	<font align="center" color="red"><h1>Quimera Filmes</h1></font>
	<font align="center" color="red"><h2>Registar Ator</h2></font>
	<form name="registo" onsubmit="return Validar (this);" action="inserirAtor.php" method="post">
		<center><table border="0" bgcolor="White">
					<tr>
						<td><font align="left" color="red">* Nome do ator:</font></td>
						<td><input type="text" name="Nome"></td>
					</tr>
					<tr>
						<td><font align="left" color="red">* Nacionalidade do ator:</font></td>
						<td><input type="text" name="Nacionalidade"></td>
					</tr>
					<tr>
						<td><font align="left" color="red">* Data de nascimento do ator: (Ex. 1999-12-31)</font></td>
						<td><input type="text" name="DataNascimento"></td>
					</tr>
					<tr>
						<td><font color="red">dados obrigatorios com (*)</font></td>
						<td colspan="2" align ="left"><input type="submit" name="registar" value="Registar"></td>
					</tr>
					<tr>
						<td><a href="Pagina.html">Voltar ao Menu Principal</a></td>
					</tr>
		</table>
		</center>
	</form>
</body>

</html>
