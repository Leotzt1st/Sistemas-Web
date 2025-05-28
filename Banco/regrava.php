<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<?php
$tipo=			$_POST["tipo"];
$endereco=			$_POST["endereco"];
$cidade=		$_POST["cidade"];
$estado= 		   $_POST["estado"];
$preco=			   $_POST["preco"];
$area=			   $_POST["area"];
$quartos=	$_POST["quartos"];
$banheiros=			$_POST["banheiros"];
$vagas_garagem=		$_POST["vagas_garagem"];
$descricao=		$_POST["descricao"];

$bd = mysqli_connect("localhost","root","","imobiliaria") OR DIE ("Erro ao conectar!");

$es=mysqli_query($bd,"update veiculos set veiculo='$imovel', 
										  marca='$marca', 
										  cor='$cor', 
										  ano='$ano', 
										  proprietario='$proprietario', 
										  fone='$fone', 
										  opcionais='$opcionais' 
										  where placa='$placa'");
if ($es==1)
{
    echo "Placa: $placa<br>
		  Veiculo: $veiculo<br>
		  Marca: $marca<br>
		  Cor: $cor<br>
		  Ano: $ano<br>
		  Proprietario: $proprietario<br>
		  Fone: $fone<br>
		  Opcionais: $opcionais<br>
		  <hr>";
	echo "Obrigado por participar - Registro Alterado. <br><br>  ";
}
else
{
    echo "ERRO - Registro não Alterado. <br><br> ";
}
	echo "<a href=consultar.html>Voltar para nova Consulta";
?>
</body>
</html>
