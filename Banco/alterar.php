<HTML>
<HEAD>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <TITLE>Alteração</TITLE>
</HEAD>
<?php

$tipo=trim($_GET["tipo"]);

$bd=mysqli_connect("localhost","root","","imobiliaria") or die ("erro!");


$sql="select * from imoveis where tipo = '$tipo'";

$consulta=mysqli_query($bd, $sql);
$reg=mysqli_fetch_array($consulta);

if ($reg==0)
{
	 echo "ERRO - Registro não Existe.  ";
	 exit;
}
else
{
	$endereco = $reg["endereco"];
    $tipo = $reg["tipo"];
	$cidade = $reg["cidade"];
    $estado = $reg["estado"];
	$preco = $reg["preco"];
	$area = $reg["area"];
    $quartos = $reg["quartos"];
	$banheiros = $reg["banheiros"];
    $vagas_garagem = $reg["vagas_garagem"];
    $descricao = $reg["descricao"];
}
?>
<center><h2>Alterar Registros</center>
	<?php echo "tipo: $tipo<br><br>" ?>
	<form method="POST" action="regrava.php">
        <p>endereco:			<input type="text" size="07" name="endereco" maxlength="07"><br><br>
        <p>cidade:		<input type="text" size="40" name="cidade"><BR><br>
        <p>estado:			<input type="text" size="20" name="estado"><BR><br>
        <p>preco:			<input type="text" size="20" name="preco"><BR><br>
        <p>area:			<input type="text" size="04" name="area"><BR><br>
        <p>quartos:	<input type="text" size="30" name="quartos"><BR><br>
        <p>banheiros:			<input type="text" size="14" name="banheiros"><BR><br>
        <p>vagas_garagem:		<input type="text" size="20" name="vagas_garagem"><BR><br>
        <p>descricao:		<textarea rows="6" cols ="60" name = "descricao"></textarea><br>
                    <input type="submit" value="alterar">
 	</form>	
	
</body>
</html>
