<html>
<title>Quimera Filmes</title>
<head>
	<script language="JavaScript">
		function Validar(registo)
		{
			if (registo.nome.value=="")
			{
				alert("nome esta em branco");
				registo.nome.style.background="red";
				registo.nome.style.color="#ffffff";
				registo.nome.focus();
				return false;
			}
			if (registo.Titulo.value=="")
			{
				alert("Titulo esta em branco");
				registo.Titulo.style.background="red";
				registo.Titulo.style.color="#ffffff";
				registo.Titulo.focus();
				return false;
			}
			if (registo.Nome.value=="")
			{
				alert("Seu Nome esta em branco");
				registo.Nome.style.background="red";
				registo.Nome.style.color="#ffffff";
				registo.Nome.focus();
				return false;
			}
		}
	</script>
</head>

<body background="Background.jpg">
	<font align="center" color="red"><h1>Quimera Filmes</h1></font>
	<font align="center" color="red"><h2>Registar Personagem</h2></font>
	<form name="registo" onsubmit="return Validar (this);" action="inserirPersonagem.php" method="post">
		<center><table border="0" bgcolor="White">
					<tr>
						<td><font align="left" color="red">* Nome do Personagem:</font></td>
						<td><input type="text" name="nome"></td>
					</tr>
					<tr>
						<td><font align="left" color="red">* Titulo do Filme do Personagem: (Registado anteriormente)</font></td>
						<td><input type="text" name="Titulo"></td>
					</tr>
					<tr>
						<td><font align="left" color="red">* Seu Nome de ator: (Registado anteriormente)</font></td>
						<td><input type="text" name="Nome"></td>
					</tr>
					<tr>
						<td><font color="red">dado obrigatorio com (*)</font></td>
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
