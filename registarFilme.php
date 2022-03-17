<html>
<title>Quimera Filmes</title>
<head>
	<script language="JavaScript">
		function Validar(registo)
		{
			if (registo.Titulo.value=="")
			{
				alert("Titulo esta em branco");
				registo.Titulo.style.background="red";
				registo.Titulo.style.color="#ffffff";
				registo.Titulo.focus();
				return false;
			}
			if (registo.Realizador.value=="")
			{
				alert("Realizador esta em branco");
				registo.Realizador.style.background="red";
				registo.Realizador.style.color="#ffffff";
				registo.Realizador.focus();
				return false;
			}
			if (registo.Argumentista.value=="")
			{
				alert("Argumentista esta em branco");
				registo.Argumentista.style.background="red";
				registo.Argumentista.style.color="#ffffff";
				registo.Argumentista.focus();
				return false;
			}
			if (registo.Tipo.value=="")
			{
				alert("Tipo esta em branco");
				registo.Tipo.style.background="red";
				registo.Tipo.style.color="#ffffff";
				registo.Tipo.focus();
				return false;
			}
		}
	</script>
</head>

<body background="Background.jpg">
	<font align="center" color="red"><h1>Quimera Filmes</h1></font>
	<font align="center" color="red"><h2>Registar Filme</h2></font>
	<form name="registo" onsubmit="return Validar (this);" action="inserirFilme.php" method="post">
		<center><table border="0" bgcolor="White">
					<tr>
						<td><font align="left" color="red">* Titulo do filme:</font></td>
						<td><input type="text" name="Titulo"></td>
					</tr>
					<tr>
						<td><font align="left" color="red">* Realizador:</font></td>
						<td><input type="text" name="Realizador"></td>
					</tr>
					<tr>
						<td><font align="left" color="red">* Argumentista: </font></td>
						<td><input type="text" name="Argumentista"></td>
					</tr>
					<tr>
						<td><font align="left" color="red">* Tipo de filme: </font></td>
						<td><input type="text" name="Tipo"></td>
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
