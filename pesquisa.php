<?php
	include ("ligarBD.php");
	$sqllista="Select Id_ator, Nome from ator";
	$query= mysqli_query($liga,$sqllista);
?>
<body background="Background.jpg">
<center>
<font color="red">
<form name="Ator" method="post" action="procurar.php"> 
<label>Selecione um Ator</label> 
<select name="ator"> <option>Selecione...</option>
<?php while($prod = mysqli_fetch_array($query)) 
	{ ?> <option value="<?php echo $prod['Id_ator'] ?>"><?php echo $prod['Nome'] ?></option> <?php } 
?> 
</select>
<input type="submit" value="Pesquisar">
</form>
</font>

<table border="0" bgcolor="white">
<tr><td><a href="Pagina.html">Voltar</a></td></tr>
</table>
</center>
</body>
