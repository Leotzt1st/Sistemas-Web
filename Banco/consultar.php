<HTML>
<BODY>
<?php
$expressao=		$_POST["expressao"];
$bd=mysqli_connect("localhost","root","","imobiliaria") or die ("erro!");


if (isset($_POST ["op"]))
{
	$op = $_POST ["op"];
	if ($op=="tipo")
		$consulta=mysqli_query($bd,"select * from imoveis where tipo='$expressao'");
	if ($op=="cidade")
		$consulta=mysqli_query($bd,"select * from imoveis where cidade='$expressao'");
	if ($op=="preco")
		$consulta=mysqli_query($bd,"select * from imoveis where proprietario >= '$expressao'");
	if ($op=="estado")
		$consulta=mysqli_query($bd,"select * from imoveis where estado='$expressao'");	
} else
{
	echo "volte a página e escolha o campo que fará a pesquisa";
	exit;
}
$reg = mysqli_fetch_array($consulta);
if ($reg==0)
{
	echo "Não existem registros para a pesquisa!";
	exit;
}
while ($reg!=0)
{
	$endereco = $reg["endereco"];
    $tipo = $reg["tipo"];
	$cidade = $reg["cidade"];
    $estado = $reg["estado"];
	$preco = $reg["preco"];
	$AREA = $reg["AREA"];
    $quartos = $reg["quartos"];
	$banheiros = $reg["banheiros"];
    $vagas_garagem = $reg["vagas_garagem"];
    $descricao = $reg["descricao"];
	
	echo   "tipo: $tipo<br>
            endereco: $endereco<br>
			cidade: $cidade<br>
            estado: $estado<br>
			preco: $preco<br>
			AREA: $AREA<br>
			quartos: $quartos<br>
			banheiros: $banheiros<br>
            vagas_garagem: $vagas_garagem<br>
            descricao: $descricao<br>";
			
	?>
	<a href="excluir.php?pl=<?php echo $tipo;?>" onclick = "return confirm ('Exclui o registro?');">Excluir</a>
	
	<a href="alterar.php?pl=<?php echo $tipo;?>">Alterar</a><hr>
	<?php
	$reg = mysqli_fetch_array($consulta);		
} 
?>
<br><a href="consultar.html">Voltar</a><br>
</body>
</html>