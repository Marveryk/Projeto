<?php
$liga= mysqli_connect("localhost","root","");
if (!$liga)
{ echo '<p> Erro: Falha de ligação.'; exit; }
mysqli_select_db($liga,"filmes") or die ("Problemas na ligação ao MYSQL");
?>
